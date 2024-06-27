<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Organiser extends Model
{
    use HasFactory;

    use Sluggable;

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function organiserusers()
    {
        return $this->hasMany(Organiseruser::class, 'organiser_id', 'id');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'organiser_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
