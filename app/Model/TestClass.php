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
}
