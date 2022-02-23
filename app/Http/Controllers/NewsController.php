<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($judul = null){
        if ($judul == null) {
            return redirect("https://www.educastudio.com/news");
        } else{
            return redirect("https://www.educastudio.com/news/" .$judul);
        }
    }
}
