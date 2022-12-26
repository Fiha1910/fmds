<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Branch;
use App\Models\Products;

class Demand extends Model
{
    use HasFactory;
    protected $guarded=[];

    
    public function user(){
        return $this->hasOne(User::class);
    }

    public function products(){
        return $this->hasOne(Products::class,'id','product_id');
    }
    public function branch(){
        return $this->hasOne(Branch::class,'id','branch_id');
    }
}
