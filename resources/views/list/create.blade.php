@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creating your list</div>

                <div class="card-body">
                    <!-- action="" is waar de <form> naartoe wordt gestuurd, zodra je op <button type="submit"> of op <input type="submit"> klikt -->
                    <form action="{{ route('list.store') }}" method="post">
                        <label>List name: </label>
                        <input type='text' name='listname' placeholder='Listname here please.'>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
