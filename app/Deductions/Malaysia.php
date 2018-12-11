<?php

namespace App\Deductions;

use Illuminate\Database\Eloquent\Model;

class Malaysia implements TaxInterface
{

 	// model property on class instances
    protected $basicSalary;


 	public function taxPh($basicSalary)
    {       
    	return 100;
    }
}

