<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    protected $fillable = [
        'confirmed', 'penugasan', 'pegawai', 'deadline', 
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penugasanevidences()
    {
        return $this->hasMany(Penugasanevidence::class);
    }
}
