<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Editorial
 *
 * @property $id
 * @property $nombre
 *
 * @property Juego[] $juegos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Editorial extends Model
{
    
    protected $perPage = 20;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juegos()
    {
        return $this->hasMany(\App\Models\Juego::class, 'id', 'editorial_id');
    }
    
}
