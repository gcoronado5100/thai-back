<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Gabriel Coronado',
                'email' => 'gabriel@glasse.com.mx',
                'password' => bcrypt('Gabo0191$!$'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Luis Enrique Espinosa',
                'email' => 'luisenrique.espinosa@gmail.com',
                'password' => bcrypt('Tata1535!'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Jose Miguel Espinosa',
                'email' => 'direccion@freddo.com.mx',
                'password' => bcrypt('Freddo2021!'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Gabriela Marin',
                'email' => 'gabrielamarin@ciampi.com.mx',
                'password' => bcrypt('Ciampi2021!'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Blanca Citali Castañeda',
                'email' => 'blanca@glasse.com.mx',
                'password' => bcrypt('BlancaGlasse2023'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Joseline Cardenas',
                'email' => 'joseline@freddo.com.mx',
                'password' => bcrypt('FreddoJoseline2024'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Gaby Ashby',
                'email' => 'gaby@freddo.com.mx',
                'password' => bcrypt('FreddoGaby2024'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Leticia Magaly Velazquez Garcia',
                'email' => 'leticia@freddo.com.mx',
                'password' => bcrypt('FreddoLety2024'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Sofía villanueva',
                'email' => 'sofia@freddo.com.mx',
                'password' => bcrypt('FreddoSophie2024'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Harry Bazán',
                'email' => 'harry@ciampi.com.mx',
                'password' => bcrypt('FreddoHarry2024'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Nora Elizabeth Chavez Serrano',
                'email' => 'nora@freddo.com.mx',
                'password' => bcrypt('FreddoNora2024'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Keren Álvarez',
                'email' => 'keren@freddo.com.mx',
                'password' => bcrypt('FreddoKeren2024'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Jahaziel Salas',
                'email' => 'jahaziel@freddo.com.mx',
                'password' => bcrypt('FreddoJahaziel2024'),
                'email_verified_at' => now(),
                'active' => true
            ],
            [
                'name' => 'Santiago Mendez',
                'email' => 'santiago@freddo.com.mx',
                'password' => bcrypt('FreddoSantiago2023'),
                'email_verified_at' => now(),
                'active' => true
            ]
        ]);
    }
}
