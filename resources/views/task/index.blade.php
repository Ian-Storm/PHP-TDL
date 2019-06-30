@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 h3">Tasks</div>
                        <a href="{{ route('task.create') }}" class="btn btn-primary col-md-4 offset-md-4">Create task</a>
                    </div>
                </div>


                <div class="card-body">
                    <div class="container">
                    @foreach($tasks as $task)
                        <div class="row">
                            <div class="col-md-3">{{$task->name}}</div>
                            <div class="col-md-5">{{$task->description}}</div>
                            <div class="col-md-2">{{$task->duration}}</div>
                            <div class="col-md-2">{{$task->status}}</div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
