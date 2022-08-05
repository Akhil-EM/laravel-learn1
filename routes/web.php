<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pizzas', function (){
    
    // return "this is just a string from router";
    // return ["name"=>"veg pizza","contents"=>["pepper","cheese","wheat"]];
    $data = ["type"=>"indian",
             "price"=>160,
             "currency"=>"rupees"];
    return view("pizzas",$data);
});

Route::get('blade', function (){

    $data = ["availability"=>false,
             "pizzas"=>[["name"=>"indian","price"=>150],
                        ["name"=>"chinese","price"=>200],
                        ["name"=>"italian","price"=>126]]];
                        
    return view("blade",$data);
});

///students/56?class=10&age=15
Route::get('students/{id}', function ($id){
    
    $data = ["studentId"=>$id,
             "class"=>request("class"),
             "age"=>request("age")];

    return view("query-params",$data);
});


Route::get('test-controller',[TestController::class, 'index']);

Route::get('my-students', [StudentController::class, 'index']);
Route::post('my-students', [StudentController::class, 'create']);

Route::get('my-students/{id}', [StudentController::class, 'student']);