<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\models\Task;
use Carbon\Carbon;
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
        $tasks = Task::orderBy('created_at', 'desc')->get();
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
         $data = $request->except('_token');
        // echo $name;
        // $all = $request->all();

        // $all = $request->only(['name', 'deadline']);

        // $all = $request->except('_token');
        //echo $data['name'];

        // $task = new Task();
        // $task->name = $data['name'];
        // $task->content = $data['content'];
        // $task->status = 1;
        // $task->deadline = $data['deadline'];
        // $task->save();
        $data['status']= Task::STATUS['display'];
        $success =  Task::create($data);

        if($success){
            
            return redirect()->route('task.index');
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show')->with([
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with([
            'task' => $task
        ]);
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

        $data = $request->except('_token');
        // Lấy dữ liệu từ Form
        // $name = $request->get('name');
        // $deadline = $request->get('deadline');
        // $content = $request->get('content');
        // // Cập nhật
        // $task = Task::find($id);
        // $task->name = $name;
        // $task->status = 1;
        // $task->content = $content;
        // $task->deadline = $deadline;
        // $task->save();
        Task::where('id', $id)->update(['name'=>$data['name'], 'content'=>$data['content'],'deadline'=>$data['deadline'],'priority'=>$data['priority'] ]);
        return redirect()->route('task.index');
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
        Task::where('id', $id)->update(['status' => 2]);
        return redirect()->route('task.index');
        
    }

    public function reComplete($id)
    {
        Task::where('id', $id)->update(['status' => 1]);
        return redirect()->route('task.index');
    }
}
