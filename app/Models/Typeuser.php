<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeuser extends Model
{
    use HasFactory;

    protected $table = "typeuser";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
    **/

     protected $fillable = [
         'type',
         'status'
     ];


}
