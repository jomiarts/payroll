<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientContractRate extends Model
{
    protected $table = 'client_contract_rates';
    //
    public function Client() 
    {
        return $this->belongsTo('App\Model\Client', 'id');
    }

    public function getMoneyNumericValue($input) {
        return floatval(preg_replace('/[^\d.]/', '', $input));
    }


}
