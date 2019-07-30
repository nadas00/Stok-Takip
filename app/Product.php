<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
protected $table = "products";



    public function owner(){
        return $this->belongsTo("App\Owner");
    }
}
