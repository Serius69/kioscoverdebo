<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
    **/

     protected $fillable = [
         'name',
         'information',
         'description',
         'project_photo',
     ];

     protected function name(): Attribute {
        return new Attribute (
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }


}
