<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherEquipment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function adoptor(){
        return $this->belongsTo('App\Adoptor');
    }
}
