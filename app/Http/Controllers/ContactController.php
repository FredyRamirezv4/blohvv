<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            // Obtener los datos del formulario
            $nombre = $request->input('nombre');
            $correo = $request->input('correo');
            $telefono = $request->input('telefono');
            $empresa = $request->input('empresa');
            $direccion = $request->input('direccion');
            $nit = $request->input('nit');
            $mensaje = $request->input('mensaje');
    
            // Insertar los datos en la tabla utilizando el modelo Eloquent
            Contact::create([
                'nombre' => $nombre,
                'correo' => $correo,
                'telefono' => $telefono,
                'empresa' => $empresa,
                'direccion' => $direccion,
                'nit' => $nit,
                'mensaje' => $mensaje,
            ]);
    
            // Redireccionar a una página de éxito o mostrar un mensaje de confirmación
            return redirect()->route('welcome');
        }
    }
        public function contact()
        {
            // Lógica para la vista de contacto
            return view('contact');
        }
    }

