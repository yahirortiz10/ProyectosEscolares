<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Citas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

   
    public function info()
    {
        // funcion para que muestre las citas realizadas
        $datos['citas']=Citas::paginate(4);

        
        return view('intendente',$datos);

    }


    public function covid()
    {
        
        return view('informacion');
    }

 
    public function coviid()
    {
        return view('information');
    }

    
    public function hola()
    {
        return view('index');
    }

    
    
}
