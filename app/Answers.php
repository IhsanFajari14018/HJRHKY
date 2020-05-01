<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answers extends Model
{
    protected $table = 'answers';
    use SoftDeletes;

    public function questions()
    {
    	return $this->belongsTo('App\Questions');
    }
}
