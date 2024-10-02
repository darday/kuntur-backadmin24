<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FechaProgramacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define el rango de fechas (todo el mes de noviembre 2024)
        $startDate = Carbon::create(2024, 11, 1);
        $endDate = Carbon::create(2024, 11, 30);

        // Recorre cada día del mes de noviembre
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            // Obtener el día de la semana en formato abreviado
            $dayOfWeek = $this->getDayAbbreviation($date->format('l')); // Formato "l" devuelve el día de la semana completo

            // Insertar los datos en la tabla
            DB::table('fechaprgramacions')->insert([
                'fecha' => $date->format('Y-m-d'),
                'descripcion' => $dayOfWeek,
                'imgfecha' => null, // Opcional, la imagen no es requerida
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function getDayAbbreviation($day)
    {
        $days = [
            'Monday' => 'LUN',
            'Tuesday' => 'MAR',
            'Wednesday' => 'MIÉ',
            'Thursday' => 'JUE',
            'Friday' => 'VIE',
            'Saturday' => 'SÁB',
            'Sunday' => 'DOM',
        ];

        return $days[$day] ?? '';
    }
}
