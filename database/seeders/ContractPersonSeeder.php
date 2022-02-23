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
            $peopleCollect = collect($people);
            $peopleCollect->map(function ($item, $key) {
                $this->ContractPersonCreate($item);
            });
        }   
    }

    public function ContractPersonCreate($person){
        $contract = Contract::where('id', 1)->get();
        $typeParticipant = collect(['ARRENDATARIO', 'DEUDOR', 'USUFRUCTUARIO', 'COMODATARIO', 'PROPIETARIO','REPRESENTANTE LEGAL']);
        ContractPerson::create([
            'contract_id' => $contract[0]->id,
            'person_id' => $person->id,
            'typeParticipant' => $typeParticipant->random(),
            'typePerson' => 'NATURAL',
            'legalPersonOf' => '',
            'user_id' => 1,
            'isActive' => true
        ]);
    }
}
