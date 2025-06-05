<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'main');

Route::view('ShowGood','ShowGood');

Route::view('ShowCategory','ShowCategory');

Route::view('ShowSupplier','ShowSupplier');

Route::view('ShowUser','ShowUser');

Route::view('ShowProduct','ShowProduct');

Route::view('ShowIngrediant','ShowIngrediant');
