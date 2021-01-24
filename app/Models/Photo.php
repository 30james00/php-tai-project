<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Photo extends Model
{
    //uuid as id configuration
    protected $primaryKey = 'id';
    protected $keyType = 'uuid';
    public $incrementing = false;

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
