<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\UserResource;
use App\User;

class EmployeeController extends Controller
{   

    public function __construct(User $employee)
    {
        $this->employee = $employee;
    }
    /**
     * Display a listing of the employees.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employee->paginate(2);
        
        if ($employees) {

            return $data = EmployeeResource::collection($employees);

        } else {

            $data['message'] = 'No Records found.';

            return response()->json($data);

        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        $newEmployee = new $this->employee;
        $newEmployee->name = request('first_name'). ' ' . request('last_name');
        $newEmployee->employee_number = request('employee_number');
        $newEmployee->first_name = request('first_name');
        $newEmployee->last_name = request('last_name');
        $newEmployee->email = request('email');
        $newEmployee->password = request('password');
        $newEmployee->gender = request('gender');
        $newEmployee->civil_status = request('civil_status');
        $newEmployee->birthdate = request('birthdate');
        $newEmployee->address_line_1 = request('address_line_1');
        $newEmployee->address_line_2 = request('address_line_2');
        $newEmployee->country_id = request('country_id');
        $newEmployee->province_id = request('province_id');
        $newEmployee->city_id = request('city_id');
        $newEmployee->immigration_status = 'Citizen';
        $newEmployee->postal_zip_code = request('zipcode');
        $newEmployee->work_phone_number = request('work_phone_number');
        $newEmployee->home_phone_number = request('home_phone_number');
        $newEmployee->mobile_phone_number = request('mobile_phone_number');
        $newEmployee->personal_email = request('personal_email');
        $newEmployee->company_id = request('company_id');
        $newEmployee->department_id = request('department_id');
        $newEmployee->position_id = request('position_id');
        $newEmployee->supervisor_id = request('supervisor_id');
        $newEmployee->manager_id =  request('manager_id');
        $newEmployee->first_level_approver = request('first_level_approver');
        $newEmployee->seond_level_approver = request('seond_level_approver');
        $newEmployee->third_level_approver = request('third_level_approver');
        $newEmployee->salary = request('salary');
        $newEmployee->sss_number = request('sss');
        $newEmployee->pagibig_number = request('pagibig');
        $newEmployee->driving_license_number = request('driving_license_number');
        $newEmployee->philhealth_number = request('philhealth');
        $newEmployee->password = bcrypt(request('password'));

        if ($newEmployee->save()) {

            $newEmployee->assignRole('Employee');
            
            $statusCode = 201;

            $data['message'] = 'Successfully added new employee.';

        } else {

            $statusCode = 400;

            $data['message'] = 'Something went wrong.';

        }

        return response()->json($data, $statusCode);

    }

    public function edit($id)
    {
       // return $id;
        $checkExist = $this->employee->find($id);

        if ($checkExist) {

            $statusCode = 201;

            $data['message'] = 'Employee details.';

            $data['employee'] = $checkExist;

        } else {

            $data['message'] = 'Employee not found.';

            $statusCode = 404;

        }

        return response()->json($data, $statusCode);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $employee = User::find($id);

        $employee->delete();

        return response()->json($employee);

    }
}
