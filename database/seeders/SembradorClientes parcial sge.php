<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class SembradorClientes extends Seeder
{
    public function run(): void
    {
        $clientes = [
            [
                'nombre' => 'Laura Gómez',
                'telefono' => '3001234567',
                'direccion' => 'Calle 10 # 5-20, Cali',
            ],
            [
                'nombre' => 'Carlos Ramírez',
                'telefono' => '3109876543',
                'direccion' => 'Carrera 8 # 12-45, Cali',
            ],
            [
                'nombre' => 'María Fernanda López',
                'telefono' => '3157654321',
                'direccion' => 'Av. 6N # 23-10, Cali',
            ],
            [
                'nombre' => 'Andrés Torres',
                'telefono' => '3204567890',
                'direccion' => 'Calle 15 # 8-30, Cali',
            ],
            [
                'nombre' => 'Sofía Martínez',
                'telefono' => '3123456789',
                'direccion' => 'Carrera 100 # 5-55, Cali',
            ],
        ];

        foreach ($clientes as $cliente) {
            Cliente::create($cliente);
        }
    }
}
