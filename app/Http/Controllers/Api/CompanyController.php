<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\Company;
use App\User;

class CompanyController extends Controller
{	


	

    public function get()
    {

    	$companies = Company::all();

		return response()->json($companies);  	

    }

    public function store(Request $request)
    {

    	$request->validate([
	        'company_email' => 'required|unique:companies|max:255|email',
	        'name' => 'required',
	        'url' => 'required|unique:companies|max:255',
	        'password' => 'required|min:6',
	        'phone_number' => '',
	        'company_name' => 'required',
	        'company_address' => '',
	    ]);

	    // if ($validatedData->fails()) {
     //        return response()->json(['errors' => $validatedData->errors(), 'status' => 200]);
     //    }
        
    	$company = new Company;
		$company->contact_person = request('name');
		$company->url = request('url');
		$company->company_email = request('company_email');
		$company->phone_number = request('phone_number');
		$company->company_type = false;
		$company->name = request('company_name');
		$company->address = request('company_address');
		$company->save();
		$company->password = request('password');
		$data['company'] = $company;
		$data['message'] = 'Success';

		$this->register($company);
		return response()->json($company, 200);

    }

    public function register($company)
    {

    	$user = new User;
    	$user->name = $company->contact_person;
    	$user->email = $company->company_email;
    	$user->password =bcrypt($company->password);
    	$user->company_id = $company->id;
    	$user->save();
    	return $this->sendVerification($user);

    }

    public function sendVerification($user)
    {

        $email = $user->email;

        $url = url('test',$user->id);

        Mail::send(('emails.verify'), ['user' => $user, 'url' => $url], function ($message) use ($email) {
           $message->to($email);
           $message->subject("SeaPayroll Verification");
           $message->from(env('MAIL_FROM_EMAIL'));
        });

    }

    public function edit()
    {

    	$companies = Company::all();

		return response()->json($companies);  	

    }

    public function delete()
    {

    	$companies = Company::find($id);

		$companies->delete();

		return response()->json($companies);  	

    }
}
