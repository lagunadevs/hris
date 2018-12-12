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

            $sss = $this->benefitsInterface->calculateSSS($basicSalary);
            $pagibig = $this->benefitsInterface->calculatePagibig($basicSalary);
            $philHealth = $this->benefitsInterface->calculatePHilHealth($basicSalary);

            //less all contributions before calculate tax
            $salaryLessContributions = $basicSalary - ($sss + $pagibig + $philHealth);

            $tax = $this->taxInterface->taxPh($salaryLessContributions);


            //half salary 

            $salaryLessTaxContributions = $salaryLessContributions - $tax;
        }

        return response()->json(
            [
                'salary' => $basicSalary,
                'salary_month' => number_format($salaryLessTaxContributions, 2),
                'half_salary_month' => number_format($salaryLessTaxContributions / 2, 2),
                'income_tax' => number_format($tax, 2),
                'contributions_monthly' => [
                    'sss' => $sss,
                    'pagibig' => $pagibig,
                    'philhealth' => $philHealth,
                ],
                'contributions_half_month' => [
                    'half_month_sss' => $sss / 2,
                    'half_month_pagibig' => $pagibig / 2,
                    'half_month_philhealth' => $philHealth / 2,
                ],

            ], 200);

    }
}
