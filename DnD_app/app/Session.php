<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['name', 'description'];

    // pages contain contents
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
