<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome', 'foto'];
    public $timestamps = false;
    public $table = "nodmnkd";
}
