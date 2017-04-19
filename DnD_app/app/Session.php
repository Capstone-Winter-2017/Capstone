<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['name', 'campaign_id', 'description',
    'created_by', 'updated_by'];

    // pages contain contents
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
