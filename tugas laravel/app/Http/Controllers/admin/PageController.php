<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tampil()
    {
        $arrMahasiswa = ["Megawati","Luhut Panjaitan","Susilo Bambang Kusumo","Prabowo Subianto"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}
