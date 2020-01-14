<?php

namespace App\Http\Controllers;

use App\Rdbms;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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

        // $request->validate([
        //     'code' => 'required|unique:rdbms,code',
        // ]);
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:rdbms,code',
            'ip_server' => 'required|ipv4'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->first();
            // return $message;
            Alert::error('Error Add Data', '' . $message . '')->persistent("Close");
            return back();
        }

        Rdbms::create($request->all());
        Alert::success('Data Rdbms Berhasil Ditambahkan')->persistent("Close");
        return back();
        // return view('home');

    }

    public function UpdateRdbms(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            // 'code' => 'required|unique:rdbms,code' . $id,
            'ip_server' => 'required|ipv4'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->first();
            // return $message;
            Alert::error('Error Update Data', '' . $message . '')->persistent("Close");
            return back();
        }

        $Rdbms = Rdbms::findOrFail($id);

        $Rdbms->update([
            // 'id'       => $request->id,
            'code'      => $request->code,
            'name'      => $request->name,
            'version'   => $request->version,
            'ip_server' => $request->ip_server,

        ]);

        Alert::success('Data Rdbms Berhasil Diedit')->persistent("Close");
        return back();
    }

    public function destroyRdbms(Request $request)
    {

        $rdbms_id = $request->input('rdbms_id');
        $Rdbms = Rdbms::where('id', $rdbms_id)->delete();
        Alert::success('Data Berhasil di hapus')->persistent("Close");
        return back();
    }

    public function destroy($id)
    {
        $Rdbms = Rdbms::findOrFail($id);

        $Rdbms->delete();

        return redirect()->route('Rdbms')->with('success', 'RDBMS deleted successfully');
    }
}
