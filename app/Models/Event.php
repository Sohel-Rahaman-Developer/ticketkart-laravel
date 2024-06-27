<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function eventtype()
    {
        return $this->hasOne(EventType::class, 'id','type_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }

    public function subcategory()
    {
        return $this->hasOne(Subcategory::class, 'id','subcategory_id');
    }

    public function organiser()
    {
        return $this->hasOne(Organiser::class, 'id','organiser_id');
    }

    public function country()
    {
        return $this->hasOne(Country::class, 'id','country_id');
    }

    public function language()
    {
        return $this->hasOne(Language::class, 'id','language_id');
    }

    public function images()
    {
        return $this->hasMany(EventImages::class, 'event_id','id');
    }

    public function tickets()
    {
        return $this->hasMany(Tickets::class, 'event_id','id');
    }

    public function agendas()
    {
        return $this->hasMany(EventAgendas::class, 'event_id','id');
    }

    public function faqs()
    {
        return $this->hasMany(EventFaqs::class, 'event_id','id');
    }

     public function coupons()
     {
         return $this->hasOne(Coupons::class,'coupon_code','coupon_code');
     }
    
}
