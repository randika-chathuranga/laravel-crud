<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\RequestStack;

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
    return view('welcome', [
        'heading' => 'this is first page',
        'listings' => [
           [
            'name' => "randika",
            'address'=> 'pinnaduwa'
           ],

           [
            'name' => "chathuranga",
            'address'=> 'galle'
           ]
        ]

    ]);
});

// Route::get('/post/{id}', function($id){
//     return response('post'.$id);
// });




