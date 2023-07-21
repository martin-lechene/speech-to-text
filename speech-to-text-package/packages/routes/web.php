<?php

use Illuminate\Support\Facades\Route;
use App\Packages\SpeechToText\SpeechToText;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::post('/speech-to-text', function () {
    $audioFile = request()->file('audio');

    // Call the SpeechToText class to perform the recognition.
    $speechToText = app('speech-to-text');
    $result = $speechToText->recognize($audioFile);

    return response()->json(['text' => $result]);
});
