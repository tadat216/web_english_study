<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ExamTypeController;
use App\Http\Controllers\Admin\RoleController;

//$router = app()->make('router');
// $router->get('/admin/home', function () {
//     return view('admin.home');
// })->name('admin.home');
Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/admin/role', function () {
    return view('admin.role.index');
})->name('roles.index');
Route::get('admin/role/create', function () {
    return view('admin.role.create');
})->name('roles.create');
Route::post('/role', [RoleController::class, 'store'])->name('roles.store'); 
// với post thì chỉ phụ thuộc vào [RoleController::class, 'store'], tên đường dẫn ko ý nghĩa
Route::get('admin/role/edit/{id?}', [RoleController::class, 'edit_get'])->name('roles.edit_get');
Route::post('/role/edit', [RoleController::class, 'edit_post'])->name('roles.edit_post');
