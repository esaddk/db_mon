<?php

namespace App\Http\Controllers;

use App\User;
use App\Rdbms;
use Carbon\Carbon;
use App\Availbility;
use Request as RequestURL;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Session;


class AvailbilityController extends Controller
{
    public function view_report(Request $request)
    {
        // Get data availbility 
        Session::put('lap_start_date', null);
        Session::put('lap_end_date', null);
        $availbilities = Availbility::with('user', 'rdbms');

        if (!empty($request->start_date) && !empty($request->end_date)) {
            $this->validate($request, [
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date'
            ]);
            $start_date = Carbon::parse($request->start_date)->format('Y-m-d') . ' 00:00:01';
            $end_date = Carbon::parse($request->end_date)->format('Y-m-d') . ' 23:59:59';

            // return $start_date;

            $availbilities = $availbilities->whereBetween('created_at', [$start_date, $end_date])->get();

            Session::put('lap_start_date', $start_date);
            Session::put('lap_end_date', $end_date);
        } else {
            $start_date = Carbon::now()->startOfMonth()->format('Y-m-d') . ' 00:00:01';
            $end_date   = Carbon::now()->endOfMonth()->format('Y-m-d') . ' 23:59:59';

            $availbilities = $availbilities->whereBetween('created_at', [$start_date, $end_date])->get();

            Session::put('lap_start_date', $start_date);
            Session::put('lap_end_date', $end_date);
        }
        // return $request->start_date;
        $phd_today = Carbon::now()->toDateString();


        return view('report.db_availbility', compact('availbilities', 'phd_today'));
    }

    public function export_pdf()
    {
        $start_date = Session::get('lap_start_date');
        $end_date = Session::get('lap_end_date');
        $today = Carbon::today()->format('d/m/Y');

        $start = Carbon::parse($start_date)->format('Y-m-d') . ' 00:00:01';
        $end = Carbon::parse($end_date)->format('Y-m-d') . ' 23:59:59';

        $availbilities = Availbility::with('user', 'rdbms')
            ->whereBetween('created_at', [$start, $end])
            ->get();
        $url = RequestURL::fullUrl();
        // return view('report.db_availbility', compact('availbilities'));
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->loadView('export.pdf_availbility', compact('availbilities', 'url', 'today'));
        return $pdf->stream();
    }

    public function index()
    {
        // Get data availbility 
        $availbilities = Availbility::with('user', 'rdbms')->get();
        $rdbms = Rdbms::get();
        $users = User::get();
        return view('availbility', compact('availbilities', 'rdbms', 'users'));
    }

    public function InsertAvailbility(Request $request)
    {
        Availbility::create($request->all());
        $this->validate($request, [
            'ip_server' => 'required|ipv4',
        ]);
        Alert::success('Data Availbility Berhasil Ditambahkan')->persistent("Close");
        return back();
        // return view('home');

    }

    public function UpdateAvailbility(Request $request, $id)
    {

        $availbility = Availbility::findOrFail($id);

        $availbility->update([
            'user_id'       => $request->user_id,
            'rdbms_id'      => $request->rdbms_id,
            'count_percent' => $request->count_percent,
            'status'        => $request->status,
        ]);

        Alert::success('Data Availbility Berhasil Diedit')->persistent("Close");
        return back();
    }

    public function destroyAvailbility(Request $request)
    {

        $availbility_id = $request->input('availbility_id');
        $Availbility = Availbility::where('id', $availbility_id)->delete();
        Alert::success('Data Berhasil di hapus')->persistent("Close");
        return back();
    }

    public function destroy($id)
    {
        $availbility = Availbility::findOrFail($id);

        $availbility->delete();

        return redirect()->route('availbility')->with('success', 'Availbility deleted successfully');
    }
}
