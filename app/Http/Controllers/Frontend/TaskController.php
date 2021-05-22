<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('tasks.index3',['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'task create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = $request->all();
        // echo $name;
        // $all = $request->all();

        // $all = $request->only(['name', 'deadline']);

        // $all = $request->except('_token');
        //echo $data['name'];

        $task = new Task();
        $task->name = $data['name'];
        $task->content = $data['content'];
        $task->status = 1;
        $task->deadline = $data['deadline'];
        $task->save();
        return redirect()->route('task.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'Day la ham show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.index');
    }


    public function complete($id)
    {
        echo 'Đây là hàm complete';
    }

    public function reComplete($id)
    {
        echo 'Đây là hàm reComplete';
    }
}
