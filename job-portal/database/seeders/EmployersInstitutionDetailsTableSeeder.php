<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployersInstitutionDetail;

class EmployersInstitutionDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $employerRecords = [
            [ 'id'=>1, 'employer_id'=>'1', 'institution_name'=>'Electronics Store', 'institution_address'=>'Nirala', 'institution_city'=>'Khulna', 'institution_state'=>'Khulna', 'institution_country'=>'Bangladesh', 'institution_pincode'=>'1001', 'institution_mobile'=>'+8801000000000', 'institution_website'=>'google.com', 'institution_email'=>'employer@admin.com', 'address_proof'=>'Passport', 'address_proof_image'=>'test.jpg', 'institution_license_number'=>'1234'],
        ];
        EmployersInstitutionDetail::insert($employerRecords);
    }
}
