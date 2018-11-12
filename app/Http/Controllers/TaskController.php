<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $ttt=\DB::table('tasks')->get();
        return view('task.index',compact('ttt'));
    }

    public function show($id)
    {
        $task=Task::findOrFail($id);
        return view('task.tasks',compact('task'));
    }
}
