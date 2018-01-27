<?php

namespace App\Models\Admin;

use App\Models\Client;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'title',
        'description',
        'image',
        'url_web',
        'url_android',
        'url_ios',
        'technology',
        'client_id',
        'type_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
