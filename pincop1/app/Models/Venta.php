<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table='ventas';
    protected $primeryKey='id';
    protected $filable=['nombre','descripcion','cantidad','total'];
    protected $guarded=[];
    public $timestamps=false;
}
