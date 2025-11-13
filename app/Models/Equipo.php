<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = ['tipo', 'cantidad', 'nombre'];
    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class);
    }
}
