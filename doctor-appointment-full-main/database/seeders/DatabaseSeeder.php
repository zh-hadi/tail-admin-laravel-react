<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([AppointmentSeeder::class]);
        $this->call([DoseSeeder::class]);
        $this->call([DoseTimeSeeder::class]);
        $this->call([MedicineSeeder::class]);
        $this->call([GenarelSettingSeeder::class]);
        $this->call([CompanySettingSeeder::class]);
    }
}
