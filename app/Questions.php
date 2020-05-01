<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questions extends Model
{
    protected $table = 'questions';
    use SoftDeletes;

    public function answers()
    {
    	return $this->hasOne('App\Answers');
    }
}
