<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return "Hello, it's your task list page";
    }

    public function create(){
        return view('tasks.create');
    }

    public function upload(Request $request){
        $task_name = $request->task_name;
        $task_description = $request->task_description;
        Task::create([
            'task_name' => $task_name,
            'task_description' => $task_description
        ]);

        return redirect()->back()->with('success', "Task created successfully!");
//        return redirect()->back()->with('error', "Task wasn't created successfully!");
    }

    public function edit(){
        return view('tasks.edit');
    }

    public function delete(){
        return view('tasks.delete');
    }
}
