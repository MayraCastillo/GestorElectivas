<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = ['codEstudiante', 'identificacionEst','nomEstudiante','email'];
    protected $primaryKey='codEstudiante'; // Opcional si el valor de la primary key es diferente a ‘id’
    public $incrementing = false;

    public function electivas(){
        return $this->belongsToMany('App\Electiva','estudiante_electiva','idEstudiante',
        'idElectiva')->withTimestamps('created_at');
    }
}
