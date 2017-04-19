<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description', 'created_by', 'updated_by'];

    public function users()
    {
        $this->hasMany(User::class);
    }
}
