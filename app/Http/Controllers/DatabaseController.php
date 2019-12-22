<?php

namespace App\Http\Controllers;

use App\Database;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DatabaseController extends Controller
{
    public function index()
    {
        // Get data database 
        $databases = Database::with('user', 'rdbms')->get();
        return view('database', compact('databases'));
    }

    public function InsertDatabase(Request $request)
    {
        Database::create($request->all());
        Alert::success('Data Database Berhasil Ditambahkan')->persistent("Close");
        return back();
        // return view('home');

    }

    public function UpdateDatabase(Request $request, $id)
    {

        $database = Database::findOrFail($id);

        $database->update([
            'user_id'           => $request->user_id,
            'rdbms_id'          => $request->rdbms_id,
            'application_id'    => $request->application_id,
            'database_name'     => $request->database_name,
            'ip_sever'          => $request->ip_sever,
            'description'       => $request->description,
        ]);

        Alert::success('Data Database Berhasil Diedit')->persistent("Close");
        return back();
    }

    public function destroyDatabase($id)
    {
        $database = Database::find($id);

        $database->delete();
        Alert::success('Data Berhasil di hapus')->persistent("Close");
        return back();
    }

    public function destroy($id)
    {
        $database = Database::findOrFail($id);

        $database->delete();

        return redirect()->route('database')->with('success', 'Database deleted successfully');
    }
}
