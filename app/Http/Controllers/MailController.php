<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
    public function send_message(Request $request){
        $data = $request->except('flag');

        $result = Mail::send('email',['data'=>$data], function($message) use ($data){
            $message->to('train.pro307@gmail.com','wefwef')->subject('Вопрос');
            $message->from($data['email'], 'ot');
        });

        return view('index')->with('status','Сообщение отправлено');

    }
}
