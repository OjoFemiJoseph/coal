<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tasks;
use DB;

class TaskTable extends Component

{
    public $tasks;


    public function render()
    {
       
        
        $tas = tasks::where('project_id')->get();
        $tasks = $tas->sortBy('position');
        return view('livewire.task-table',compact('tasks'));
    }

    public function updateTaskOrder($tasks)
    {
    
        foreach($tasks as $task)
        {
            
            tasks::find($task['value'])->update(['position'=>$task['order']]);
        }
        $t = tasks::find($task['value']);
        $pro = $t->project_id;
        return redirect()->route('tasks.list',$pro);
    }
}
