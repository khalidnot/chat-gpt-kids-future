<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\User;

class UserController extends Controller
{
    //
    public function __construct() 
    {
        
    }

    // Name
    public function index(Request $request)
    {
       //$request->session()->put('key', 'Khaled');
       //session(['key' => 'Khaled']);
        return view("index");
    }

    public function store(Request $request)
    {
       
        // store session 
        $request->session()->put('name', $request->name);
       session(['name' => $request->name]);

        return view("index2");
    }

    // gender

    public function genderview(Request $request)
    {
        
        return view('genderview');
    }
    public function genderstore(Request $request)
    {
       
        // store session 
        $request->session()->put('gender', $request->gender);
       session(['gender' => $request->gender]);

        $res = $request->session()->get('gender');
       
        return redirect()->route('users.nameview');
    }

    public function nameview(Request $request)
    {
        $res = $request->session()->get('gender');
        
        return view('nameview');
    }

    public function namestore(Request $request)
    {
       
        // store session 
        $request->session()->put('name', $request->name);
       session(['name' => $request->name]);


       
       return redirect()->route('users.subjectview');

    }

    
    public function subjectview(Request $request)
    {
        $res = $request->session()->get('gender');
        
        return view('subjectview');
    }

    public function subjectstore(Request $request)
    {
       
        // store session 
        $request->session()->put('subject', $request->subject);
       session(['subject' => $request->subject]);

        for($i = 0; count($request->subject); $i++)
        {
            dd($request->subject);
        }
       dd($request->subject[0]);
       //return redirect()->route('users.ageview');

    }
    
    public function ageview(Request $request)
    {
        
        return view('ageview');
    }

    public function agestore(Request $request)
    {
       
        // store session 
        $request->session()->put('age', $request->age);
       session(['age' => $request->age]);


       
       return redirect()->route('sendchatgpt');
    }

    public function chatgpt(Request $request)
    {
      
        $gender = $request->session()->get('gender');
        $name   = $request->session()->get('name');
        $age   = $request->session()->get('age');
        $subject   = $request->session()->get('subject');

        // questions that we will ask the Chat GPT
        //$str = "Hi my name is ".$name. " I'm ".$age. " And I'm ".$gender. " I like math, english, and science. what is the career paht is the right for me";
        $str = "Hi my name is ".$name. " I'm ".$age. " And I'm ".$gender. " I like ".$subject.". what is the career paht is the right for me";


        $request->session()->put('key', $str);
        session(['key' => $str]);

        return $str;
    }

    public function sendchatgpt(Request $request)
    {

        $gender = $request->session()->get('gender');
        $name   = $request->session()->get('name');
        $age   = $request->session()->get('age');
        $subject = $request->session()->get('subject');
        
        
        /**
         * Subjects:
         * math, science, biology, english, video game, art, sport, history
         */

        $result = "Hi my name is ".$name. " I'm ".$age. " And I'm ".$gender.". I likes math, science, and video game. give me five major that is right for me. in arabic language";
        

        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://api.openai.com/v1/chat/completions',
            'headers' => [
                'Authorization' => 'Bearer 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',
                'Content-Type' => 'application/json',
            ],
            'verify' => false,
        ]);

        $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
            'json' => [
                'messages' => [
                    ['role'=> 'user', 'content'=> $result]
                ],
                'model' => 'gpt-3.5-turbo',
                'temperature' => 0.5,
                'max_tokens' => 300,
            ],
        ]);

        $responseBody = json_decode($response->getBody(), true);


        dd($responseBody['choices'][0]['message']['content']);
    }
}
