<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skp extends Model
{
    protected $fillable = [
        'user_id','iku', 'ta', 'tj', 'skj', 'jo', 'output', 'waktu', 'kategori', 'confirmed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
