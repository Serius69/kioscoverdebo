<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    use HasFactory;

    protected $table = "latests";


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'information',
        'description',
        'projectPhoto',
    ];

}
