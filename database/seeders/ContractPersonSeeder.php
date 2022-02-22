<?php

namespace Database\Seeders;

use App\Models\{ Contract, ContractPerson, Person};
use Illuminate\Database\Seeder;

class ContractPersonSeeder extends Seeder
{
    public function run()
    {
        $people = Person::all();
        for ($i=1; $i <= 2 ; $i++) { 
            $contract = Contract::where('id', $i)->get();
            foreach ($people as $person){
                ContractPerson::create([
                    'contract_id' => $contract[0]->id,
                    'person_id' => $person->id,
                    'typeParticipant' => ''
                ]);
            }
        }   
    }
}
