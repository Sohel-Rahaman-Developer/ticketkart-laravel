<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Boot method to generate a unique customerID for every user.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->customerID = self::generateCustomerID();
        });
    }

    protected static function generateCustomerID()
    {
        $lastUser = self::orderBy('id', 'desc')->first();
        $lastNumber = 0;

        if ($lastUser && $lastUser->customerID) {
            $lastNumber = (int) str_replace('TK-', '', $lastUser->customerID);
        }

        $newNumber = $lastNumber + 1;
        return 'TK-' . str_pad($newNumber, 6, '0', STR_PAD_LEFT);
    }

    /**
     * Accessor to get the first two letters of the user's name.
     *
     * @return string
     */
    public function getInitialsAttribute()
    {
        return strtoupper(substr($this->name, 0, 2));
    }

    //User wise organisers
    public function organiserusers()
    {
        return $this->hasMany(Organiseruser::class, 'user_id', 'id');
    }
}
