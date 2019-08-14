<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tasks;

class ProjectTaskController extends Controller
{
    public function update(Tasks $task)
    {
        $task ->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}
