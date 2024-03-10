<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;
    protected $table='marketing';
    protected $primeryKey='id';
    protected $filable=['nombre','descripcion','duracion','presupuesto'];
    protected $guarded=[];
    public $timestamps=false;
}
