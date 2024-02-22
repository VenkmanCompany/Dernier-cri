<?php

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


Route::get('/', \App\Http\Livewire\ArticlesList::class)->name('articles.list');
Route::get('/article/{id}', \App\Http\Livewire\ArticlesDetail::class)->name('articles.detail');

