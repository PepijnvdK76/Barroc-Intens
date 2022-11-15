<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Contracts\Foundation\MaintenanceMode;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorieSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            InvoiceSeeder::class,
            InvoiceProductsSeeder::class,
            ContractSeeder::class,
            MaintenanceAppointmentSeeder::class,


        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
