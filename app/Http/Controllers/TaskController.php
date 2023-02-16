<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\task;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        return view('task.index', compact('task'));
    }

    public function create()
    {
        return view('task.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        dd($input);

        return redirect('/task');
    }

    public function detail($id) {
        $task = Task::findOrFail($id);
        return view('task.detail', compact('task'));
    }

    public function delete($id) {
        $task = Task::findOrFail($id);
        $task->delete();
        return back();
    }
}
