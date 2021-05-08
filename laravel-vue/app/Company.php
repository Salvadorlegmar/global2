<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['id','name','money','contact','telephone','coment','is_gestioned','created_at','updated_at'];
}
