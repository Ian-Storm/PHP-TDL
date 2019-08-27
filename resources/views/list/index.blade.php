@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 h3">Lists</div>
                        <a href="{{ route('list.create') }}" class="btn btn-primary col-md-4 offset-md-4">Create list</a>
                    </div>
                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($lists as $list)
                    <div class="row">
                    	<a class="col-md-4" href="{{ route('task.index', ['list_id'=>$list->id]) }}">{{$list->name}}</a>

                        <a href="{{ route('list.edit', $list->id) }}" class="btn btn-secondary offset-md-5 btn-sm">Edit list</a>

                        <div class="col-md-2">
                            <form method="post" action="{{ route('list.destroy', $list->id) }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Remove list</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection