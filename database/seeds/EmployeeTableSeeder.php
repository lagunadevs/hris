<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
        	$user = new App\User;
            $user->employee_number = $faker->randomNumber(6);
            $user->first_name = $faker->firstName;
            $user->last_name = $faker->lastName;
            $user->type = 'Employee';
            $user->gender = 'Male';
            $user->email = $faker->unique()->email;
            $user->personal_email = $faker->unique()->email;
            $user->birthdate = $faker->dateTimeThisCentury->format('Y-m-d');
            $user->immigration_status = 'Citizen';
            $user->driving_license_number = $faker->randomNumber(7);
            $user->employment_status = 'Full time Contract';
            $user->position_id = $faker->randomNumber(1);
            $user->is_regular = 0;
            $user->address_line_1 = $faker->address;
            $user->address_line_2 = $faker->address;
            $user->nationality_id = $faker->randomNumber(2);
            $user->nationality_id = $faker->randomNumber(2);
            $user->country_id = $faker->randomNumber(2);
            $user->province_id = $faker->randomNumber(2);
            $user->city_id = $faker->randomNumber(2);
            $user->postal_zip_code = $faker->randomNumber(4);
            $user->home_phone_number = $faker->phoneNumber;
            $user->work_phone_number = $faker->phoneNumber;
            $user->mobile_phone_number = $faker->phoneNumber;
            $user->company_id = $faker->randomNumber(2);
            $user->department_id = $faker->randomNumber(4);
            $user->supervisor_id = $faker->randomNumber(2);
            $user->manager_id = $faker->randomNumber(2);
            $user->indirect_supervisor_id = $faker->randomNumber(2);
            $user->first_level_approver = $faker->randomNumber(2);
            $user->seond_level_approver = $faker->randomNumber(2);
            $user->join_date = $faker->dateTime();
            $user->expiration_date = $faker->dateTime();
            $user->email_verified_at = $faker->dateTime();
            $user->created_at = $faker->dateTime();
            $user->sss_number = $faker->randomNumber(6);
            $user->pagibig_number = $faker->randomNumber(6);
            $user->philhealth_number = $faker->randomNumber(6);
            $user->civil_status = 'Single';
            $user->salary = $faker->randomNumber(5);
            $user->password = bcrypt('password');
            $user->save();

            $user->assignRole('Employee');
        }
    }
}
