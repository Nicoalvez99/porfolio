<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    protected $fillable = ['id_proyecto', 'ruta'];
    use HasFactory;
}
