<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humor extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = 
     ['name','mimic','maso','pathos','updown','black_joking','volume','energy','insane','sns_Twitter','sns_Youtube','others'];

}