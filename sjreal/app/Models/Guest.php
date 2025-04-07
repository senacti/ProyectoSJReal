<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name_guest',
        'lastname_guest',
        'doc_guest',
        'num_doc_guest',
        'origin_guest',
        'phone_guest'
    ];
    //

}
