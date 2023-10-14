<?php

namespace App\Http\Controllers;

use App\Models\Booklist;
use Illuminate\Http\Request;

class BooklistController extends Controller
{
    //Show all booklists
    public function index() {
        return view('booklists', [
            'heading' => 'Latest Booklists',
            'booklists' => BookList::all(),
        ]);
    }

    //Show single booklist
    public function show(Booklist $booklist) {
        return view('booklist', [
            'booklist' => $booklist
        ]); 
    }
}
