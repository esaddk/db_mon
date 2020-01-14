<?php

namespace App\Http\Controllers;

use App\Postgre_object;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request as RequestURL;
use Barryvdh\DomPDF\Facade as PDF;

class PostgreObjectController extends Controller
{
    public function view_report(Request $request)
    {
        Session::put('lap_start_date', null);
        Session::put('lap_end_date', null);
        $table = Postgre_object::where('object_type', 'table')->orderBy('object_size', 'desc')->take(10)->with('database.application');
        $index = Postgre_object::where('object_type', 'index')->orderBy('object_size', 'desc')->take(10)->with('database.application');
        $tablespace = Postgre_object::where('object_type', 'tablespace')->orderBy('object_size', 'desc')->take(10)->with('database.application');

        if (!empty($request->start_date) && !empty($request->end_date)) {
            $this->validate($request, [
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date'
            ]);
            $start_date = Carbon::parse($request->start_date)->format('Y-m-d') . ' 00:00:01';
            $end_date = Carbon::parse($request->end_date)->format('Y-m-d') . ' 23:59:59';

            // return $start_date;

            $table = $table->whereBetween('created_at', [$start_date, $end_date])->get();
            $index = $index->whereBetween('created_at', [$start_date, $end_date])->get();
            $tablespace = $tablespace->whereBetween('created_at', [$start_date, $end_date])->get();

            Session::put('lap_start_date', $start_date);
            Session::put('lap_end_date', $end_date);
        } else {
            // $start_date = Carbon::now()->startOfMonth()->format('Y-m-d') . ' 00:00:01';
            // $end_date   = Carbon::now()->endOfMonth()->format('Y-m-d') . ' 23:59:59';
            $start_date = Carbon::now()->format('Y-m-d') . ' 00:00:01';
            $end_date   = Carbon::now()->format('Y-m-d') . ' 23:59:59';

            $table = $table->whereBetween('created_at', [$start_date, $end_date])->get();
            $index = $index->whereBetween('created_at', [$start_date, $end_date])->get();
            $tablespace = $tablespace->whereBetween('created_at', [$start_date, $end_date])->get();

            Session::put('lap_start_date', $start_date);
            Session::put('lap_end_date', $end_date);
        }

        // dd($crucial_oracle, $crucial_mysql, $crucial_postgresql);
        return view(
            'report.postgresql',
            compact('table', 'index', 'tablespace')
        );
    }

    public function export_pdf()
    {
        $start_date = Session::get('lap_start_date');
        $end_date = Session::get('lap_end_date');
        $today = Carbon::today()->format('d/m/Y');

        $start = Carbon::parse($start_date)->format('Y-m-d') . ' 00:00:01';
        $end = Carbon::parse($end_date)->format('Y-m-d') . ' 23:59:59';

        $table = Postgre_object::where('object_type', 'table')->whereBetween('created_at', [$start, $end])->orderBy('object_size', 'desc')->take(10)->with('database.application')->get();
        $index = Postgre_object::where('object_type', 'index')->whereBetween('created_at', [$start, $end])->orderBy('object_size', 'desc')->take(10)->with('database.application')->get();
        $tablespace = Postgre_object::where('object_type', 'tablespace')->whereBetween('created_at', [$start, $end])->orderBy('object_size', 'desc')->take(10)->with('database.application')->get();
        $url = RequestURL::fullUrl();
        // return view('report.db_availbility', compact('availbilities'));
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->loadView('export.pdf_postgre_object', compact('table', 'index', 'tablespace', 'url', 'today'));
        return $pdf->stream();
    }
}
