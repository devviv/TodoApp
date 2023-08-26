<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Task;
use PHPUnit\TextUI\Configuration\Php;
use Carbon\Carbon;

class taskController extends Controller
{
    public function index(){
        $today = Carbon::now()->toDateString();
        $tasks = Task::where('jour', $today)->get();
        return view('todo.index',compact('tasks'));
    }

    public function newtask(){
        return view('todo.new');
    }

    public function noendtasks()  {
        $tasks = Task::all();
        return view('todo.noendtasks', compact('tasks'));
    }
    
    public function noendtask(Task $task){
        $task->update([
            $task->termine = False
        ]);
        return redirect()->route('noendtasks');
    }

    public function endtasks()  {
        $tasks = Task::all();
        return view('todo.endtasks', compact('tasks'));
    }

    public function endtask(Task $task){
        $task->update([
            $task->termine = True
        ]);
       return redirect()->route('endtasks');
    }

    
    public function task()  {
        $tasks = Task::all();
        return view('todo.task', compact('tasks'));
    }

    public function form(Request $request){
        $request->validate([
            'titre' => 'required | max:255',
            'description' => 'nullable',
            'debut' => 'required',
            'fin' => 'required',
            'jour' => 'required'
        ]);

        $task = new Task();
        $task->titre = $request->titre;
        $task->description = $request->description;
        $task->debut = $request->debut;
        $task->fin = $request->fin;
        $task->jour = $request->jour;
        $task->save();
        /*$task = Task::create([
            'titre' =>$request->input('titre'),
            'description' => $request->input('description'),
            'debut' => $request->input('debut'),
            'fin' => $request->input('fin'),
            'jour' =>$request->input('jour')
        ]);*/

        return redirect()->route('index');
    }
    
    public function edittask(Task $task)  {
        return view('todo.edittask', compact('task'));
    }

    public function updatetask(Request $request, Task $task)  {
        $request->validate([
            'titre' => 'required | max:255',
            'description' => 'nullable',
            'debut' => 'required',
            'fin' => 'required',
            'jour' => 'required'
        ]);
        $task->update([
            $task->titre = $request->titre,
            $task->description = $request->description,
            $task->debut = $request->debut,
            $task->fin = $request->fin,
            $task->jour = $request->jour,
        ]);
        return redirect()->route('task');
    }

    public function deletetask(Task $task)  {
        $task->delete();
        return redirect()->route('task');
    }

    
}
