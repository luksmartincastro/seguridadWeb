<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

use App\Http\Requests;

class TecnicoController extends Controller
{
    public function __construct()
    {
       // Apply the jwt.auth middleware to all methods in this controller
       // except for the authenticate method. We don't want to prevent
       // the user from retrieving their token if they don't already have it
       $this->middleware('jwt.auth', ['except' => ['authenticate']]); 
    }
    //----------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------
    public function index()
    {
        // Retrieve all the users in the database and return them
        //$tecnico = "Index del Tecnico";
        //return $tecnico;
        $usuario = Usuario::all();
        //return $usuario;
        return response()->json([
                "msg"=>"Succes",
                "usuario"=>$usuario->toArray()
                ],200);
    } 
}
