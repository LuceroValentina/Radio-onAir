<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargo;
class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargos = ['Admin', 'Locutor', 'Tecnico', 'Radio', 'Television', 'Movil'];
        foreach ($cargos as $cargo) {
            Cargo::create(['nombre' => $cargo]);
        }
    }
}
