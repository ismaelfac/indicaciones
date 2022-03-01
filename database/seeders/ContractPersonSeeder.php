<?php

namespace Database\Seeders;

use App\Models\{ ContractPerson};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ContractPersonSeeder extends Seeder
{
    public function run()
    {
        $user_id = Auth::id();
        $data = file_get_contents("database/Queries/contractPerson.json");
        $contractPerson = json_decode($data, true);
        foreach ($contractPerson as $value) {
            ContractPerson::create([
                'contract_id' => $value['contract_id'],
                'person_id' => $value['person_id'],
                'typeParticipant' => $value['typeParticipant'],
                'typePerson' => $value['typePerson'],
                'legalPersonOf' => $value['legalPersonOf'],
                'rentSplitPercentage' => $value['rentSplitPercentage'],
                'isIVAResponsible' => $value['isIVAResponsible'],
                'isIntegralProtection' => $value['isIntegralProtection'],
                'itIsGuaranteed' => $value['itIsGuaranteed'],
                'bankingEntity' => $value['bankingEntity'],
                'accountType' => $value['accountType'],
                'accountNumber' => $value['accountNumber'],
                'isConsignmentPayment' => $value['isConsignmentPayment'],
                'user_id' => 1,
                'isActive' => $value['isActive']
            ]);
        }   
    }
}
