<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Showrecord extends Model
{
    use HasFactory;
    protected $table = 'show_record';
    protected $guarded = [];

    use softDeletes;
}
