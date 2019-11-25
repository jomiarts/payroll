<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function client_contact_persons() 
    {
        return $this->hasMany('App\ClientContactPerson');
    }

    public function client_contract_rates() 
    {
        return $this->hasMany('App\ClientContractRate');
    }
}
