<?php

namespace crud_laravel;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public $fillable = ['nome','senha','usuario'];
    protected $table = 'usuarios';
}
