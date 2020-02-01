<?php

//connection
Auth::routes();
Route::get('/', 'HomeController@index');

//inscription
Route::get('Inscription','ElevesController@Inscription');
Route::post('Inscription','ElevesController@store');

//documents
Route::get('documents','ElevesController@documents');

//classes
Route::view('classes','gclasses.classes');

//notes
Route::view('notes','gnotes.notes');

//emplois
Route::view('emplois','gemplois.emplois');

//prof
Route::view('prof','gprof.prof');

//presence
Route::view('presence','gpresence.presence');

//académie
Route::view('academie','gacademie.academie');

//notification
Route::view('notification','gnotification.notification');


