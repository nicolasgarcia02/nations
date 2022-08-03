<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $primaryKey = "country_id";
    public $timestamps = false;
    use HasFactory;
    public function languages(){
        return $this->belongsToMany(Language::class, 'country_languages', 'country_id', 'language_id');
    }
    public function regions(){
        return $this->belongsTo(Region::class, 'region_id');
    }
}