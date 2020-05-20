<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hashtags extends Model
{
    protected $table = 'hashtags';
    use SoftDeletes;

    public function questions()
    {
        return $this->belongsTo('App\Questions');
    }
}
