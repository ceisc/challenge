<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postagem extends Model
{
    use SoftDeletes;

    protected $table = 'postagem';
    protected $primaryKey = "id";
}
