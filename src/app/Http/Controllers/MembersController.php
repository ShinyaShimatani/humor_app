<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Humor;

class MembersController extends Controller
{
    public function show(Request $request){
        $members = Humor::get();
    
        return view('humor_chart', ['member' => $members]);
    }
}
