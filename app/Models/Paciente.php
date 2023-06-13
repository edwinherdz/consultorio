<?php

namespace App\Models;

use App\Models\Consulta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    Protected $fillable = [
        'cnombre',
        'cprimerapellido',
        'csegundoapellido',
        'dfechanacimiento',
        'csexo',
        'ctelefono',
        'cemail',
        'idusuario',
        'cobservacion'];
    public function consultas()
    {
        return $this->hasMany(Consulta::class,'paciente_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    

    public function getRouteKeyName() 
    {
        return 'id';
    }
}
