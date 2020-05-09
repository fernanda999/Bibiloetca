<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    //
    {
        //dd(session()->all()); // me muetsra todo de usuario id admin..
        //dd(auth()->user()->usuario);
        //dd(session()->all());
      return  view('inicio');
        //return('hola como estas');
    }


}
