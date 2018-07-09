<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'FIO', 'photo', 'science_degree','position', 'education', 'course', 'publications', 'email', 'tel', 'intelect',
        'googlescholar', 'about'];
}
