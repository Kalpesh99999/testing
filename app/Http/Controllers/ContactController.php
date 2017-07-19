<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    //Display the contact form
    public function index()
    {
        return view('contact');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $token = $request->input('g-recaptcha-response');
        if ($token) {
            $client = new Client();
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => array(
                    'secret' => '6Lf4Qw4UAAAAADNOOrUxcSn92Azigv5SOjVUSyq6',
                    'response' => $token)
            ]);
            $result = json_decode($response->getBody()->getContents());
            if ($result->success) {
                $data = array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'company' => $request->company,
                    'contactMessage' => $request->contactMessage);
                Mail::to($request->email)->bcc('kalpesh99999@gmail.com')->queue(new Contact($data));
                return redirect('/contact')->with('success','Email sent successfully!');

            }
        } else {
            return redirect('/contact')->with('error','Error. Please try again.');
        }
    }

    public function getList(){
        $posts = Post::all();
        return response()->json(array('data'=>$posts));
        //return "test";
    }

    public function getPost(Request $request){
        //$posts = Post::all();
        //return response()->json(array('data'=>$posts));
        //return "test";
    }
}
