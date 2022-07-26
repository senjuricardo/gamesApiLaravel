<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    protected $fillable = [
        'name',
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    protected static function booted()
    {
        static::deleting(function ($platform) {
            if ($platform->games()->exists()) {
                throw new \Exception('Related games found');
            }});
    }

   use SoftDeletes;
}
