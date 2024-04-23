<?php

namespace App\Models;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

  


    protected $fillable = [
        'cname',
        'cimage',
        'video'

    ];
}
