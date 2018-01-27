<?php

namespace App\Models;

use App\Models\Admin\Project;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
        'label'
    ];

    public function projects()
    {
        $this->hasMany(Project::class);
    }
}
