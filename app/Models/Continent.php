<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = "continents";
    protected $primaryKey = "continent_id";
    public $timestamps = false;
    use HasFactory;
    public function regions(){
        return $this->hasMany(Region::class, 'continent_id');
    }
}