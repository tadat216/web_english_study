<?php 
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ExamTypeController;

Route::get('/', function () {
  return view('user.home');
});

Route::get('/tests-library', [ExamTypeController::class, 'getExamTypesForExamLibrary']);


//route cho trang thư viện đề thi: tests-library

// Route::get('/tests-library', function () {
//   return view('user.tests-library'); 
// });

// Route::get('/tests-library', function () {
//   $examTypes = app(ExamTypeController::class)->getExamTypesForExamLibrary();
//   $users = app(UserController::class)->getUsers(); // Giả sử có hàm getUsers()

//   return view('user.tests-library', compact('examTypes', 'users'));
// });



