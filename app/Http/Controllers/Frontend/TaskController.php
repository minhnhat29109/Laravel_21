<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        $list = [
            [
                'id' => 1,
                'name' => 'Học View trong Laravel',
                'status' => 0
            ],
            [
                'id' => 2,
                'name' => 'Học Route trong Laravel',
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => 'Làm bài tập View trong Laravel',
                'status' => -1
            ],
        ];
        return view('tasks.index3');
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
        // $name = $request->get('name');
        // echo $name;
        // $all = $request->all();

        $all = $request->only(['name', 'deadline']);

        // $all = $request->except('_token');
        var_dump($all);
        
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
    public function destroy(Request $request)
    {
        $all = $request->only(['id']);
         dd($all);
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
