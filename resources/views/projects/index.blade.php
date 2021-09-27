@extends('layouts.main')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
          
                <th scope="col">Project Name</th>
                <th scope="col">Created </th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
             
                    <td ><a href="{{route('tasks.list',$project->id)}}">{{ $project->name}}</a></td>
                    <td> {{ $project->created_at}} </td>
                    <td><a href="{{ route('projects.edit',$project->id) }}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{ route('projects.destroy',$project->id) }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value='Delete'>
                        </form>
                        </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
</div>
</section>
@endsection