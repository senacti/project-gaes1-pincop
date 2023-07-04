<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table='clientes';
    protected $primeryKey='id';
    protected $filable=['nombre','telefono','correo','direccion','estado'];
    protected $guarded=[];
    public $timestamps=false;
}
