<?php

namespace Database\Seeders;

use App\Models\Estate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = Auth::id();
        $data = file_get_contents("database/Queries/estates.json");
        $estates = json_decode($data, true);
        foreach ($estates as $value) {
            Estate::create([
                'address' => $value['address'],
                'realEstateRegistration' => $value['realEstateRegistration'],
                'typeEstate' => $value['typeEstate'],
                'isSharedElectricityMeter'=> $value['isSharedElectricityMeter'],
                'isSharedWaterMeter'=> $value['isSharedWaterMeter'],
                'isSharedGasMeter'=> $value['isSharedGasMeter'],
                'observations'=> $value['observations'],
                'user_id' => 1,
                'isActive' => $value['isActive']
            ]);
        }
    }
}
