<?php

use App\Http\Controllers\BooklistController;
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

Route::get('/', [BooklistController::class, 'index']);



//Show create form
Route::get('/booklist/create', [BooklistController::class, 'create']);

//single booklist
Route::get('/booklists/{booklist}', [BooklistController::class, 'show']);


//Common REsource Routes:
//index - Show all booklists
//show - show single booklist
//create - show forn to create new booklist
//store - store new booklist
//edit - show form to edit booklist
//update - update booklist
//destroy - delete booklist