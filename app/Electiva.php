<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electiva extends Model
{
    protected $table = 'electivas';
    protected $fillable = ['codElectiva', 'nomElectiva', 'ele_nro_horas'];


    public function estudiantes(){
        return $this->belongsToMany('App\Electiva','estudiante_electiva','idElectiva',
        'idEstudiante')->withTimestamps('created_at');
    }
}
