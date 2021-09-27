
<table class="table" wire:sortable="updateTaskOrder">
    <thead>
        <tr>
        <th scope="col">Task Name</th>
        <th scope="col">Assigned To</th>
        <th scope="col">Created </th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
            <!-- without the handle, the whole row will be moving rendering the edit and delete not useful -->
            <td wire:sortable.handle> {{ $task->name}}</td>
            <td>{{ $task->Assigned_To}}</td>
            <td> {{ $task->created_at}} </td>
            <td><a href="{{ route('tasks.edit',$task->id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ route('tasks.destroy',$task->id) }}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value='Delete'>
                </form>
                </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
