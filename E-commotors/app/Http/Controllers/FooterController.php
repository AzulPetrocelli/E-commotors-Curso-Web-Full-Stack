<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class FooterController extends Controller
{
    public function terminosYcondiciones(){
        return view("terminos");
    }

    public function politicasDeEnvio(){
        return view("politicas");
    }

    public function locales(){
        return view("locales");
    }

    public function descargarDevoluciones(){
        $path = public_path('pdf/Devoluciones_Ecommotors.pdf'); 
        return Response::download($path); 
    }
}
