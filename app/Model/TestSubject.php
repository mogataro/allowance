<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestSubject extends Model
{
    /**
     * TestSubject
     *
     * @var array
     */
    protected $fillable = [
        'test_class_id',
        'test_subject_name'
    ];

    /**
     * リレーション (1対多の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function testScores() // 複数形
    {
        return $this->hasMany('App\Model\TestScore', 'test_subject_id', 'id');
    }
}
