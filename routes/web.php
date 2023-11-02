<?php

use App\Livewire\Container;
use App\Livewire\Home;
use App\Livewire\Input;
use App\Livewire\Items;
use App\Livewire\Login;
use App\Livewire\Output;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['userAuth'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/nhap/{id?}', Input::class)->name('input');
    Route::get('/xuat/{id}', Output::class)->name('output');
    Route::get('/khoang/{container?}/{style?}', Container::class)->name('container');
    Route::get('/phu-lieu', Items::class)->name('item');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('home');
    })->name('logout');
});
Route::get('/dang-nhap', Login::class)->name('login');
