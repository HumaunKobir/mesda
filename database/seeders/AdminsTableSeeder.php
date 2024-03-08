<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords=[
            ['id'=>1,'name'=>'Mesda','type'=>'admin','mobile'=>'01971018613','email'=>'mesda@gmail.com','password'=>'$2y$10$pvd9G4Ro5MQgxnSU7NT3yepfEsqLY37KSHkOV7au6.zLW9Ckro2cS','image'=>'','status'=>1],
        ];
        Admin::insert($adminRecords);
    }
}
