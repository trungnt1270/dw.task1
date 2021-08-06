<?php
?>

<!--Thua ke tu app.blade template -->
@extends('layout.app')

{{--Noi dung trang con--}}
{{--Dung app.css--}}



@section('content')
    {{--Dinh nghia phan noi dung cua trang task--}}
    <div class="panel-body">
        {{--Hien thi thong bao loi--}}
        @include('errors.503')
        {{--form nhap task moi--}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            {{csrf_field()}}
            {{--ten task--}}
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            {{-- nut task--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add Task
                    </button>
                </div>
            </div>
        </form>

        {{--Hien thi Task hien tai co trong database        --}}

        @if(count($tasks)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Task
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        {{--                        Tao tieu de cua Task--}}
                        <thead>
                        <td>Task</td>
                        <td>&nbsp;</td>
                        </thead>
                        {{--                        tao cac dong de hien thi task--}}
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>{{$task->name}}</div>
                                </td>

                                <td>
                                    <form action="/task/{{$task->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button>Delete Task</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>


@endsection
