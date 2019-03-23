<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    /**
     * TestType
     *
     * @var array
     */
    protected $fillable = [
        'test_type_name'
    ];

    /**
     * リレーション (1対多の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function testScores() // 複数形
    {
        return $this->hasMany('App\Model\TestScore', 'test_type_id', 'id');
    }
}
