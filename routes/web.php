<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Item;

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


// All Items
Route::get('/', function () {
    // return view('welcome');
    return view('items', [
        'heading' => 'Latest Items',
        'items' => Item::all(), 
        // [
        //     [
        //         'itemID' => 'I1',
        //         'itemName' => 'Gown 1',
        //         'itemDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis risus vitae turpis placerat sollicitudin eu vitae diam. Pellentesque ac porttitor leo. Sed dapibus, neque ac vestibulum fermentum, lorem dui mollis dolor, ac tristique massa quam at nisi. Nam quis tellus eu libero fermentum laoreet sit amet efficitur lectus.',
        //     ],
        //      [
        //         'itemID' => 'I2',
        //         'itemName' => 'Gown 2',
        //         'itemDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis risus vitae turpis placerat sollicitudin eu vitae diam. Pellentesque ac porttitor leo. Sed dapibus, neque ac vestibulum fermentum, lorem dui mollis dolor, ac tristique massa quam at nisi. Nam quis tellus eu libero fermentum laoreet sit amet efficitur lectus.',
        //     ],
        // ],
    ]);
});

// Single Item
Route::get('/items/{id}', function ($id) {
    return view('item', [
        'item' => Item::find($id), 
    ]);
});

// Route::get('/hello', function() {
//     return response('Hello World!');
// });

// Route::get('/posts/{id}', function($id) {
//     // dd($id);
//     // ddd($id);
//     return response('Post: ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     // return dd($request->name.' '. $request->age);
//     return $request->name.' '. $request->age;
// }); 