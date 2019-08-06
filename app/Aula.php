<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
  protected $table = 'aula';
  protected $fillable = ['nomAula', 'capacidad', 'hora7a9', 'hora9a11', 'hora11a1', 'hora2a4', 'hora4a6', 'hora6a8'];

}
