<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class M_Pertanyaan extends Model
{
    protected $table = 'questions';

    use SoftDeletes;

}
