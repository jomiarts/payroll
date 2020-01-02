<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientContactPerson extends Model
{
    //
    protected $table = 'client_contact_persons';

    public function Client() 
    {
        return $this->belongsTo('App\Model\Client', 'id');
    }
}
