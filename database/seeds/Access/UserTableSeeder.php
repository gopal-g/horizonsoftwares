<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder
 */
class UserTableSeeder extends Seeder {
	public function run() {
		if (env('DB_CONNECTION') == 'mysql') {
			DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		}

		if (env('DB_CONNECTION') == 'mysql') {
			DB::table(config('access.users_table'))->truncate();
		} elseif (env('DB_CONNECTION') == 'sqlite') {
			DB::statement('DELETE FROM ' . config('access.users_table'));
		} else {
			//For PostgreSQL or anything else
			DB::statement('TRUNCATE TABLE ' . config('access.users_table') . ' CASCADE');
		}

		//Add the master administrator, user id of 1
		$users = [
			[
				'first_name' => 'Patrick',
				'last_name' => 'Mutwiri',
				'email' => 'patwiri@gmail.com',
				'password' => md5('12345'),
				'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'confirmed' => true,
				'zip' => '+254',
				'phone' => '727542899',
				'bio' => 'Developer',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'first_name' => 'Horizon',
				'last_name' => 'Softwares',
				'email' => 'info@horizonsoftwares.co.ke',
				'password' => bcrypt('horizons'),
				'confirmation_code' => md5(uniqid(mt_rand(), true)),
				'confirmed' => true,
				'zip' => '+254',
				'phone' => '727542899',
				'bio' => 'we develop software',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		];

		DB::table(config('access.users_table'))->insert($users);

		if (env('DB_CONNECTION') == 'mysql') {
			DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		}
	}
}