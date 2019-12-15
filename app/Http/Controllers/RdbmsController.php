<?php

namespace App\Http\Controllers;

use App\Rdbms;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RdbmsController extends Controller
{
    public function index()
    {
        // Get data Rdbms 
        $rdbms = Rdbms::get();
        return view('Rdbms', compact('rdbms'));
    }

    public function InsertRdbms(Request $request)
    {
        Rdbms::create($request->all());
        Alert::success('Data Rdbms Berhasil Ditambahkan')->persistent("Close");
        return back();
        // return view('home');

    }

    public function UpdateRdbms(Request $request, $id)
    {

        $Rdbms = Rdbms::findOrFail($id);

        $Rdbms->update([
            // 'id'       => $request->id,
            'name'      => $request->name,

        ]);

        Alert::success('Data Rdbms Berhasil Diedit')->persistent("Close");
        return back();
    }

    public function destroyRdbms($id)
    {
        $Rdbms = Rdbms::find($id);

        $Rdbms->delete();
        Alert::success('Data Berhasil di hapus')->persistent("Close");
        return back();
    }

    public function destroy($id)
    {
        $Rdbms = Rdbms::findOrFail($id);

        $Rdbms->delete();

        return redirect()->route('Rdbms')->with('success', 'User deleted successfully');
    }
}
