<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = ['name', 'user_id', 'level', 'race', 'class', 'background', 'alignment',     'experience', 'faction', 'strength', 'dexterity', 'constitution', 'intelligence', 'wisdom', 'charisma', 'personality_traits', 'ideals', 'bonds', 'flaws', 'features'];

//    public function getId()
//    {
//        return Auth::user()->id;
//    }

    // pages contain contents
//    public function articles()
//    {
//        return $this->hasMany(Article::class);
//    }

    public function created_by()
    {
        return $this->belongsTo(User::class);
    }

    public function updated_by()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function sessions()
    {
        return $this->belongsToMany(Session::class);
    }

}
