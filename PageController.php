<?php

namespace Mobile\Http\Controllers;
use Mobile\Phone;
use Illuminate\Http\Request;

use Mobile\Http\Requests;
use Mobile\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        $people = ['Hala','Sunny','Emma'];
        // return View::make();
        return view('welcome',compact('people'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function test()
    {
        $phone = Phone::all();
        //$phone = Phone::lists('name' , 'id');

        return view('pages.Testpage',compact('phone'));
    }

    public function phone()
    {
        $phones = Phone::all();

        return view('pages.phone', compact('phones'));
    }

    public function show($id)
    {
        //return $phone;

        $phone = Phone::find($id);
        return view('pages.show',compact('phone'));
    }

    public function form()
    {
        $phones = Phone::all();
        return view('testform',compact('phones'));
    }
}
