<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Nama: M Fauzi Rohman, NIM: 244107020067";
    }

    public function articles($id){
        return "Halaman Artikel dengan Id $id";
    }
}