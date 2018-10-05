<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;

class ContentsController extends Controller
{
    function index()
    {
        $data = Contents::paginate('10');
        return view('contents.index', compact('data'));
    }
}
