<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humor extends Model
{
    use HasFactory;
    
    rotected $table = 'members';
    protected $fillable = ['name','mimic','maso','pathos','updown','black','volume','energy','insane','color'];

}
