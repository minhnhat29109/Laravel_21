<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;

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


// group route
// Route::prefix('task')->group(function () {

//     // Route::get('/', TaskController::class, 'index'])->name('task.index');

//     Route::get('/', 'TaskController@index')->name('task.index');

// //     // Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');

//     Route::get('/edit/{id}', 'TaskController@edit')->name('task.edit');

//     Route::get('/show/{id}', 'TaskController@show')->name('task.show');


// //     // Route::delete('/delete/{id}', [TaskController::class, 'destroy'])->name('task.delete');
//     Route::delete('/delete/', 'TaskController@destroy')->name('task.destroy');


// //     // Route::get('/create',  [TaskController::class, 'create'])->name('task.create');
//     Route::get('/create',  'TaskController@create')->name('task.create');


// Route::resource('task', 'Frontend\TaskController');

//     // Phương thức Get  url: task/complete/3     name: todo.task.complete

//      Route::get('/complete/{id}', function ($id) {
//         echo 'complete task id = ' . $id;
//     })->name('todo.task.complete');
   
//     // Phương thức Get   url: task/reset/3   name: todo.task.reset
//     Route::get('/reset/{id}', function($id){
//         echo "Reset task id = ".$id;
//     })->name('todo.task.reset');
// });


// //truyen nhieu tham so

// Route::get('/user/{id}/post/{post}', function($id, $idPost) {
//     return "This is post $idPost of user $id"; 
// });


// //co the thieu tham so truyen vao
// Route::get('user/{id?}', function($id = null) {
//     if ($id == null) {
//         return 'List users';
//     }
    
//     return "User $id";
// });


// //blade

// Route::get('/hello1', function () {
//     $menu = ['Tin tuc', 'The thao'];
//     // echo 'Nguyen cong hoan';
//     return view('hello1', [
//         'menu' => $menu
//         ]);
// });

// Route::get('/hello2', function () {
//     return view('hello2', [
//         'name'=>'Nhat',
//         'year'=>1998,
//         'school'=>'uneti',
//         'object'=>'Hoan thanh tot khoa hoc']);
// });

// Route::get('/hello3', function () {
//     return view('hello3', [
//         'name'=>'Nhat',
//         'year'=>1998,
//         'school'=>'uneti',
//         'object'=>'Hoan thanh tot khoa hoc',
//         'records' => 2
//         ]);
// });


// //bai1
// Route::get('/profile', function () {
//     return view('profile', [
//         'name'=>'Dam Minh Nhat',
//         'year'=>1998,
//         'address'=>'Nam Dinh',
//         'school'=>'uneti',
//         'introduce' => 'Dam Minh Nhat, sinh năm 1998',
//         'object'=>'Tro thanh dev php'
//         ]);
// });

// //Bai2

Route::get('/', function(){
     $list = [
        [
            'name' => 'Học View trong Laravel',
            'status' => 0
        ],
        [
            'name' => 'Học Route trong Laravel',
            'status' => 1
        ],
        [
            'name' => 'Làm bài tập View trong Laravel',
            'status' => -1
        ],
    ];
    return view('tasks.index3');

});


//     Route::get('/home', function () {
//         return view('home');
    
// });



//     Route::get('/', function () {
//         return view('welcome');
    
// });