<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class InOutTable extends Model
{
    protected $table = 'in_out_table';
    protected $fillable = ['user_id','in','go_pause','back_pause','out'];
}
