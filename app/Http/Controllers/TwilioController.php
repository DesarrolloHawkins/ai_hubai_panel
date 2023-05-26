<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioController extends Controller
{
    public function makeCall()
    {
        $twilioSid = config('app.twilio_sid');
        $twilioAuthToken = config('app.twilio_auth_token');
        $twilioPhoneNumber = config('app.twilio_phone_number');

        $twilio = new Client($twilioSid, $twilioAuthToken);

        $toPhoneNumber = '+1234567890'; // Número de teléfono al que deseas llamar

        $twilio->calls->create(
            $toPhoneNumber,
            $twilioPhoneNumber,
            [
                'url' => route('twilio.voice-response'), // Ruta a la respuesta de voz de Twilio
            ]
        );

        return 'Llamada realizada correctamente';
    }

    public function voiceResponse()
{
    $response = new \Twilio\TwiML\VoiceResponse();

    $response->say('  Hola,  en este momento estamos configurando nuestra inteligencia artificial para que pueda usted conversar con el,  esperemos que tengo una buena estancia.  Un Saludo .');

    return $response;
}
}