<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'food_id' => 1,
                'quantity' => 2,
                'total' => 20000,
                'status' => 'DELIVERED',
                'payment_url' => 'null',
                'created_at' => NULL,
                'updated_at' => '2022-03-03 16:49:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'food_id' => 3,
                'quantity' => 2,
                'total' => 100000,
                'status' => 'WAITING',
                'payment_url' => 'null',
                'created_at' => NULL,
                'updated_at' => '2022-03-03 17:02:10',
                'deleted_at' => '2022-03-03 17:02:10',
            ),
        ));
        
        
    }
}