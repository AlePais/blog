<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //Para especificar que campos guardar.
    // protected $fillable = ['name', 'description', 'categoria'];
    
    //Para especificar que campos quiero proteger.
    protected $guarded = [];
}
