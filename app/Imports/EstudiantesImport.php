<?php

namespace App\Imports;

use App\Estudiante;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class EstudiantesImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /*return new Estudiante([
         'codElectiva' => $row[0],
         'codEstudiante' => $row[1],
         'idEstudiante' => $row[2],
         'nomEstudiante' => $row[3],
         'email'    => $row[4],
       ]);*/
    }
    public function rules():array
    {
      // code...
    }
}
