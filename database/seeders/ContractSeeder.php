<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/contracts.json");
        $contracts = json_decode($data, true);
        foreach ($contracts as $value) {
            Contract::create([
                'asegurable' => $value['asegurable'],
                'domus' => $value['domus'],
                'cannonLease' => $value['cannonLease'],
                'adminValue' => $value['adminValue'],
                'typeContract' => $value['typeContract'],
                'contractDuration' => $value['contractDuration'],
                'increment' => $value['increment'],
                'contractRights' => $value['contractRights'],
                'deliveryDate' => Carbon::createFromFormat('d/m/Y',$value['deliveryDate'])->format('Y/m/d'),
                'gracePeriod' => $value['gracePeriod'],
                'clause' => $value['clause'],
                'commissionPercentage' => $value['commissionPercentage'],
                'marketingPercentage' => $value['marketingPercentage'],
                'observationsCommissionAndMarketing' => $value['observationsCommissionAndMarketing'],
                'user_id' => 1,
                'isActive' => $value['isActive']
            ]);
        }
    }
}
