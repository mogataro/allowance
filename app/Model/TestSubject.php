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
}
