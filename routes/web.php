<?php

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

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');

/*
  タスクの詳細参照ページ
  Route::get('tasks/{id}', 'TasksController@show');
  タスクの新規作成処理
  Route::post('tasks', 'TasksController@store');
  タスクの更新処理
  Route::put('tasks/{id}', 'TasksController@update');
  タスクの削除処理
  Route::delete('tasks/{id}', 'TasksController@destroy');

　タスクの一覧参照ページ
  Route::get('tasks', 'tasksController@index')->name('tasks.index');
  タスクの新規作成ページ
  Route::get('tasks/create', 'tasksController@create')->name('tasks.create');
  タスクの編集ページ
  Route::get('tasks/{id}/edit', 'tasksController@edit')->name('tasks.edit');
*/