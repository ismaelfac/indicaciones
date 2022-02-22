<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->truncateTables([
            'password_resets',
            'users',
            'contract_estate',
            'contract_documents',
            'contract_person',
            'contracts',
            'estates',
            'documents',
            'people',
        ]);
        $this->call([
            UserSeeder::class,
            DocumentSeeder::class,
            EstateSeeder::class,
            PersonSeeder::class,
            ContractSeeder::class            
        ]);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
    }
}
