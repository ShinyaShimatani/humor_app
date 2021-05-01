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

    public function detail(){
        $members = Humor::orderBy('id','asc')->get();
        return view('detail',['members' => $members]);
    }

    public function search(Request $request)
    {
        $mimic = $request->input('mimic');
        $maso = $request->input('maso');
        $pathos = $request->input('pathos');
        $updown = $request->input('updown');
        $black_joking = $request->input('black_joking');
        $volume = $request->input('volume');
        $energy = $request->input('energy');
        $insane = $request->input('insane');
 
        $query = Humor::query();
 
        if (!empty($mimic)) {
            $query->where('mimic', '>=', $mimic);
        }
        if (!empty($maso)) {
            $query->where('maso', '>=', $maso);
        }
        if (!empty($pathos)) {
            $query->where('pathos', '>=', $pathos);
        }
        if (!empty($updown)) {
            $query->where('updown', '>=', $updown);
        }
        if (!empty($black_joking)) {
            $query->where('black_joking', '>=', $black_joking);
        }
        if (!empty($volume)) {
            $query->where('volume', '>=', $volume);
        }
        if (!empty($energy)) {
            $query->where('energy', '>=', $energy);
        }
        if (!empty($insane)) {
            $query->where('insane', '>=', $insane);
        }
 
        $members = $query->get();
 
        return view('index', 
        compact('members', 'mimic', 'maso', 'pathos', 'updown', 'black_joking', 'volume', 'energy', 'insane'));
    }

    
}