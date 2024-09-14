<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validar los datos que llegan al endpoint
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        // Obtener los datos del request
        $name = $request->input('name');
        $email = $request->input('email');

        // Enviar el correo
        Mail::to($email)->send(new SendMail($name));

        return response()->json(['message' => 'Email enviado correctamente'], 200);
    }
}
