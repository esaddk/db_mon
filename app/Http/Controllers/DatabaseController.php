<?php

namespace App\Http\Controllers;

use App\User;
use App\Rdbms;
use App\Database;
use App\Application;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class DatabaseController extends Controller
{
    public function index()
    {
        // Get data database 
        $databases = Database::with('user', 'rdbms', 'application')->orderBy('created_at', 'desc')->get();
        $users = User::get();
        $rdbms = Rdbms::get();
        $applications = Application::get();
        return view('database', compact('databases', 'users', 'rdbms', 'applications'));
    }

    public function InsertDatabase(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'database_name' => 'required|unique:databases,database_name',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->first();
            // return $message;
            Alert::error('Error Add Data', '' . $message . '')->persistent("Close");
            return back();
        }

        Database::create($request->all());
        Alert::success('Data Database Berhasil Ditambahkan')->persistent("Close");
        return back();
        // return view('home');

    }

    public function UpdateDatabase(Request $request, $id)
    {

        // $validator = Validator::make($request->all(), [
        //     'database_name' => 'required|unique:databases,database_name',
        // ]);

        // if ($validator->fails()) {
        //     $message = $validator->errors()->first();
        //     // return $message;
        //     Alert::error('Error Update Data', '' . $message . '')->persistent("Close");
        //     return back();
        // }

        $database = Database::findOrFail($id);

        $database->update([
            'user_id'           => $request->user_id,
            'rdbms_id'          => $request->rdbms_id,
            'application_id'    => $request->application_id,
            'database_name'     => $request->database_name,
            'size_alocation'    => $request->size_alocation,
            'description'       => $request->description,
        ]);

        Alert::success('Data Database Berhasil Diedit')->persistent("Close");
        return back();
    }

    public function destroyDatabase(Request $request)
    {
        $database_id = $request->input('database_id');
        $Database = Database::where('id', $database_id)->delete();
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
