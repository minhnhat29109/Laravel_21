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
                            <input type="text" name="name" id="task-name" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Nội dung:</label>

                        <div class="col-sm-6">
                        <textarea name="content" id="editor-task" class="form-control" cols="30" rows="10" ></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Mức độ ưu tiên:</label>

                        <div class="col-sm-6">
                            <select name="priority" id="">
                                <option value="0">Bình thường</option>
                                <option value="1">Quan trọng</option>
                                <option value="2">Khẩn cấp</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Deadline</label>

                        <div class="col-sm-6">
                            <input type="datetime" name="deadline" id="task-name" class="form-control" value="">
                        </div>
                    </div>

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
                    <th>Nội dung</th>
                    <th>Hạn hoàn thành</th>
                    <th>Trạng thái</th>
                    <th>Mức độ ưu tiên</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @forelse( $tasks as $row)
                    <tr>
                        <td class="table-text"><div> <a href="{{route('task.show', $row->id)}}" target="_blink"> {{ $row->name }} </a> </div></td>
                        <!-- Task Complete Button -->
                                          
                        <td class="table-text"><div>{!! $row['content'] !!} </div></td>
                        
                        <td class="table-text"><div>{{ $row['deadline'] }} </div></td>

                        @if($row['status'] == 1 )
                        <td>
                            <a href="/task/complete/{{$row->id}}" type="submit" class="btn btn-success">
                                Hoàn thành
                            </a>
                        </td>
                        @else
                        <td>
                            <a href="/task/reComplete/{{$row->id}}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-refresh"> </i>Làm lại
                            </a>
                        </td>
                        @endif
                        <!-- Task Delete Button -->
                        @if ($row['priority'] == 0)
                        <td class="table-text"><div>Bình thường </div></td>
                            
                        @elseif($row['priority'] == 1)
                        <td class="table-text"><div>Quan trọng </div></td>
                        @else
                        <td class="table-text"><div>Khẩn cấp</div></td>
                            
                        @endif
                        <td>
                            
                                <a href="{{route('task.edit',$row->id)}}"><button type="submit" class="btn btn-danger">
                                    Chỉnh sửa
                                </button></a>
                            
                        </td>
                        <td>
                            <form action="/task/destroy/{{$row->id}}" method="POST">
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
                <h1>Không có công việc</h1>
            
                    <tr>
                    @endforelse
                        
                    </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection