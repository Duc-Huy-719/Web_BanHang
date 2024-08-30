<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
//     use HasApiTokens, HasFactory, Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * The attributes that should be cast.
//      *
//      * @var array<string, string>
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];
    protected $table = 'USERS';
    protected $primaryKey = 'USERID';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['USERID', 'USERROLESID', 'MANV', 'MAKH', 'MATKHAU'];

    // Assuming 'MATKHAU' is the password column
    protected $hidden = ['MATKHAU'];

    public function getAuthPassword()
    {
        return $this->MATKHAU;
    }

}