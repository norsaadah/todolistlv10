<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Tasks;

class TaskController extends Controller
{
    function index() {

        $tasks = Task::all();
        //select * from tasks

        $tasks= Task::limit(10)->get();
        //select * from task limit 10

        $tasks= Task::latest()->limit(10)->get();
        //select * from task order by created_at desc limit 10

        $tasks= Task::where('id', '<', 30)->get();
        //select * from task where id < 30

        $tasks= Task::where('id', '<=',30)
                    ->where('id','>=',20)->get();
        //select * from task where id < 30

        $tasks= Task::whereBetween('id',[20,30])->get();
        //select * from task where id < 30

        $tasks= Task::where('id','=',10)->get();
        //select * from task where id = 10

        $tasks= Task::where('title','like','%Nulla%')->get();
        //select * from task where `id` 10

        dd($tasks);
    }
}
