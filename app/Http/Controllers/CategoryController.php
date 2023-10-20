<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $table = 'categoies';

    protected $fillable = ['name'];
}
