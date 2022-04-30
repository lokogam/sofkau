<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserPost;
use App\Http\Requests\UpdateUserPut;
use App\Models\User;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Categoria;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PreguntasController extends Controller
{
    public function index(){
        $preguntas = Pregunta::paginate(1)->appends(request()->except("page"));
        $respuestas = Respuesta::where("pregunta_id",1)->latest('id')->get();
        // return response()->json($respuestas); 
        return Inertia::render('Dashboard', compact('preguntas','respuestas'));
    }
}
