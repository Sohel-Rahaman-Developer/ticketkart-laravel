<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'phone_no_prefix','currency','currency_symbol','timezone','timezone_code','stripe_account_id','paypal_id','bank_account_id'
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class,'currency_id','id');
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_country');
    }
    
}
