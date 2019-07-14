<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['sigla', 'regiao', 'nome_extenso', 'capital'];
    protected $guarded = ['id'];
    protected $table = 'estados';
    public $timestamps = false;
}
