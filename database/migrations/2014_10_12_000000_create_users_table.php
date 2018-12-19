<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender', 32);
            $table->enum('type', ['employee','admin']); //special purpose initial access
            $table->date('birthdate')->nullable();
            $table->enum('immigration_status', ['Citizen',
                                                   'Permanent Resident',
                                                   'Work Permit Holder',
                                                   'Dependant Pass Holder'])->nullable();

            $table->string('driving_license_number', 32)->nullable();
            $table->enum('employment_status', ['Full time Contract',
                                                   'Full time Internship',
                                                   'Full time Permanent',
                                                   'Part time Contract',
                                                   'Part time Internship',
                                                   'Part time Permanent']);
            
            $table->string('position_id')->nullable();
            $table->boolean('is_regular')->default(0)->nullable();
            $table->text('address_line_1')->nullable();
            $table->text('address_line_2')->nullable();

            $table->string('nationality_id', 32)->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('postal_zip_code', 16)->nullable();
            $table->string('home_phone_number', 32)->nullable();
            $table->string('work_phone_number', 32)->nullable();
            $table->string('mobile_phone_number', 32)->nullable();
            $table->string('email');
            $table->string('personal_email')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('supervisor_id')->nullable();
            $table->integer('manager_id')->nullable();
            //approver leave
            $table->integer('indirect_supervisor_id')->nullable();
            $table->integer('first_level_approver')->nullable();
            $table->integer('seond_level_approver')->nullable();
            $table->integer('third_level_approver')->nullable();
            $table->date('join_date')->nullable();


            $table->integer('sss_number')->nullable();
            $table->integer('pagibig_number')->nullable();
            $table->integer('philhealth_number')->nullable();
            $table->string('civil_status', 32)->nullable();
            $table->double('salary', 10, 2)->nullable();


            $table->date('expiration_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_expire_access')->default(0)->nullable();
            $table->string('password');
            $table->string('profile_picture')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
