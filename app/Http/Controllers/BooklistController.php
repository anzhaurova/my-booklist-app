<?php

namespace App\Http\Controllers;

use App\Models\Booklist;
use Illuminate\Http\Request;

class BooklistController extends Controller
{
    public function index() {
        return view('booklists.index', [
            'heading' => 'Latest Booklists',
            'booklists' => BookList::all(),
        ]);
    }

    public function show(Booklist $booklist) {
        return view('booklist.show', [
            'booklist' => $booklist
        ]); 
    }
}
