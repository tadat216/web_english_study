<?php 
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ExamTypeController;

Route::get('/', function () {
  return view('user.home');
});

//route cho trang thư viện đề thi: tests-library

Route::get('/tests', function () {
  return view('user.tests-library'); 
});


Route::get('/tests', [ExamTypeController::class, 'getExamTypesForExamLibrary']);

