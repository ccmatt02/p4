<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index')->name('index');

Route::get('/rooms', 'RoomController@index')->name('rooms.index');
Route::get('/rooms/show/{room_number}', 'RoomController@create')->name('rooms.create');
Route::post('/rooms/book', 'RoomController@store')->name('rooms.store');
Route::get('/rooms/book/show', 'RoomController@show')->name('rooms.show');
Route::get('/rooms/book/{booking_id}', 'RoomController@update')->name('rooms.update');
/*
Route::delete('/rooms/book/{booking_id}', 'RoomsController@delete')->name('rooms.delete');
*/
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index');
