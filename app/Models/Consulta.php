<?php

namespace App\Models;
use App\Models\paciente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    Protected $fillable = [
    'paciente_id',
    'eedad',
    'dtalla',
    'dpeso',
    'calergias',
    'cpresion',
    'cdiagnostico',
    'ctratamiento',
    'cobservacion',
    'user_id'];
    

    
    public function getRouteKeyName() 
    {
        return 'id';
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
