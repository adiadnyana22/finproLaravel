<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::create([
            'order_id' => 1,
            'product_id' => 3,
            'quantity' => 5
        ]);

        OrderDetail::create([
            'order_id' => 1,
            'product_id' => 2,
            'quantity' => 11
        ]);

        OrderDetail::create([
            'order_id' => 2,
            'product_id' => 1,
            'quantity' => 1
        ]);
    }
}
