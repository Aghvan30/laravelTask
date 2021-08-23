<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    public function brands(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function models(){
        return $this->belongsTo(CarModel::class,'cars_model_id');
    }
}
