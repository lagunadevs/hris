<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deductions\Tax;
use App\Deductions\TaxInterface;

class TaxCalculator extends Controller
{

    public function __construct(TaxInterface $taxInterface) {
        $this->taxInterface = $taxInterface;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculateTax($country, $basicSalary)
    {
        
        //get 
        if ($country = 'PH') {
            $tax = $this->taxInterface->taxPh($basicSalary);
        }

        return response()->json(
            [
                'salary' => $basicSalary,
                'income_tax' => $tax,
                'contributions' => null
            ], 200);

    }
}
