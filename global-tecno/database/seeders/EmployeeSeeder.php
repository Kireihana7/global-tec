<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generar 10 empleados de ejemplo
        for ($i = 0; $i < 10; $i++) {
            Employee::create([
                'first_name' => 'Nombre' . ($i + 1),
                'middle_name' => 'SegundoNombre' . ($i + 1),
                'last_name' => 'Apellido' . ($i + 1),
                'other_name' => 'OtroNombre' . ($i + 1),
                'countryJob' => 'País' . ($i + 1),
                'citizenship' => 'Ciudadanía' . ($i + 1),
                'personal_ID' => 'IDPersonal' . ($i + 1),
                'type_ID' => 'TipoID' . ($i + 1),
                'email' => 'email' . ($i + 1) . '@example.com',
                'started_in' => now(), // Asigna la fecha y hora actual
                'area' => 'Área' . ($i + 1),
                'status' => 'Estado' . ($i + 1),
            ]);
        }
    }
}
