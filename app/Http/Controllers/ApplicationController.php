<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ApplicationController extends Controller
{

    public function index()
    {
        // Get data Application 
        $applications = Application::get();
        return view('Application', compact('applications'));
    }

    public function InsertApplication(Request $request)
    {
        Application::create($request->all());
        Alert::success('Data Application Berhasil Ditambahkan')->persistent("Close");
        return back();
        // return view('home');

    }

    public function UpdateApplication(Request $request, $id)
    {

        $Application = Application::findOrFail($id);

        $Application->update([
            'app_name'       => $request->app_name,
            'app_pic'      => $request->app_pic,
        ]);

        Alert::success('Data Application Berhasil Diedit')->persistent("Close");
        return back();
    }

    public function destroyApplication($id)
    {
        $Application = Application::find($id);

        $Application->delete();
        Alert::success('Data Berhasil di hapus')->persistent("Close");
        return back();
    }

    public function destroy($id)
    {
        $Application = Application::findOrFail($id);

        $Application->delete();

        return redirect()->route('Application')->with('success', 'Application deleted successfully');
    }
}
