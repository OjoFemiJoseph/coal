<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\tasks;
use Illuminate\Support\Facades\Validator;
use DB;

class taskController extends Controller
{
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $project = $request->project;
        return view('tasks.create',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * make use of Validator instead of Form Request
     * 
     * The project validation make use of form request for validation
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'team' => ['required'],
        ]);
         
        if ($validator->fails()) {
             return redirect()->route('projects.index');
        }
        $position = tasks::where('project_id',$request->project)->max(column:'position')+1;
        tasks::create([
            'name' => $request->name,
            'project_id'=> $request->project,
            'Assigned_To'=> $request->team,
            'position' => $position,
        ]);

        return redirect()->route('tasks.list',$request->project);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tasks $pro)
    {
        return view('tasks.edit',compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tasks $pro)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'team' => ['required'],
        ]);
         
        if ($validator->fails()) {
             return redirect()->route('projects.index');
        }
        $pro->update([
            'name' => $request->name,
            'Assigned_To' => $request->team,
        ]);

        $id = $pro->project_id;
        return redirect()->route('tasks.list',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tasks $pro)
    {
        $position = tasks::where('position','>',$pro->position)->update(
            ['position'=> \DB::raw('position-1')]
        );
        
        $pro->delete();

        return redirect()->back();
    }
}
