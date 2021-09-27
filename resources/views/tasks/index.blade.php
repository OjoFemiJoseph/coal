@extends('layouts.main')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-6 text-center mb-5">
                <h3> Tasks </h3>
            </div>
        </div>
        <h6 class='btn btn-warning'> Drag down (The task name is the handle, click on it)</h6>
        <form method='post' action="{{ route('tasks.create')}}">
            @csrf
        <input type='hidden' name='project' value='{{ $pro}}'>
        <input type='submit' class="nav-link btn btn-success create-new-button" value="+ Add Task">
        </form>
        @livewire('task-table',['tasks'=>$tasks])
</div>
</section>
@endsection