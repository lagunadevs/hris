<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxCalculator extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculateTax($country, $basicSalary)
    {

        //get 
        if ($country = 'PH') {
           $tax =  $this->taxPh($basicSalary);
        }

        return response()->json(
            [
                'salary' => $basicSalary,
                'income_tax' => $tax,
                'contributions' => 'test123'
            ], 200);

        return $tax;

    }

    /**
     * Calculate monthly tax
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function taxPh($basicSalary)
    {       

        $taxAmount = 0;

        //monthly based salary
        if ($basicSalary <= 20833.33) {
            $taxAmount = 0;
        } else  if ($basicSalary >= 20833.34 && $basicSalary <= 33332) {
            //This means we subtract P20,833.33 and multiply the difference by 20%.
            $taxAmount = ($basicSalary - 20833.33) * 0.20;
        } else  if ($basicSalary >= 33333 && $basicSalary <= 66666) {
            //This means we subtract P33333, multiply the difference by 25%, and add P2500.
            $taxAmount = (($basicSalary - 33333) * 0.25) +  2500;
        } else  if ($basicSalary >= 66667.67 && $basicSalary <= 166666) {
            //This means we subtract P66,666.67, multiply the difference by 30%, and add P10,833.33.
            $taxAmount = (($basicSalary - 66666.67) * 0.30) + 10833.33;
        } else  if ($basicSalary >= 166667 && $basicSalary <= 666666) {
            //This means we subtract P166,667, multiply the difference by 32%, and add P40,833.33.
            $taxAmount = (($basicSalary - 166667) * 0.32) + 40833.33;
        } else  if ($basicSalary >= 666667) {
            //This means we subtract P66,666.67, multiply the difference by 32%, and add P200,833.33.
            $taxAmount = (($basicSalary - 666667) * 0.35) + 200833.33;
        }

        return number_format($taxAmount, 2);
    }

}
