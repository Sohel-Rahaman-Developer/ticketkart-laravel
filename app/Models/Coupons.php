<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;

    public function organiser()
    {
        return $this->belongsTo(Organiser::class,'organiser_id','id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class,'coupon_code','coupon_code');
    }
}
