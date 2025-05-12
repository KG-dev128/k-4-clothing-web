<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view("welcome");
    }
    public function Contact(){
        return view("contact");
    }
    public function Detail(){
        return view("detail");
    }
    public function Checkout(){
        return view("checkout");
    }
    public function Cart(){
        return view("cart");
    }
    public function Shop(){
        return view("shop");
    }
    public function Login(){
        return view("login");
    }
}
