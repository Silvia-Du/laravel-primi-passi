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
            'type'=> 'dog',
            'image'=> 'https://ichef.bbci.co.uk/news/480/cpsprodpb/10CB3/production/_114678786_pettog1.jpg',
            'age'=> 3,
            'favourite_game'=> [
                'run', 'tennis ball', 'play with others dog', 'Asking for food', 'look for rabbits'
            ],
            'enemies'=>[
                'dogs' =>['buby', 'lilly'],
                'people' =>['Delivery man', 'Neighbor\'s children'],
                'Other' => ['ambulance', 'strong noises', 'shower']
            ],

            'friends' =>['Papy', 'Billy', 'Anyone else giving food', 'Mamy', 'Tho other Daisy', 'My mom']
            ]

        ];

    return view('home', $data);
});

Route::get('/about', function(){

    $data =[
        'title'=>'Daisy the dog',
        'daisy'=>[
            'name'=> 'Daisy',
            'type'=> 'dog',
            'image'=> 'https://ichef.bbci.co.uk/news/480/cpsprodpb/10CB3/production/_114678786_pettog1.jpg',
            'about_image'=> 'https://media-be.chewy.com/wp-content/uploads/laughing-dogs-420745108-1024x576.jpg',
            'age'=> 3,
            'favourite_game'=> [
                'run', 'tennis ball', 'play with others dog', 'Asking for food', 'look for rabbits'
            ],
            'enemies'=>[
                'dogs' =>['buby', 'lilly'],
                'people' =>['Delivery man', 'Neighbor\'s children'],
                'Other' => ['ambulance', 'strong noises', 'shower']
            ],

            'friends' =>['Papy', 'Billy', 'Anyone else giving food', 'Mamy', 'Tho other Daisy', 'My mom']
            ]

        ];

    return view('about', $data);

});

Route::get('/contact', function(){

    return view('contact');

});


