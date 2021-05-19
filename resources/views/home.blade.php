@extends('layouts.master')


@section('css')
    @include('layouts.css')
@endsection


@section('script')
    @include('layouts.script')
@endsection


@section('content')
@foreach ($list as $row)
    {{ $row['name'] }} :
    @if($row['status'] == 0)
    Chưa làm
    @elseif($row['status'] == 1)
    Đã hoàn thành
    @elseif($row['status']== -1)
    Không thực hiện
    @else
    @return 
    @endif
    </br>
@endforeach
@endsection