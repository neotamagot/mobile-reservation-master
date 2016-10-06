<?php

namespace Mobile\Http\Controllers;

use Illuminate\Http\Request;
use Mobile\Reserve;
use Mobile\Phone;

use Mobile\Http\Requests;
use Mobile\Http\Controllers\Controller;


class ReserveController extends Controller
{
    public function store (Request $request, Phone $phone)
    {

        $reserve = new Reserve;

        $reserve->name = $request->name;

        $reserve->phone_number = $request->phone_number;

        $reserve->email = $request->email;

        $phone->reserves()->save($reserve);

        return back();
    }
}
