<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


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
        $validator = Validator::make($request->all(), [
            'app_name' => 'required|unique:applications,app_name',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->first();
            // return $message;
            Alert::error('Error Add Data', '' . $message . '')->persistent("Close");
            return back();
        }

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

    public function destroyApplication(Request $request)
    {

        $app_id = $request->input('app_id');
        $Application = Application::where('id', $app_id)->delete();
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
