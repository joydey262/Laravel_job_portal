<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployersBankingDetail;

class EmployersBankingDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employerBankingRecords = [
            [ 'id'=>1, 'employer_id'=>'1', 'account_holder_name'=>'Employer', 'survive_provider_name'=>'Janata Bank', 'account_number'=>'1001', 'swift_code'=>'1234'],
        ];
        EmployersBankingDetail::insert($employerBankingRecords);
    }
}
