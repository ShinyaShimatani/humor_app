<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Humor;

class SubscribersController extends Controller
{
    public function show(Request $request){
        $subscribers = Humor::get();
    
        return view('humor_chart', ['subscribers' => $subscribers]);
    }
}
