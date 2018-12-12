<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deductions\TaxInterface;
use App\Benefits\BenefitsInterface;

class TaxCalculator extends Controller
{

    public function __construct(TaxInterface $taxInterface, BenefitsInterface $benefitsInterface) {
        $this->taxInterface = $taxInterface;
        $this->benefitsInterface = $benefitsInterface;
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
            $sss = $this->benefitsInterface->calculateSSS($basicSalary);
        }

        return response()->json(
            [
                'salary' => $basicSalary,
                'income_tax' => $tax,
                'contributions' => [
                    'sss' => $sss,
                    // 'pagibig' => $sss,
                    // 'philhealth' => $sss
                ]
            ], 200);

    }
}
