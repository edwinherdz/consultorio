<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    Protected $fillable = [
        'cnombreconsultorio',
        'cdescripcion',
        'cdireccion',
        'ctelefono',
        'cemail',
        'consultorio_id'];
    

    public function getRouteKeyName() 
    {
        return 'id';
    }

    public function users()
    {
        return $this->hasMany(User::class,'consultorio_id');
    }
}
