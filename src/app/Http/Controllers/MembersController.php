<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Humor;

class MembersController extends Controller
{
    public function show(Request $request){
        $member = Humor::get();
    
        return view('humor_chart', ['member' => $member]);
    }
}
