<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registerr', function () {
    return view('registerr');
});
Route::get('/loginn', function () {
    return view('loginn');
});
Route::get('/forgot-passwordd', function () {
    return view('forgot-passwordd');
});

Route::post('/userbac',[\App\Http\Controllers\StudentController::class,"store"])->name("user.bac");
Route::get('/eleves',[\App\Http\Controllers\StudentController::class,"index"])->name("students");
Route::get('/eleves/create',[\App\Http\Controllers\StudentController::class,"create"])->name("students.create");
Route::post('/eleves/create',[\App\Http\Controllers\StudentController::class,"store"])->name("students.store");
Route::get('/eleves/update/{student}',[\App\Http\Controllers\StudentController::class,"edit"])->name("students.edit");
Route::put('/eleves/update/{student}',[\App\Http\Controllers\StudentController::class,"update"])->name("students.update");
Route::delete('/eleves/delete/{student}',[\App\Http\Controllers\StudentController::class,"destroy"])->name("students.delete");
/********************************************************************************************************************************************/
Route::get('/enseignants',[\App\Http\Controllers\TeacherController::class,"index"])->name("teachers");
Route::get('/enseignants/create',[\App\Http\Controllers\StudentController::class,"create"])->name("teachers.create");
Route::post('/enseignants/create',[\App\Http\Controllers\StudentController::class,"store"])->name("teachers.store");
Route::get('/enseignants/update/{enseignant}',[\App\Http\Controllers\StudentController::class,"edit"])->name("teachers.edit");
Route::put('/enseignants/update/{enseignant}',[\App\Http\Controllers\StudentController::class,"update"])->name("teachers.update");
Route::delete('/enseignants/delete/{enseignant}',[\App\Http\Controllers\StudentController::class,"destroy"])->name("teachers.delete");
/********************************************************************************************************************************************/
Route::get('/chat',[\App\Http\Controllers\ChatController::class,"index"])->name("chat");
Route::get('/chat/getMessage/{chatbox_id}',[\App\Http\Controllers\ChatController::class,"getMessage"])->name("chat.getmessage");
Route::post('/chat/sendMessage',[\App\Http\Controllers\ChatController::class,"sendMessage"])->name("chat.sendmessage");
Route::post('/chat/getBox',[\App\Http\Controllers\ChatController::class,"getBox"])->name("chat.getBox");
Route::post('/chat/getChatBox',[\App\Http\Controllers\ChatController::class,"getChatBox"])->name("chat.getChatBox");
/********************************************************************************************************************************************/
Route::get('/admin/reclamations',[\App\Http\Controllers\ReclamationController::class,"index"])->name("recadmin");
Route::get('/reclamations',[\App\Http\Controllers\ReclamationController::class,"mesreclamations"])->name("mesreclamations");
Route::get('/reclamations/create',[\App\Http\Controllers\ReclamationController::class,"create"])->name("reclamation.create");
Route::get('/reclamations/update',[\App\Http\Controllers\ReclamationController::class,"update"])->name("reclamation.update");
Route::get('/reclamations/detail/{reclamation}',[\App\Http\Controllers\ReclamationController::class,"detail"])->name("reclamation.detail");
/********************************************************************************************************************************************/
Route::get('/cours',[\App\Http\Controllers\CoursController::class,"index"])->name("cours");
Route::get('/cours/create',[\App\Http\Controllers\CoursController::class,"create"])->name("cours.create");

Auth::routes();




