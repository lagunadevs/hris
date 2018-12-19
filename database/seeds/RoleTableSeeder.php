<?php

use Illuminate\Database\Seeder;
use MarkVilludo\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	//web guard
    	$roles = [
			['name' => 'Super Admin', 'created_at' => date('Y-m-d H:i:s')],
			['name' => 'Admin', 'created_at' => date('Y-m-d H:i:s')],
			['name' => 'Employee', 'created_at' => date('Y-m-d H:i:s')],
			['name' => 'HR', 'created_at' => date('Y-m-d H:i:s')]
    	];

		foreach ($roles as $role) {
			$checkIfExist = Role::where('name', $role['name'])
									  ->first();

			if (!$checkIfExist) {
				Role::insert($role);
			}
		}
    }
}
