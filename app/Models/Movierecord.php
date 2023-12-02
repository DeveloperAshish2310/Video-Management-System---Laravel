<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movierecord extends Model
{
    use HasFactory;
    protected $table = 'movie_records';
    protected $guarded = [];
    use SoftDeletes;
}
