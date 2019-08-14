<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function home() {

        $tasks = [
            'Go to job',
            'Go to jail',
            'Go to kitchen'];
          
    /*     return view('welcome',[
            'tasks' => $tasks
        ]); */
    
        return view('welcome') -> withTasks($tasks);
    
    }

    function contact() {
        
        $projects =  \App\ExampleData::all();

        

        return view('contact',compact('projects'));
    }
    
    function about() {
        return view('about');
    }

}
