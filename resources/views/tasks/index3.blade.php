@extends('layouts.master') 
@section('css')
    @include('layouts.css')
@endsection
@section('script')
    @include('layouts.script')
@endsection



@section('content')

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm công việc mới
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->

            <!-- New Task Form -->
                <form action="{{ url('/task/store') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">deadline</label>

                        <div class="col-sm-6">
                            <input type="text" name="deadline" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div> -->

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Thêm công việc
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách công việc hiện tại
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Tên công việc</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    <tr>
                    @forelse( $tasks as $row)
                        <td class="table-text"><div>{{ $row['name'] }} </div></td>
                        <!-- Task Complete Button -->
                        @if($row['status'] == 0 )                       
                        <td>
                            <a href="{{ route('task.reComplete', 1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn "></i>Chưa Làm
                            </a>
                        </td>
                        @elseif($row['status'] ==1 )
                        <td>
                            <a href="{{ route('task.complete', 1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>
                        @else
                        <td>
                            <a href="{{ route('task.reComplete', 1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn"></i>Không thực hiện
                            </a>
                        </td>
                        @endif
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('task.destroy', 1)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <!-- <input type="hidden" name="id" value="{{ $row['id'] }}"> -->
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty 
                không có công việc
            @endforelse
                    <tr>
                        <td class="table-text"><div><strike>Làm project Laravel </strike></div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('task.reComplete', 1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-refresh"></i>Làm lại
                            </a>
                        </td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('task.destroy', 1) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <!-- <input type="hidden" name="id" value="{{ $row['id'] }}"> -->
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection