<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\studentController;
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

Route::get('home',function(){
    return view('home');
});

Route::get('/nav',function(){
    return view('navigation.nav');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contect', function () {
    return view('contect');
});


Route::fallback(function(){
    return view('fallback');
});


Route::get('/gallery',function(){
    return view('gallery');
});

Route::get('/service',function(){
    return view('service');
});

// function getNames(){
//     return [
//         1=>['name'=>'Muskan','age'=>21,'course'=>'ADCE','Address'=>"Vijay park",'contect'=>8860089305],
//         2=>['name'=>'Nancy','age'=>22,'course'=>'MDCE','Address'=>"Moujpur",'contect'=>9869889307],
//         3=>['name'=>'Rohit','age'=>25,'course'=>'DCAP','Address'=>"Vijay Nager",'contect'=>9978372837],
//         4=>['name'=>'Aman','age'=>23,'course'=>'MDMA','Address'=>"Dlf",'contect'=>9280089305],
//         5=>['name'=>'Krish','age'=>19,'course'=>'ADWE','Address'=>"Rithala",'contect'=>7860389305],
//     ];
// }

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::get('/array', [studentController::class, 'showStudent'])->name('array');

// Route::get('/employees', [studentController::class, 'index'])->name('employees.index');

Route::get('/profile/{roll_number}', function($roll_number) {
    $user = DB::table('students')
        ->where('roll_number', $roll_number)
        ->first();

        if (!$user) {
        abort(404, 'Student not found'); // optional
        }
    return view('profile',compact('user'));
})->name('profile');

Route::get('/Update',function(){
    return view('Update');
})->name('Update');



Route::controller(studentController::class)->group(function(){
    Route::get('showStudents','showStudents')->name('students');
    Route::post('/addStudent','addStudent')->name('addStudent');
    Route::get('/login','login')->name('login');
    // delete
    Route::any('/deleteStudent/{id}','deleteStudent')->name('student.delete');
    Route::get('/updateform/{id}','Updateform')->name('updateform');
    // put
    Route::put('/Updatestudent/{id}','UpdateStudent')->name('update');

    Route::get('/profile/{id}','profile')->name('profile');
    Route::post('/register','register');
    Route::get('/home','home');
});


?>