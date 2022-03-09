<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

   protected $fillable=['dni','nombre','direccion','edad'];
   protected $hidden=['created_at','updated_at'];// Para que se vea el postman createted_at y updated_at

}
