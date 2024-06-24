<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organiseruser extends Model
{
    use HasFactory;

    public function organiser()
    {
        return $this->hasOne(Organiser::class, 'id','organiser_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function role()
    {
        return $this->hasOne(Organiserrole::class, 'id','organiserrole_id');
    }
    
}
