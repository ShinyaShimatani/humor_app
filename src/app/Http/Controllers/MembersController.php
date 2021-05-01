<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Humor;

use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function show(){

        $members = Member::orderBy('id','asc')->get();
        return view('humor_chart',['members' => $members]);

        /*$sql= "SELECT id, name, mimic, maso, pathos, updown, black, volume, energy, insane, color FROM members ORDER BY id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data= "";
        while($row = $stmt->fetchAll()){
        $data.= "{";
        $data.= " label: '".$row["name"]."',";
        $data.= " data: [".$row["mimic"].", ".$row["maso"].", ".$row["mimic"].", ".$row["pathos"].", ";
        $data.= $row["updown"].", ".$row["black"].", ".$row["volume"].", ".$row["energy"].", ".$row["insane"]."],";
        $data.= " backgroundColor: 'rgba(".$row["color"].",0.4)',";
        $data.= " borderColor: 'rgba(123, 255, 0, 1)',";
        $data.= " borderWidth: 1";
        $data.= "},";
        }*/

    }
}