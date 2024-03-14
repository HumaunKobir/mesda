<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentRecords=[
            ['id'=>1,'name'=>'Humaun','email'=> 'humaun@gmail.com','phone'=> '902373897','amount'=>1000,'upozilla'=> 'Meherpur','village'=> 'meherpur','post_office'=>'meherpur','status'=>'panding','transection_id'=>'65f1c2e1a197','currency'=>'BD'],
           
            ];
            Payment::insert($paymentRecords);
    }
}
