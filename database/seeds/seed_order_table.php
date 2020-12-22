<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_order_table extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('orders')->insert([
			'orderNumber' => 'INC1',
			'user_id' => 1,
			'status' => 'Complete',
			'order_date' => '2020-12-05',
			'offer_id' => 1,
			'province_id' => 1,
			'email' => 'erik@gmail.com',
			'totalGST' => 100,
			'totalPST' => 140,
			'totalHST' => 0,
			'totaltax' => 240,
			'totalAmount' => 2240,
			'billing_address' => '123 Street Winnipeg, MB R31R1A',
			'shipping_address' => '123 Street Winnipeg, MB R31R1A',
			'pointsApplied' => 0,
		]);

		DB::table('order_line_items')->insert([
			'order_id' => 1,
			'product_id' => 1,
			'unitprice' => 2000,
			'quantity' => 1,
		]);

		DB::table('transactions')->insert([
			'order_id' => 1,
			'transactionDate' => '2020-12-08 16:34:48',
			'amount' => 2005.5,
			'status' => 'S',
			'response' => '{"ref_number":"2","result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2020-13425","errors":[],"trans_id":13425}}',
		]);
	}
}
