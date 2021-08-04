<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /***
     * Show all tasks method
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $tasks = Task::all();
        return view('tasks.index')->with([
            'tasks' => $tasks
        ]);
    }

    /***
     * Create task method
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        return view('tasks.create');
    }

    /***
     * Saving task to Data Base
     * Setting rules for input data
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function upload(Request $request){
        $request->validate([
           'task_name' => 'required|max:255'
        ]);

        $task_name = $request->task_name;
        $task_description = $request->task_description;

        $task = Task::create([
            'task_name' => $task_name,
            'task_description' => $task_description
        ]);

        $tasks = Task::all();

        return redirect('index')->with('success', 'Task created successfully!');
    }

    /***
     * Showing page for updating task
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id){
        // change to the normal view $task = new Task();
        //$task->fill($request->all())->save();
        $tasks = Task::find($id);

        return view('tasks.edit')->with([
            'tasks' => $tasks
        ]);
    }

    /***
     * Updating task in DB
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request){
        $request->validate([
            'task_name' => 'required|max:255'
        ]);

        $tasks = Task::find($request->id);

//        dd($request->task_status);
        $tasks->update([
            'task_name' => $request->task_name,
            'task_description' => $request->task_description,
            'task_status' => $request->task_status
        ]);

        $tasks->save();
        $tasks = Task::all();

        return redirect('index')->with('success', 'Task updated successfully!');
    }

    public function delete(){
        return view('tasks.delete');
    }
}
