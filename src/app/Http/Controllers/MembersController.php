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

    public function search(Request $request)
    {
        $mimic = $request->input('mimic');
        $maso = $request->input('maso');
 
        $query = Humor::query();
 
        if (!empty($mimic)) {
            $query->where('mimic', '>=', $mimic);
        }

        if (!empty($maso)) {
            $query->where('maso', '>=', $maso);
        }
 
        $members = $query->get();
 
        return view('index', compact('members', 'mimic', 'maso'));
    }
}