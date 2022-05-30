<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    DB::select('select * from users where active = ?', [1])
}
