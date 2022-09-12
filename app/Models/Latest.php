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
        'author',
        'description',
        'latest_photo',
    ];

    protected function name(): Attribute {
        return new Attribute (
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

}
