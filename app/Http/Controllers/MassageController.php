<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MassageCOntroller extends Controller
{
    public function index()
    {
        $users = DB::table('client')->select('text')->get()->first();
        return view('client.massage', ['users' => $users]);
    }
}
