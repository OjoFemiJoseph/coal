<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    projects,
    tasks,
};

use App\Http\Requests\projectValidation;



class projectController extends Controller
{
    // loads all the saved projects
    public function index()
    {
        $projects = projects::all();

        return view('projects.index',compact('projects'));
    }

    public function create()
    {

        return view('projects.create');
    }

    //save the new project in the database
    public function store(projectValidation $request)
    {   
        
        projects::create([
            'name' => $request->name,
        ]);

        return redirect()->route('projects.index');
    }

    // return the edit page with the old value passed
    public function edit(projects $pro)
    {
        
        return view('projects.edit',compact('pro'));
    }

    // update the changes made
    public function update(projectValidation $request, projects $pro)
    {
     
        $pro->update([
            'name' => $request->name,
        ]);

        return redirect()->route('projects.index');
    }

    //delete the project clicked
    public function destroy(projects $pro)
    {
        $tasks = tasks::where('project_id',$pro->project_id);
        foreach($tasks as $task) {
            $task->delete();
        }
        $pro->delete();

        return redirect()->back();
    }

    // return all the tasks under a specific project
    public function list($pro)
    {
        
        $tas = tasks::where('project_id',$pro)->get();

        $tasks = $tas->sortBy('position');

        
        return view('tasks.index',compact('tasks','pro'));
    }

}
