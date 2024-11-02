<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailSend(){


        return 'ok';
        $data = [
            'name' => 'Test mail outlook',
            'message' => 'This is a test email from outlook message.',
        ];
        
        Mail::to('omorfaruk.it@diu.ac')->send(new MyMail($data));
        return 'mail Successfulle send';
    }
}
