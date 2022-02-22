<?php

namespace Database\Seeders;

use App\Models\{Contract, ContractEstate, Estate};
use Illuminate\Database\Seeder;

class ContractEstateSeeder extends Seeder
{
    public function run()
    {
        for ($i=1; $i <= 5; $i++) { 
            $contract = Contract::where('id', $i)->get();
            $estate = Estate::where('id', $i)->get();
            ContractEstate::create([
                'contract_id' => $contract[0]->id,
                'estate_id' => $estate[0]->id,
                'user_id' => 1,
                'isActive' => true
            ]);         
        }
        
            
    }
}
