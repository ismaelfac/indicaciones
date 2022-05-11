<?php

namespace Database\Seeders;

use App\Models\Estate;
use Illuminate\Database\Seeder;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/estates.json");
        $estates = json_decode($data, true);
        foreach ($estates as $value) {
            Estate::create([
                'address' => $value['address'],
                'realEstateRegistration' => $value['realEstateRegistration'],
                'typeEstate' => $value['typeEstate'],
                'isSharedElectricityMeter'=> $value['isSharedElectricityMeter'],
                'policyElectricity' => $value['policyElectricity'],
                'isSharedWaterMeter'=> $value['isSharedWaterMeter'],
                'policyWater' => $value['policyWater'],
                'isSharedGasMeter'=> $value['isSharedGasMeter'],
                'policyGas' => $value['policyGas'],
                'hasAdministration' => $value['hasAdministration'],
                'paymentInFavorOf' => $value['paymentInFavorOf'],
                'typeDni' => $value['typeDni'],
                'dni' => $value['dni'],
                'email' => $value['email'],
                'phone' => $value['phone'],
                'bankingEntity' => $value['bankingEntity'],
                'accountType' => $value['accountType'],
                'accountNumber' => $value['accountNumber'],
                'namesAdministrator' => $value['namesAdministrator'],
                'paymentDate' => $value['paymentDate'],
                'annotations'=> $value['annotations'],
                'user_id' => 1,
                'isActive' => $value['isActive']
            ]);
        }
    }
}
