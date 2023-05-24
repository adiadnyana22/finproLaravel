<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'order_date' => '2022-12-25',
            'total_price' => 1754000,
            'user_id' => 2
        ]);

        Order::create([
            'order_date' => '2022-12-28',
            'total_price' => 129000,
            'user_id' => 2
        ]);
    }
}
