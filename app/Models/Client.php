<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'url',
        'image'
    ];

    public function projects()
    {
        $this->hasMany(Project::class);
    }
}
