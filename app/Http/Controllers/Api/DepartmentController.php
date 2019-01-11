<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Http\Resources\DepartmentResource;

class DepartmentController extends Controller
{
    public function index()
    {
        return DepartmentResource::collection(Department::paginate(20));
    }

    public function store(Request $request)
    {
    	return $this->storeUpdate();
    }

    public function show(Request $request, $id)
    {
        return Department::find($id);
    }

    public function update(Request $request, $id)
    {
        return $this->storeUpdate($id);
    }

    public function destroy($id)
    {
        Department::find($id)->delete();
    }

    public function storeUpdate($id = null)
    {
        if ($id == null) {
            $department = new Department;
        } else {
            $department = Department::find($id);
        }

        $department->name = request('name');
        $department->save();

        return response()->json(null, 201);
    }
}
