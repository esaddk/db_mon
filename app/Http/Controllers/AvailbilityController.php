<?php

namespace App\Http\Controllers;

use App\Availbility;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AvailbilityController extends Controller
{
    public function index()
    {
        // Get data availbility 
        $availbilities = Availbility::with('user', 'rdbms')->get();
        return view('availbility', compact('availbilities'));
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
