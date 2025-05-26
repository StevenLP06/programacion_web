<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    #Cardinalidad con Roles, 1 rol pertenece a muchos usuarios
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
