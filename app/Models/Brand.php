<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public function carModel(){
        return $this->hasOne(Model::class);
    }
    public function cars(){
        return $this->hasMany(Cars::class);
    }


}
