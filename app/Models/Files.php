<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_file';

    protected $fillable = ['case_name', 'offence', 'defendant', 'prosecutor', 'status'];

    public function type(){
        return $this->belongsTo(types::class, 'offence', 'id_type');
    }
}
