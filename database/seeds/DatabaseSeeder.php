<?php

use App\OrderLineItem;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(seed_product_table::class);

        $this->call(seed_product_table_shristi::class);

        $this->call(seed_product_table_erik::class);

        $this->call(seed_product_table_andrew::class);

        $this->call(seed_user_table::class);

        $this->call(seed_category_table::class);

        $this->call(seed_product_categories_table_pournima::class);

        $this->call(seed_product_images_table_pournima::class);

        $this->call(seed_product_categories_table_erik::class);

        $this->call(seed_product_images_table_erik::class);

        $this->call(seed_product_categories_table_aman::class);

        $this->call(seed_product_images_table_aman::class);

        $this->call(seed_product_categoies_table_shristi::class);

        $this->call(seed_product_images_table_shristi::class);

        $this->call(seed_province_table::class);

        $this->call(seed_users_address_table::class);

        $this->call(seed_taxation_table::class);

        $this->call(seed_carrier_table::class);

        $this->call(seed_offers_table_pournima::class);

        $this->call(seed_order_table::class);

        factory(App\Order::class, 10)->create()->each(function ($order) {
            factory(App\OrderLineItem::class, 2)
                ->create(['order_id' => $order->id,
                        'created_at' => $order->order_date]);

            factory(App\Transaction::class, 1)
                ->create(['order_id' => $order->id, 
                        'transactionDate' => $order->order_date, 
                        'created_at' => $order->order_date]);
        });;
    }
}
