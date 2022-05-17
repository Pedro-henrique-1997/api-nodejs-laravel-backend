<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table;

    protected $fillable = ['name', 'email', 'tipo', 'senha'];
}
