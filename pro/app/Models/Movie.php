<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'movies2';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'genre',
        'duration',
        'short_description',
        'description',
        'starring',
        'director',
        'producer',
        'image',
    ];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }


    // You can also define relationships here if needed, like hasMany or belongsTo
}
