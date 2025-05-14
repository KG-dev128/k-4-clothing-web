<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function Create()
    {
        return view("Category.create");
    }
    public function Save(Request $req)
    {

       $na= $req->imput('catname');
      // DB::insert("INSERT INTO `category`(`cat_name`) VALUES (?)",[$na]);
        return ("Data Saved");
    }
}
