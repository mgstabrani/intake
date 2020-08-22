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
//route untuk twibbon
Route::get('/twibbon', function(){
    return view('twibbon');
}); 

//route landing page
Route::get('/', function () {
    return view('welcome');
});

//route readme
Route::get('/readme', function(){
    return view('readme');
});

//route menu awal
Route::get('/menu', function(){
    return view('menu');
});


//route page sandi 1
Route::get('/sandi1-dolphin', function(){
    return view('sandi.sandi-1.dolphin');
});
Route::get('/sandi1-dove', function(){
    return view('sandi.sandi-1.dove');
});
Route::get('/sandi1-eagle', function(){
    return view('sandi.sandi-1.eagle');
});
Route::get('/sandi1-hornbill', function(){
    return view('sandi.sandi-1.hornbill');
});
Route::get('/sandi1-komodo', function(){
    return view('sandi.sandi-1.komodo');
});
Route::get('/sandi1-lion', function(){
    return view('sandi.sandi-1.lion');
});
Route::get('/sandi1-mantaray', function(){
    return view('sandi.sandi-1.mantaray');
});
Route::get('/sandi1-rhino', function(){
    return view('sandi.sandi-1.rhino');
});
Route::get('/sandi1-shark', function(){
    return view('sandi.sandi-1.shark');
});

//route page sandi 2
Route::get('/sandi2-dolphin', function(){
    return view('sandi.sandi-2.dolphin');
});
Route::get('/sandi2-dove', function(){
    return view('sandi.sandi-2.dove');
});
Route::get('/sandi2-eagle', function(){
    return view('sandi.sandi-2.eagle');
});
Route::get('/sandi2-hornbill', function(){
    return view('sandi.sandi-2.hornbill');
});
Route::get('/sandi2-komodo', function(){
    return view('sandi.sandi-2.komodo');
});
Route::get('/sandi2-lion', function(){
    return view('sandi.sandi-2.lion');
});
Route::get('/sandi2-mantaray', function(){
    return view('sandi.sandi-2.mantaray');
});
Route::get('/sandi2-rhino', function(){
    return view('sandi.sandi-2.rhino');
});
Route::get('/sandi2-shark', function(){
    return view('sandi.sandi-2.shark');
});

//route page sandi 3
Route::get('/sandi3-dolphin', function(){
    return view('sandi.sandi-3.dolphin');
});
Route::get('/sandi3-dove', function(){
    return view('sandi.sandi-3.dove');
});
Route::get('/sandi3-eagle', function(){
    return view('sandi.sandi-3.eagle');
});
Route::get('/sandi3-hornbill', function(){
    return view('sandi.sandi-3.hornbill');
});
Route::get('/sandi3-komodo', function(){
    return view('sandi.sandi-3.komodo');
});
Route::get('/sandi3-lion', function(){
    return view('sandi.sandi-3.lion');
});
Route::get('/sandi3-mantaray', function(){
    return view('sandi.sandi-3.mantaray');
});
Route::get('/sandi3-rhino', function(){
    return view('sandi.sandi-3.rhino');
});
Route::get('/sandi3-shark', function(){
    return view('sandi.sandi-3.shark');
});

//route page menu2
Route::get('/menu2-dolphin', function(){
    return view('menu2.dolphin');
});
Route::get('/menu2-dove', function(){
    return view('menu2.dove');
});
Route::get('/menu2-eagle', function(){
    return view('menu2.eagle');
});
Route::get('/menu2-hornbill', function(){
    return view('menu2.hornbill');
});
Route::get('/menu2-komodo', function(){
    return view('menu2.komodo');
});
Route::get('/menu2-lion', function(){
    return view('menu2.lion');
});
Route::get('/menu2-mantaray', function(){
    return view('menu2.mantaray');
});
Route::get('/menu2-rhino', function(){
    return view('menu2.rhino');
});
Route::get('/menu2-shark', function(){
    return view('menu2.shark');
});

//route page menu3
Route::get('/menu3-dolphin', function(){
    return view('menu3.dolphin');
});
Route::get('/menu3-dove', function(){
    return view('menu3.dove');
});
Route::get('/menu3-eagle', function(){
    return view('menu3.eagle');
});
Route::get('/menu3-hornbill', function(){
    return view('menu3.hornbill');
});
Route::get('/menu3-komodo', function(){
    return view('menu3.komodo');
});
Route::get('/menu3-lion', function(){
    return view('menu3.lion');
});
Route::get('/menu3-mantaray', function(){
    return view('menu3.mantaray');
});
Route::get('/menu3-rhino', function(){
    return view('menu3.rhino');
});
Route::get('/menu3-shark', function(){
    return view('menu3.shark');
});

//route post sandi 1
Route::post('/sandi1-dolphin', 'Sandi1Controller@dolphin1');
Route::post('/sandi1-dove', 'Sandi1Controller@dove1');
Route::post('/sandi1-eagle', 'Sandi1Controller@eagle1');
Route::post('/sandi1-hornbill', 'Sandi1Controller@hornbill1');
Route::post('/sandi1-komodo', 'Sandi1Controller@komodo1');
Route::post('/sandi1-lion', 'Sandi1Controller@lion1');
Route::post('/sandi1-mantaray', 'Sandi1Controller@mantaray1');
Route::post('/sandi1-rhino', 'Sandi1Controller@rhino1');
Route::post('/sandi1-shark', 'Sandi1Controller@shark1');

//route post sandi 2
Route::post('/sandi2-dolphin', 'Sandi2Controller@dolphin2');
Route::post('/sandi2-dove', 'Sandi2Controller@dove2');
Route::post('/sandi2-eagle', 'Sandi2Controller@eagle2');
Route::post('/sandi2-hornbill', 'Sandi2Controller@hornbill2');
Route::post('/sandi2-komodo', 'Sandi2Controller@komodo2');
Route::post('/sandi2-lion', 'Sandi2Controller@lion2');
Route::post('/sandi2-mantaray', 'Sandi2Controller@mantaray2');
Route::post('/sandi2-rhino', 'Sandi2Controller@rhino2');
Route::post('/sandi2-shark', 'Sandi2Controller@shark2');

//route post sandi 3
Route::post('/sandi3-dolphin', 'Sandi3Controller@dolphin3');
Route::post('/sandi3-dove', 'Sandi3Controller@dove3');
Route::post('/sandi3-eagle', 'Sandi3Controller@eagle3');
Route::post('/sandi3-hornbill', 'Sandi3Controller@hornbill3');
Route::post('/sandi3-komodo', 'Sandi3Controller@komodo3');
Route::post('/sandi3-lion', 'Sandi3Controller@lion3');
Route::post('/sandi3-mantaray', 'Sandi3Controller@mantaray3');
Route::post('/sandi3-rhino', 'Sandi3Controller@rhino3');
Route::post('/sandi3-shark', 'Sandi3Controller@shark3');

Route::get('/gmeet', function(){
    return view('gmeet');
});