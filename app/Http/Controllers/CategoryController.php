<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Create()
    {
        return view("Category.create");
    }
}
