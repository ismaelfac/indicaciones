<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ISMAEL ENRIQUE LASTRE ALVAREZ',
            'email' => 'ISMAELFAC@GMAIL.COM',
            'password' => bcrypt('BrwQ12-123'),
        ]);
    }
}
