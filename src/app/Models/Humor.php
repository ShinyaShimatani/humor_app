<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humor extends Model
{
    protected $table = 'members';
    protected $fillable = ['name','mimic','maso','pathos','updown','black','volume','energy','insane','color'];

}
