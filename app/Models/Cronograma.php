<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cronograma extends Model
{   
    use HasFactory;
    protected $table = 'cronogramas';
    protected $fillable = ['pauta', 'duracion', 'publicidad', 'usuario_id'];

    public function usuario(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
