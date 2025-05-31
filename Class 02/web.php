
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\formController;
use App\Http\Controllers\Mycontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route :: view('/home' , 'class 02.header')->name('route');

Route :: view('/contact' , 'class 02.contactus')->name('routetwo');


Route::post('/submit' , function(Request $request){
    $name =  $request->name;   
    $email = $request->email;
    $phone = $request->number;
    $address = $request->input('address');
    echo $name."<br>".$email."<br>".$phone."<br>".$address;
})->name('formSubmition');


Route :: get('/test' , [formController :: class , 'display']);


// Parameterized route 

Route :: get('/data/{name}' , [formController::class,'display']);
Route:: get('/form',[Mycontroller :: class , 'preview']);

