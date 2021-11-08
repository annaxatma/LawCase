<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_type';

    protected $fillable = ['code', 'category', 'offence', 'definition', 'sentence'];

    public function files(){
        return $this->hasMany(files::class, 'offence', 'id_type');
    }
}
