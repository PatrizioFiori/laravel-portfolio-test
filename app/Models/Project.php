<?php

namespace App\Models;

use App\Models\Tag;

use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Project extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
