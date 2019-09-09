@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creating your Task</div>

                <div class="card-body">
                    <!-- action="" is waar de <form> naartoe wordt gestuurd, zodra je op <button type="submit"> of op <input type="submit"> klikt -->
                    <form action="{{ route('task.store') }}" method="post">
                        @csrf
                        <label>Task name: </label>
                        <input required type='text' name='taskname' placeholder='Task name here please.'><br>
                        <label>Task description: </label>
                        <input required type='text' name='taskdescription' placeholder='Task description here please.'><br>
                        <label>Task duration: </label>
                        <select required name="taskduration">
                            <option value="N/A">N/A</option>
                            <option value="0-15">0-15 Minutes</option>
                            <option value="15-30">15-30 Minutes</option>
                            <option value="30-45">30-45 Minutes</option>
                            <option value="45-60">45-60 Minutes</option>
                            <option value="60+">60+ Minutes</option>
                        </select><br>
                        <label>Task status: </label>
                        <select required name="taskstatus">
                            <option value="Done">Done</option>
                            <option value="Not Done">Not Done</option>
                        </select><br>
                        <input type='hidden' name='listid' value=>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
