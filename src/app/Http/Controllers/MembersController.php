<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Humor;

use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function index(){

        $members = Humor::orderBy('id','asc')->get();
        return view('index',['members' => $members]);

    }
}