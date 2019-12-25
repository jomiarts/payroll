<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    //
    public function client_contact_persons() 
    {
        return $this->hasMany('App\ClientContactPerson');
    }

    public function client_contract_rates() 
    {
        return $this->hasOne('App\ClientContractRate');
    }
}
