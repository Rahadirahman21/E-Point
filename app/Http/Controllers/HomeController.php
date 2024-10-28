<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $pageTitle = "halaman home";
        $siswa = Siswa::all();
        
        return view('home.index',compact('pageTitle','siswa'));
    }
    public function tambah(){
        return view('siswa.tambah');
    }
    public function detail_siswa($nama){
        $pageTitle = "Detail siswa " .$nama;
        return $pageTitle;
    }
}
