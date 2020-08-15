<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $guarded = [];
    protected $table = 'client';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
