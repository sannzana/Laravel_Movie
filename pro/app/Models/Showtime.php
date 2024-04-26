<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $fillable = ['movie_id', 'show_date', 'show_time'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }



//later added mighr delete
    // existing code ...

    public function getReadableShowTimeAttribute()
    {
        $times = [];
        if ($this->show_time[0] == '1') $times[] = 'Morning';
        if ($this->show_time[1] == '1') $times[] = 'Afternoon';
        if ($this->show_time[2] == '1') $times[] = 'Evening';
        return implode(', ', $times);
    }

}

