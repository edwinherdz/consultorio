<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    Protected $fillable = [

        'cnombre',
        'cdescripcion',
        'lactivo'];
        
    public  function getRouteKeyName() {

        return 'cnombre';
        
    }
        
}
