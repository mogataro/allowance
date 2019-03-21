<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserAuthority extends Model
{
    /**
     * UserAuthority
     *
     * @var array
     */
    protected $fillable = [
        'authority_code',
        'authority_name'
    ];

    /**
     * リレーション (1対多の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() // 複数形
    {
        return $this->hasMany('App\Model\User', 'authority_code', 'authority_code');
    }
}
