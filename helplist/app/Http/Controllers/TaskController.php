<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with(['user'])->get();
        $now = \Carbon\Carbon::now();

        return view('index', ['tasks' => $tasks, 'now' => $now]);
    }

    public function show($id)
    {
        $task = Task::find($id);
        $helped = $task->helpedusers->contains(Auth::id());
        $helpuser = $task->helpedusers->count();

        return view('tasks.show', ['task' => $task, 'helped' => $helped, 'helpuser' => $helpuser]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->fill($request->all());
        $task->user()->associate(Auth::user()); 
        $task->save();

        return redirect()->to('tasks/index');
    }

    public function delete(Task $task)
    {   
        if (Auth::id() !== $task->user_id) {
            abort(403);
        }

        $task->delete();

        return redirect()->to('tasks/index');
    }

    
}
