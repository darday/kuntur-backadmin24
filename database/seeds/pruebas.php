<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class pruebas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calificacions')->insert([
            'calf_nombre' => "Sobresaliente",
            'calf_descripcion' => "Muy Bueno",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        DB::table('calificacions')->insert([
            'calf_nombre' => "Muy Bueno",
            'calf_descripcion' => "Muy Bueno",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        DB::table('calificacions')->insert([
            'calf_nombre' => "Bueno",
            'calf_descripcion' => "Muy Bueno",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);


        DB::table('roles')->insert([
            'name' => "admin",
            'description' => "admin",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        DB::table('roles')->insert([
            'name' => "user",
            'description' => "user",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        DB::table('users')->insert([
            'name' => "Darío",
            'email' => "darday1980@gmail.com",
            'email_verified_at' => "2024-08-02",
            'rol' => "admin",
            'password' => Hash::make('123456789'), // Aquí encriptamos la contraseña
            'img' => "user",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        DB::table('films')->insert([
            [
                'film_Titulo' => 'La Noche Eterna',
                'film_Director' => 'Carlos García',
                'film_Anio' => 2023,
                'film_Duracion' => '120 min',
                'film_Ciudad' => 'Buenos Aires',
                'film_Categoria' => 'Largometraje Ficción',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/lanocheeterna',
                'film_Descripcion' => 'Un thriller que explora los límites de la mente humana durante una noche oscura.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'El Río de la Vida',
                'film_Director' => 'Lucía Fernández',
                'film_Anio' => 2021,
                'film_Duracion' => '95 min',
                'film_Ciudad' => 'Barcelona',
                'film_Categoria' => 'Largometraje Documental',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/elriodelavida',
                'film_Descripcion' => 'Un documental que narra la lucha por la supervivencia en comunidades rurales.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'Destino Final',
                'film_Director' => 'Miguel Sánchez',
                'film_Anio' => 2022,
                'film_Duracion' => '45 min',
                'film_Ciudad' => 'Lima',
                'film_Categoria' => 'Cortometraje Ficción',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/destinofinal',
                'film_Descripcion' => 'Un cortometraje que sigue el último viaje de un hombre hacia el final de sus días.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'El Camino del Saber',
                'film_Director' => 'Juan Pérez',
                'film_Anio' => 2020,
                'film_Duracion' => '60 min',
                'film_Ciudad' => 'Madrid',
                'film_Categoria' => 'Cortometraje Documental',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/caminodelsaber',
                'film_Descripcion' => 'Una exploración documental sobre la educación en zonas rurales de España.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'Universo Fragmentado',
                'film_Director' => 'Paula Gómez',
                'film_Anio' => 2024,
                'film_Duracion' => '30 min',
                'film_Ciudad' => 'México DF',
                'film_Categoria' => 'Cortometraje Universitario Ficción',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/universofragmentado',
                'film_Descripcion' => 'Una historia de ciencia ficción realizada por estudiantes universitarios.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'Ciclos de la Tierra',
                'film_Director' => 'Roberto Díaz',
                'film_Anio' => 2021,
                'film_Duracion' => '40 min',
                'film_Ciudad' => 'Quito',
                'film_Categoria' => 'Cortometraje Universitario Documental',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/ciclosdelatierra',
                'film_Descripcion' => 'Documental que muestra la relación entre el cambio climático y la vida rural.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'Viaje Sin Retorno',
                'film_Director' => 'Patricia López',
                'film_Anio' => 2023,
                'film_Duracion' => '50 min',
                'film_Ciudad' => 'Montevideo',
                'film_Categoria' => 'Cortometraje Internacional',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/viajesinretorno',
                'film_Descripcion' => 'Un cortometraje internacional que aborda temas de migración y esperanza.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'Sombras del Pasado',
                'film_Director' => 'Clara Rivas',
                'film_Anio' => 2020,
                'film_Duracion' => '110 min',
                'film_Ciudad' => 'Bogotá',
                'film_Categoria' => 'Largometraje Ficción',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/sombrasdelpasado',
                'film_Descripcion' => 'Una intriga familiar que desentierra secretos del pasado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'El Último Refugio',
                'film_Director' => 'Diego Herrera',
                'film_Anio' => 2022,
                'film_Duracion' => '100 min',
                'film_Ciudad' => 'Santiago',
                'film_Categoria' => 'Largometraje Documental',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/elultimorefugio',
                'film_Descripcion' => 'Un documental sobre la vida silvestre en los rincones más remotos de Chile.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_Titulo' => 'Horizontes Perdidos',
                'film_Director' => 'Gabriela Mena',
                'film_Anio' => 2024,
                'film_Duracion' => '85 min',
                'film_Ciudad' => 'Caracas',
                'film_Categoria' => 'Cortometraje Ficción',
                'film_Estado' => true,
                'film_imagen' => 'uploads/CfSWQ7xcKe63p3TPokg1h4IbmiabmGvWYBqWcNlD.png',
                'film_Url' => 'http://example.com/horizontesperdidos',
                'film_Descripcion' => 'Una narrativa que explora las vidas perdidas en la frontera entre Venezuela y Colombia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Define el rango de fechas (todo el mes de noviembre 2024)
        $startDate = Carbon::create(2024, 11, 1);
        $endDate = Carbon::create(2024, 11, 30);

        // Recorre cada día del mes de noviembre
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            // Obtener el día de la semana en formato abreviado y concatenar con el día del mes
            $dayOfWeek = $this->getDayAbbreviation($date->format('l')); // Formato "l" devuelve el día de la semana completo
            $dayOfMonth = $date->format('j'); // Obtener el día del mes sin ceros a la izquierda

            // Generar la descripción como "VIE 1", "SÁB 2", etc.
            $descripcion = $dayOfWeek . ' ' . $dayOfMonth;

            // Insertar los datos en la tabla
            DB::table('fechaprgramacions')->insert([
                'fecha' => $date->format('Y-m-d'),
                'descripcion' => $descripcion,
                'imgfecha' => null, // Opcional, la imagen no es requerida
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function getDayAbbreviation($day)
    {
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
}
