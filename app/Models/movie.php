<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movie
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre
 * @property $categoria
 * @property $price
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movie extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'categoria', 'price'];


}
