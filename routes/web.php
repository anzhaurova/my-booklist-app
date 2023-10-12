<?php

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Booklist;
use Illuminate\Support\Facades\Route;

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
    return view('booklists', [
        'heading' => 'Latest Booklists',
        'booklists' => BookList::all(),
    ]);
});

//single booklist
Route::get('/booklists/{id}', function($id) {
    return view('booklist', [
        'booklist' => Booklist::find($id)
    ]); 
});


// Route::get('/test', function () {
//     $author = Author::find(5);
//     dd($author->books);
// });