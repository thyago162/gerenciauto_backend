<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoItem extends Model
{
    protected $table = 'tipo_item';
    protected $primaryKey = 'id_tipo_item';
    public $timestamps = false;
    protected $fillable = [
        'nm_tipo_item'
    ];
}
