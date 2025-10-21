<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Type extends Model
{
    public function project()
    {
        return $this->hasOne(Project::class);
    }
}
