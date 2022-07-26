<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
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
        static::deleting(function ($genre) {
            if ($genre->games()->exists()) {
                throw new \Exception('Related games found');
            }});
    }

    use SoftDeletes;
}
