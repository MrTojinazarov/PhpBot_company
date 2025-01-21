<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['name','user_id','date','sum'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cardmeals()
    {
        return $this->hasMany(CardMeal::class, 'card_id');
    }
}
