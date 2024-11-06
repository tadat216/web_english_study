<?php
use Illuminate\Routing\Route;
// Route::get('/admin/home', function () {
//     return view('admin.home');
// })->name('admin.home');
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Log;
use Illuminate\View\ViewFinder;

$router = app()->make('router');
$router->get('/admin/home', function () {
    return view('admin.home');
})->name('admin.home');
?>