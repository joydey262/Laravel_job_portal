<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [ 'id'=>2, 'name'=>'Employer', 'type'=>'employer', 'employer_id'=>2, 'mobile'=>'+8801000000000', 'email'=>'Employer@admin.com', 'password'=>'$2a$12$5PyGUME3hEjWN.xflS0LQOpIygYii.dyZ2Hq.SDwcgbpOiuJUjv6O', 'status'=>1 ],
        ];
        Admin::insert($adminRecords);
    }
}
