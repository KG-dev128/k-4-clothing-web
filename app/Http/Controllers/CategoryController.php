<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function Index(){
     $res=DB::select('select * from  category');   
    return view("Category.index",['res'=>$res]);
    }
    public function Create(){
        return view("Category.create");
    }
    public function Save(Request $req){
        $na=$req->input("catname");
        DB::insert("INSERT INTO `category`(`cat_name`) VALUES (?)",[$na]);
        return view("Category.index");
    }
}
