<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ExamTypeController;

//$router = app()->make('router');
// $router->get('/admin/home', function () {
//     return view('admin.home');
// })->name('admin.home');
Route::get('/admin', function () {
    return view('admin.admin_home');
});
