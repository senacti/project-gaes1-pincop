<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $primeryKey='id';
    protected $filable=['nombre','marca','talla','cantidad','categoria','descripcion','precio'];
    protected $guarded=[];
    public $timestamps=false;
}
