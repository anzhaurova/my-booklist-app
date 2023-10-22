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
        return view('booklists.show', [
            'booklist' => $booklist
        ]); 
    }

    public function create() {
        return view('booklists.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
        ]);
        // dd($request->all()); //вывод того что отправляем на сервер 
        return redirect('/');
    }
}
