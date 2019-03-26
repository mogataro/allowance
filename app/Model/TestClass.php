<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestClass extends Model
{
    /**
     * TestClass
     *
     * @var array
     */
    protected $fillable = [
        'test_type_id',
        'test_class_name'
    ];

    /**
     * リレーション (1対多の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function testScores() // 複数形
    {
        return $this->hasMany('App\Model\TestScore', 'test_class_id', 'id');
    }
}
