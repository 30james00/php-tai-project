<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Photo extends Model
{
    public function __construct(array $attributes = [])
    {
        //generating Ordered UUID
        $attributes['id'] = Str::orderedUuid();
        parent::__construct($attributes);
    }

    protected $fillable = [
        'id', 'name', 'url',
    ];
}
