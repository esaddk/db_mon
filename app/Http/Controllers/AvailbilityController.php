<?php

namespace App\Http\Controllers;

use Request as RequestURL;
use App\User;
use App\Rdbms;
use App\Availbility;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;

class AvailbilityController extends Controller
{
    public function view_report()
    {
        // Get data availbility 
        $availbilities = Availbility::with('user', 'rdbms')->get();
        return view('report.db_availbility', compact('availbilities'));
    }

    public function export_pdf()
    {
        // Get data availbility 
        $availbilities = Availbility::with('user', 'rdbms')->get();
        $url = RequestURL::fullUrl();
        // return view('report.db_availbility', compact('availbilities'));
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->loadView('export.pdf_availbility', compact('availbilities', 'url'));
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

    public function destroyAvailbility($id)
    {
        $availbility = Availbility::find($id);

        $availbility->delete();
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
