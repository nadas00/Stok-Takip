<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $guarded = [];
    protected $table = "owners";

    public function product(){
        return $this->hasMany("App\Product");
    }
}
