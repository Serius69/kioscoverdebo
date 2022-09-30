<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
         'url',
         'photo_id',
         'status'
     ];

     protected function name(): Attribute {
        return new Attribute (
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

    public function photo()
    {
    return $this->belongsTo(Photo::class, 'photo_id');
    }


}
