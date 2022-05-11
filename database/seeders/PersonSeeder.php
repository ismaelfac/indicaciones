<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = Auth::id();
        $data = file_get_contents("database/Queries/people.json");
        $people = json_decode($data, true);
        foreach ($people as $value) {
            Person::create([
                'names' => $value['names'],
                'slug' => $value['names'],
                'address' => $value['address'],
                'typeDni' => $value['typeDni'],
                'dni' => $value['dni'],
                'phone' => $value['phone'],
                'email' => $value['email'],
                'user_id' => 1,
                'isActive' => $value['isActive']
            ]);
        }
    }
}
