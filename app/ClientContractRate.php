<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientContractRate extends Model
{
    //
    public function Client() 
    {
        return $this->belongsTo('App\Client', 'id');
    }

    public function getMoneyNumericValue($input) {
        return floatval(preg_replace('/[^\d.]/', '', $input));
    }


}
