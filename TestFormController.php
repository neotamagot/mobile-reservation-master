<?php

namespace Mobile\Http\Controllers;
use Mobile\Phone;
use Illuminate\Http\Request;

use Mobile\Http\Requests;
use Mobile\Http\Controllers\Controller;

class TestFormController extends Controller
{
    public function form()
    {
        return view('testform',compact('phone'));
    }
}
