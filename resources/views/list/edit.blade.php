@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editing your list</div>

                <div class="card-body">
                    <!-- action="" is waar de <form> naartoe wordt gestuurd, zodra je op <button type="submit"> of op <input type="submit"> klikt -->
                    <form action="{{ route('list.index') }}" method="post">
                        @method('PUT')
                        @csrf
                        <label>List name: </label>
                        <input required type='text' name='listname' value="{{$list->name}}" placeholder='Listname here please.'>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
