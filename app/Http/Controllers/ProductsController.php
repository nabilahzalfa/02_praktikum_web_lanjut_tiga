<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product1(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    }

    public function product2(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    }

    public function product3(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    }

    public function product4(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    }
}
