<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str as Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();

		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'slug' => 'administador',
			'name' => 'Administador',
			'permissions' => array('admin' => 1),
		]);

		$customerRole = Sentinel::getRoleRepository()->createModel()->create([
			'slug' => 'customer',
			'name' => 'Cliente',
			'permissions' => array('custo' => 2),
		]);

		$admins = [
			Sentinel::registerAndActivate([
				'first_name' 	=> 'Enrique',
				'last_name' 	=> 'Rodriguez',
				'email' 		=> 'enrique.rv0704@gmail.com',
				'password' 		=> 'asdasd',
				'role_id' 		=> 1,
			])
		];

		foreach($admins as $admin) {
			$admin->roles()->attach($adminRole);
		}


		$this->command->info('Admin User created with username *@fabricadesoluciones.com and password asdasd');
    }
}
