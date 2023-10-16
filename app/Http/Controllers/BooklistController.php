<?php

namespace App\Http\Controllers;

use App\Models\Booklist;
use Illuminate\Http\Request;

class BooklistController extends Controller
{
    public function index(Request $request) {
        return view('booklists.index', [
            'heading' => 'Latest Booklists',
            'booklists' => BookList::latest()->filter(request(['search']))->get(),
        ]);
    }

    public function show(Booklist $booklist) {
        return view('booklist.show', [
            'booklist' => $booklist
        ]); 
    }
}
