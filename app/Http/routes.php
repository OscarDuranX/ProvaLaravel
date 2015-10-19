<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld',"HolaMonController@hello");

Route::resource('user','UserController');


Route::get('/prova1', function () {
    return '<h1>Hello World</h1>';
});

/*Route::post('/prova1', function () {
    return '<h1>Hello World</h1>';
});*/

Route::any('/prova1', function () {
    return '<h1>Hello World</h1>';
});



Route::get('prova2', function () {
    $content = '<h1>Hello World</h1>';
    $status = 200;
    $contentType = "text/html";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('prova3', function () {
    $content = '<h1>Hello World</h1>';
    $status = 200;
    $contentType = "application/pdf";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('prova4', function () {
    $content = '<h1>Hello World</h1>';
    $status = 200;
    $contentType = "text/plain";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('prova5', function () {
    $content = '<h1>Hello World</h1>';
    $status = 200;
    $contentType = "text/plain";
    return response($content, $status)
        ->header('Content-Type', $contentType)
        ->header('MyHeader', 'Prova 1 2 3 los microfonos');
});

Route::get('prova6', function () {
    $pathToFile = public_path('prova.pdf');

    dd($pathToFile);
    //return response()->download($pathToFile);
});

Route::get('prova7', function () {
    return response()->json([
        'name' => 'Pepesi', 'stats' => 'raro']);
});

Route::get('prova8', function () {
    return[
        'name' => 'Pepesi', 'stats' => 'raro'];
});

Route::get('prova9', function () {
    return redirect('http://www.google.com');
});