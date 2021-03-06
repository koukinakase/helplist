<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HelpController extends Controller
{
    public function index()
    {
        $tasks = Auth::user()->helpedtasks;

        return view('helps.index', ['tasks' => $tasks]);
    }

    public function add(Task $task)
    {
        Auth::user()->helpedtasks()->attach($task->id);

        return redirect()->back();
    }

    public function remove(Task $task)
    {
        Auth::user()->helpedtasks()->detach($task->id);

        return redirect()->back();
    }
}
