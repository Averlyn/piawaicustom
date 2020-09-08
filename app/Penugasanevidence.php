<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penugasanevidence extends Model
{
    protected $fillable = [
        'keterangan', 'file',
    ];

    public function penugasan()
    {
        return $this->belongsTo(Penugasan::class);
    }
}
