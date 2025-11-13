<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Mantenimiento extends Model
{
    use HasFactory;

    protected $fillable = ['equipo_id', 'fecha', 'tipo', 'descripcion'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
