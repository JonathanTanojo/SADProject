<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function getData(Request $request)
    {
        $data = $request->input('quantity');

        return view('receipt');
    }
}
