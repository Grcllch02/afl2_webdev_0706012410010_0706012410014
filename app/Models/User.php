<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
// misal nama tabel dan nama model tidak sesuai 
    // protected $table = 'create_users_table';

    // tapi karna kita namanya sesuai dimana kalo modelnya User dan tablenya users jadi dia otomatis kenal kalo tabel users itu milik model User

    // ini untuk si user ini nnti bisa pake factory jadi di declare make factory
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}