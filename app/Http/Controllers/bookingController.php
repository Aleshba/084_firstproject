<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    

    public function insert(Request $request){
        $book=new Book;
        $book->event=$request->event;
        $book->date=$request->date;
        $book->email=$request->email;
        $book->address=$request->address;
        $book->packegNo=$request->packgNo;
        $book->save();
        return view('confirmBooking');
        }
        
}
