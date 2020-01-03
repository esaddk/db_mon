<?php

namespace App\Http\Controllers;

use App\Crucial_databases;
use App\Database;
use Request as RequestURL;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class CrucialDatabasesController extends Controller
{
    public function view_report()
    {
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
                                        ) LIMIT 1", ['oracle', '2019-12-30', 'oracle', '2019-12-30']);

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
                                        ) LIMIT 1", ['mysql', '2019-12-30', 'mysql', '2019-12-30']);

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
                                        ) LIMIT 1", ['postgresql', '2019-12-30', 'postgresql', '2019-12-30']);


        $name_oracle = Database::select('database_name')->where('id', $crucial_oracle[0]->db_id)->get();
        $name_mysql = Database::select('database_name')->where('id', $crucial_mysql[0]->db_id)->get();
        $name_postgresql = Database::select('database_name')->where('id', $crucial_postgresql[0]->db_id)->get();
        // dd($crucial_oracle, $crucial_mysql, $crucial_postgresql);
        return view(
            'report.db_crucial',
            compact('crucial_postgresql', 'crucial_mysql', 'crucial_oracle', 'name_oracle', 'name_mysql', 'name_postgresql', 'url')
        );
    }

    public function export_pdf()
    {
        // Get data crucial_databases 
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
                                        ) LIMIT 1", ['oracle', '2019-12-30', 'oracle', '2019-12-30']);

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
                                        ) LIMIT 1", ['mysql', '2019-12-30', 'mysql', '2019-12-30']);

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
                                        ) LIMIT 1", ['postgresql', '2019-12-30', 'postgresql', '2019-12-30']);

        $name_oracle = Database::select('database_name')->where('id', $crucial_oracle[0]->db_id)->get();
        $name_mysql = Database::select('database_name')->where('id', $crucial_mysql[0]->db_id)->get();
        $name_postgresql = Database::select('database_name')->where('id', $crucial_postgresql[0]->db_id)->get();

        // return $name_oracle;

        $url = RequestURL::fullUrl();
        // return view('report.db_availbility', compact('availbilities'));
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->loadView(
                'export.pdf_crucial',
                compact('crucial_postgresql', 'crucial_mysql', 'crucial_oracle', 'name_oracle', 'name_mysql', 'name_postgresql', 'url')
            );
        return $pdf->stream();
    }
}
