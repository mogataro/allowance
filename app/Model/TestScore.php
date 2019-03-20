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
}
