<?php

namespace App\Http\Controllers;

use App\Database;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $count_oracle = DB::table('databases')
            ->whereIn('rdbms_id', function ($query) {
                $query->select('id')->from('rdbms')
                    ->Where('name', '=', 'oracle');
            })
            ->count();

        $count_mysql = DB::table('databases')
            ->whereIn('rdbms_id', function ($query) {
                $query->select('id')->from('rdbms')
                    ->Where('name', '=', 'mysql');
            })
            ->count();

        $count_postgresql = DB::table('databases')
            ->whereIn('rdbms_id', function ($query) {
                $query->select('id')->from('rdbms')
                    ->Where('name', '=', 'postgresql');
            })
            ->count();

        $crucial_oracle = DB::select("SELECT *
                                        FROM crucial_databases l
                                            WHERE rdbms = ? 
                                            AND insert_date = ? 
                                            AND NOT EXISTS (
                                        SELECT *
                                        FROM crucial_databases l1
                                        WHERE rdbms = ? AND insert_date = ? AND l1.crucial_level >= l.crucial_level AND l1.size >= l.size
                                        AND
                                        ( l1.crucial_level > l.crucial_level OR l1.size > l.size)
                                        ) LIMIT 1", ['oracle', '2020-01-15', 'oracle', '2020-01-15']);

        $crucial_mysql = DB::select("SELECT *
                                        FROM crucial_databases l
                                            WHERE rdbms = ? 
                                            AND insert_date = ? 
                                            AND NOT EXISTS (
                                        SELECT *
                                        FROM crucial_databases l1
                                        WHERE rdbms = ? AND insert_date = ? AND l1.crucial_level >= l.crucial_level AND l1.size >= l.size
                                        AND
                                        ( l1.crucial_level > l.crucial_level OR l1.size > l.size)
                                        ) LIMIT 1", ['mysql', '2020-01-15', 'mysql', '2020-01-15']);

        $crucial_postgresql = DB::select("SELECT *
                                        FROM crucial_databases l
                                            WHERE rdbms = ? 
                                            AND insert_date = ? 
                                            AND NOT EXISTS (
                                        SELECT *
                                        FROM crucial_databases l1
                                        WHERE rdbms = ? AND insert_date = ? AND l1.crucial_level >= l.crucial_level AND l1.size >= l.size
                                        AND
                                        ( l1.crucial_level > l.crucial_level OR l1.size > l.size)
                                        ) LIMIT 1", ['postgresql', '2020-01-15', 'postgresql', '2020-01-15']);


        $name_oracle = Database::select('database_name')->where('id', $crucial_oracle[0]->db_id)->get();
        $name_mysql = Database::select('database_name')->where('id', $crucial_mysql[0]->db_id)->get();
        $name_postgresql = Database::select('database_name')->where('id', $crucial_postgresql[0]->db_id)->get();



        return view('home', compact('count_oracle', 'count_mysql', 'count_postgresql', 'name_oracle', 'name_mysql', 'name_postgresql', 'crucial_oracle', 'crucial_mysql', 'crucial_postgresql'));
    }

    public function chartTask()
    {

        $chart = DB::select("SELECT MONTH(created_at) as month,
                sum(provisioning) as provisioning,
                sum(troubleshooting) as troubleshooting 
                FROM db_mon.tasks 
                where YEAR(created_at) = '2020'
                group by MONTH(created_at)");

        $first = $chart[0]->month;
        $hasil = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $hasil2 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $bulan_angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

        foreach ($bulan_angka as $key => $value2) {
            foreach ($chart as $value) {
                if ($value->month == $value2) {
                    $hasil[$key] = $hasil[$key] + $value->provisioning;
                    $hasil2[$key] = $hasil2[$key] + $value->troubleshooting;
                }
            }
        }
        return array($hasil, $hasil2);
    }
}
