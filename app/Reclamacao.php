<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamacao extends Model
{
    protected $table = "tbreclamacao";

    protected $fillable = ['idRec', 'idLab', 'pc', 'título', 'descricao', 'dtCriacao'];

    public $timestamps = false;
}
