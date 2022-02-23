<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program1(){
        return redirect("https://www.educastudio.com/program/karir");
    }

    public function program2(){
        return redirect("https://www.educastudio.com/program/magang");
    }

    public function program3(){
        return redirect("https://www.educastudio.com/program/kunjungan-industri");
    }
}
