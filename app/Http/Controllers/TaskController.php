<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Request as RequestURL;
use Session;
// use Request;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TaskController extends Controller
{
    public function view_report(Request $request)
    {

        Session::put('lap_start_date', null);
        Session::put('lap_end_date', null);

        $tasks = DB::table('tasks')
            ->select('rdbms', DB::raw('sum(provisioning) as provisioning , 
                                       sum(troubleshooting) as troubleshooting, 
                                       MONTHNAME(created_at) as month'))
            // ->where('MONTHNAME(created_at)', '2020')
            ->groupBy('rdbms', DB::raw('MONTHNAME(created_at)'));

        if (!empty($request->start_date) && !empty($request->end_date)) {
            $this->validate($request, [
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date'
            ]);
            $start_date = Carbon::parse($request->start_date)->format('Y-m-d') . ' 00:00:01';
            $end_date = Carbon::parse($request->end_date)->format('Y-m-d') . ' 23:59:59';

            // return $start_date;

            $tasks = $tasks->whereBetween('created_at', [$start_date, $end_date])->get();

            Session::put('lap_start_date', $start_date);
            Session::put('lap_end_date', $end_date);
        } else {

            $tasks = DB::table('tasks')
                ->select('rdbms', DB::raw('sum(provisioning) as provisioning , 
                                       sum(troubleshooting) as troubleshooting, 
                                       MONTHNAME(created_at) as month'))
                // ->where(DB::raw("YEAR(created_at) = '2020'"))
                ->groupBy('rdbms', DB::raw('MONTHNAME(created_at)'))->get();
        }

        return view('report.dba_monthly', compact('tasks'));
    }

    public function export_pdf()
    {
        $start_date = Session::get('lap_start_date');
        $end_date = Session::get('lap_end_date');
        $today = Carbon::today()->format('d/m/Y');

        $start = Carbon::parse($start_date)->format('Y-m-d') . ' 00:00:01';
        $end = Carbon::parse($end_date)->format('Y-m-d') . ' 23:59:59';

        $tasks = DB::table('tasks')
            ->select('rdbms', DB::raw('sum(provisioning) as provisioning , 
                                       sum(troubleshooting) as troubleshooting, 
                                       MONTHNAME(created_at) as month'))
            ->groupBy('rdbms', DB::raw('MONTHNAME(created_at)'));

        $tasks = $tasks->whereBetween('created_at', [$start, $end])->get();

        $url = RequestURL::fullUrl();
        // return view('report.db_task', compact('tasks'));
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->loadView('export.pdf_task', compact('tasks', 'url'));
        return $pdf->stream();
    }

    public function index()
    {
        // Get data task 
        $tasks = Task::with('user')->orderBy('created_at', 'desc')->get();
        $users = User::get();
        return view('task', compact('tasks', 'users'));
    }

    public function InsertTask(Request $request)
    {
        Task::create($request->all());
        Alert::success('Data Task Berhasil Ditambahkan')->persistent("Close");
        return back();
        // return view('home');

    }

    public function UpdateTask(Request $request, $id)
    {

        $task = Task::findOrFail($id);

        $task->update([
            'user_id'           => $request->user_id,
            'rdbms'             => $request->rdbms,
            'provisioning'      => $request->provisioning,
            'troubleshooting'   => $request->troubleshooting,
        ]);

        Alert::success('Data Task Berhasil Diedit')->persistent("Close");
        return back();
    }

    public function destroyTask(Request $request)
    {
        $task_id = $request->input('task_id');
        $Task = Task::where('id', $task_id)->delete();
        Alert::success('Data Berhasil di hapus')->persistent("Close");
        return back();
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return redirect()->route('task')->with('success', 'Task deleted successfully');
    }
}
