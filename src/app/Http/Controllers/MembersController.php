<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Humor;

class MembersController extends Controller
{
    public function show(Request $request){
    $members = Humor::get();

    // Generate random colours for the groups
    for ($i=0; $i<=count($members); $i++) {
           $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
          }

    // Prepare the data for returning with the view
    $Members = new Members;
      $members->labels = (array_keys($members));
      $members->dataset = (array_values($members));
      $members->colours = $colours;
    return view('humor_chart', compact('chart'));
    }
}