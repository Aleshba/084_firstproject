<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class messageController extends Controller
{
    
    public function sendMessage(Request $request){
        $message=new Message;
        $message->fname=$request->fname;
        $message->lname=$request->lname;
        $message->email=$request->email;
        $message->subject=$request->subject;
        $message->message=$request->message;
        $message->save();
        return view('confirmBooking');
        }
}
