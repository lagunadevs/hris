<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $employees = $this->employee->where('type', 'employee')->get();
        
        if ($employees) {
            return $data = UserResource::collection($employees);
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
        //employeee personal details
        $newEmployee = new $this->employee;
        $newEmployee->employee_number = rand(123, 2310);
        $newEmployee->first_name = $request->first_name;
        $newEmployee->last_name = $request->last_name;
        $newEmployee->email = $request->email;
        $newEmployee->gender = $request->gender;
        $newEmployee->type = $request->type;
        $newEmployee->birthdate = $request->birthdate;
        $newEmployee->mobile_phone_number = $request->contact_number;
        $newEmployee->sss_number = $request->sss_number;
        $newEmployee->pagibig_number = $request->pagibig_number;
        $newEmployee->philhealth_number = $request->philhealth_number;
        $newEmployee->address_line_1 = $request->address_line_1;
        $newEmployee->civil_status = $request->civil_status;
        $newEmployee->nationality_id = $request->nationality_id;
        $newEmployee->position_id = $request->position_id;
        $newEmployee->salary = $request->salary;
        $newEmployee->supervisor_id = $request->supervisor_id;
        $newEmployee->manager_id = $request->manager_id;
        $newEmployee->company_id = $request->company_id;
        $newEmployee->department_id = $request->department_id;
        $newEmployee->password = $request->password ? $request->password : bcrypt('p@ssword');
        $newEmployee->save();


        //employee dependents

        //employee skills

        //employee addresses

        //employee emergency contact

        $data['message'] = 'Successfully saved new employee';

        return response()->json($data, 200);

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
    public function destroy($id)
    {
        //
    }
}
