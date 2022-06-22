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

Route::get('/', function () {

    $data =[
        'title'=>'Daisy the dog',
        'daisy'=>[
            'name'=> 'Daisy',
            'type'=> 'Dog',
            'age'=> 3,
            'favourite_game'=> [
                'runn', 'tennis ball', 'play with others dog', 'Asking for food', 'look for rabbits'
            ]
        ]
        ];
    return view('home', $data);
});
