<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organiserrole extends Model
{
    use HasFactory;

    public function organiser()
    {
        return $this->hasOne(Organiser::class, 'id','organiser_id');
    }
}
