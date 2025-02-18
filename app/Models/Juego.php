<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Juego
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $unidades
 * @property $duracion
 * @property $edad_min
 * @property $jugadores_max
 * @property $editorial_id
 * @property $tipo_id
 *
 * @property Editorial $editorial
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Juego extends Model
{
    
    protected $perPage = 20;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'precio', 'unidades', 'duracion', 'edad_min', 'jugadores_max', 'editorial_id', 'tipo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function editorial()
    {
        return $this->belongsTo(\App\Models\Editorial::class, 'editorial_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo()
    {
        return $this->belongsTo(\App\Models\Tipo::class, 'tipo_id', 'id');
    }
    
}
