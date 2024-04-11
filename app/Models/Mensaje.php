<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $fillable = ['nombre', 'email', 'mensaje', 'contador'];
    use HasFactory;
}
