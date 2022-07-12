<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;

use Illuminate\Support\Facades\Mail;


/* namespace Illuminate\Http\Request; */

/* request nos ayuda a acceder a la informacion que el usuario ingresa */

class MessageController extends Controller
{
    public function store()

    {

        /* validacion del formulario paso 1 */

        $msg=request()->validate([

            'name' => 'required',
            'email'=> 'required|email',
            'subject'=>'required|min:3',
            'content'=>'required|min:5',

        ],[
            'name.required'=>'necesito tu nombre CABEZA DE TERMO',
            'email'=>'escribi bien tu email'
        ]);
        //enviar el email

        Mail::to('aprendible@gmail.com')->queue(new MessageReceived($msg));


        /* return  new MessageReceived($msg);  manera rapida de previsualizar el mensaje en el navegador*/
        return "mensaje enviado con exito";
    }
};

/*
reglas de validacion en laravel.com/docs/validation */
