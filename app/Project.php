<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $appends = ['slug', 'url'];

    public function getSlugAttribute()
    {
        return str_slug($this->title);
    }

    public function getUrlAttribute()
    {
        return route('projects.show', ['id' => $this->id, 'slug' => $this->slug]);
    }
}
