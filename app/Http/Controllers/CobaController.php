<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
{
   return 'test berhasil';
}
public function urutan($ke)
{
   $numbers = [
      ['ke' => $ke, 'nomer' => 20],
      ['ke' => $ke, 'nomer' => 30],
      ['ke' => $ke, 'nomer' => 40],
   ];


   return view('urutan', compact('numbers')) ;
}
public function Coba($ke)
{
   return view('coba', ['number' => $ke]) ;
}


}