<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birthday', 'email', 'password', 'authority_code', 'user_possession_point',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * リレーション (多対1の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userAuthority() // 単数形
    {
        return $this->belongsTo('App\Model\UserAuthority', 'authority_code', 'authority_code');
    }
}
