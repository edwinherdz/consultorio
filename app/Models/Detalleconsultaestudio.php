<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleconsultaestudio extends Model
{
    Protected $fillable = [

        'consulta_id',
        'estudio_id'];
        
    public  function getRouteKeyName() {

        return 'id';
        
    }
}
