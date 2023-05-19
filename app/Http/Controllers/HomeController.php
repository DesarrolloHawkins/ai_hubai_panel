<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
// use OpenAI\OpenAI;

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

        $result = OpenAI::completions()->create([
            'model' => 'davinci:ft-personal:apartamentos-hawkins-2023-04-27-09-45-29',
            'prompt' => 'Donde estan las llaves ->',
            'temperature' => 0.9,
            "max_tokens"=> 200,
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,
            "stop"=> ["_END"]

        ]);
        
        echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.
        
        return view('home');
    }
}
