<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestScore extends Model
{
     /**
     * TestScore
     *
     * @var array
     */
    protected $fillable = [
        'imp_year',
        'imp_month',
        'test_type_id',
        'test_class_id',
        'test_subject_id',
        'acquisition_score',
        'perfect_score'
    ];

    /**
     * リレーション (多対1の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function testType() // 単数形
    {
        return $this->belongsTo('App\Model\TestType', 'test_type_id', 'id');
    }

    /**
     * リレーション (多対1の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function testClass() // 単数形
    {
        return $this->belongsTo('App\Model\TestClass', 'test_class_id', 'id');
    }

    /**
     * リレーション (多対1の関係)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function testSubject() // 単数形
    {
        return $this->belongsTo('App\Model\TestClass', 'test_subject_id', 'id');
    }
}
