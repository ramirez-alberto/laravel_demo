<?php
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Usamos un controlador para las paginas que mostramos en la vista
// Se uso php artisan make:controller PagesController para crear los controladores en app/https/controllers/PageControllers.php

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');

 


Route::resource('project','ProjectController');
Route::patch('/tasks/{task}','ProjectTaskController@update');








/* Route::get('/', function () {

    $tasks = [
        'Go to job',
        'Go to jail',
        'Go to kitchen'];
      
    return view('welcome',[ |
        'tasks' => $tasks   | Lo mismo que return view('welcome') -> withTasks($tasks);
    ]);                     |

    return view('welcome') -> withTasks($tasks);

}); */

/* Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
 */