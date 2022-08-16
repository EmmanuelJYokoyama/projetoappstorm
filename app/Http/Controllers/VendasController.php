<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class VendasController extends Controller
{
    public function create(){

        return view('vendas');
    }


}
