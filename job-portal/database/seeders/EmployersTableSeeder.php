<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employer;

class EmployersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employerRecords = [
            [ 'id'=>1, 'name'=>'Employer', 'address'=>'Jahidur Rahaman Sorok', 'city'=>'Khulna', 'state'=>'Khulna', 'country'=>'Bangladesh', 'mobile'=>'+8801000000000', 'email'=>'employer@admin.com', 'image'=>'', 'status'=>0 ],
        ];
        Employer::insert($employerRecords);
    }
}
