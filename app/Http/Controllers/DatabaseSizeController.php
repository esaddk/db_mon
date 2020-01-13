<?php

namespace App\Http\Controllers;

use App\Database_size;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Request as RequestURL;
use Barryvdh\DomPDF\Facade as PDF;


class DatabaseSizeController extends Controller
{
    public function view_report(Request $request)
    {
        // Get data availbility 
        Session::put('lap_start_date', null);
        Session::put('lap_end_date', null);
        $db_size = Database_size::with('database.rdbms');

        if (!empty($request->start_date) && !empty($request->end_date)) {
            $this->validate($request, [
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date'
            ]);
            $start_date = Carbon::parse($request->start_date)->format('Y-m-d') . ' 00:00:01';
            $end_date = Carbon::parse($request->end_date)->format('Y-m-d') . ' 23:59:59';

            // return $start_date;

            $db_size = $db_size->whereBetween('created_at', [$start_date, $end_date])->get();

            Session::put('lap_start_date', $start_date);
            Session::put('lap_end_date', $end_date);
        } else {
            // $start_date = Carbon::now()->startOfMonth()->format('Y-m-d') . ' 00:00:01';
            // $end_date   = Carbon::now()->endOfMonth()->format('Y-m-d') . ' 23:59:59';
            $start_date = Carbon::now()->format('Y-m-d') . ' 00:00:01';
            $end_date   = Carbon::now()->format('Y-m-d') . ' 23:59:59';

            $db_size = $db_size->whereBetween('created_at', [$start_date, $end_date])
                ->orderBy('size', 'desc')
                ->get();

            Session::put('lap_start_date', $start_date);
            Session::put('lap_end_date', $end_date);
        }
        // return $request->start_date;
        $phd_today = Carbon::now()->toDateString();

        // return $db_size;
        return view('report.db_size', compact('db_size', 'phd_today'));
    }

    public function export_pdf()
    {
        $start_date = Session::get('lap_start_date');
        $end_date = Session::get('lap_end_date');
        $today = Carbon::today()->format('d/m/Y');

        $start = Carbon::parse($start_date)->format('Y-m-d') . ' 00:00:01';
        $end = Carbon::parse($end_date)->format('Y-m-d') . ' 23:59:59';

        $db_size = Database_size::with('database.rdbms')
            ->whereBetween('created_at', [$start, $end])
            ->orderBy('size', 'desc')
            ->get();
        $url = RequestURL::fullUrl();
        // return view('report.db_availbility', compact('availbilities'));
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->loadView('export.pdf_db_size', compact('db_size', 'url', 'today'));
        return $pdf->stream();
    }
}
