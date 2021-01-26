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
    
    protected $fillable = [
        'id', 'name', 'url', 'user', 'public'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
