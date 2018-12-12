<?php

namespace App\Benefits;

use Illuminate\Database\Eloquent\Model;
	
class SSS implements BenefitsInterface
{
 	// model property on class instances
    protected $basicSalary;

    /**
 	* Calculate monthly tax
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
 	*/

 	public function calculateSSS($basicSalary)
    {       
        $sssAmount = 0;

        //monthly based salary
        if ($basicSalary < 1000) {
            $sssAmount = 0;
        } else  if ($basicSalary >= 1000 && $basicSalary <= 1249.99) {
            $sssAmount = 36.30;
        } else  if ($basicSalary >= 1250 && $basicSalary <= 1749.99) {
            $sssAmount = 54.50;
        } else  if ($basicSalary >= 1750 && $basicSalary <= 2249.99) {
            $sssAmount = 72.70;
        } else  if ($basicSalary >= 2250 && $basicSalary <= 2749.99) {
            $sssAmount = 90.80;
        } else  if ($basicSalary >= 2750 && $basicSalary <= 3249.99) {
            $sssAmount = 109;
        } else  if ($basicSalary >= 3250 && $basicSalary <= 3749.99) {
            $sssAmount = 127.20;
        } else  if ($basicSalary >= 3750 && $basicSalary <= 4249.99) {
            $sssAmount = 145.30;
        } else  if ($basicSalary >= 4250 && $basicSalary <= 4749.99) {
            $sssAmount = 163.50;
        } else  if ($basicSalary >= 4750 && $basicSalary <= 5249.99) {
            $sssAmount = 181.70;
        } else  if ($basicSalary >= 5250 && $basicSalary <= 5749.99) {
            $sssAmount = 199.80;
        } else  if ($basicSalary >= 5750 && $basicSalary <= 6249.99) {
            $sssAmount = 218;
        } else  if ($basicSalary >= 6250 && $basicSalary <= 6749.99) {
            $sssAmount = 236.20;
        } else  if ($basicSalary >= 6750 && $basicSalary <= 7249.99) {
            $sssAmount = 254.30;
        } else  if ($basicSalary >= 7250 && $basicSalary <= 7749.99) {
            $sssAmount = 272.50;
        } else  if ($basicSalary >= 7750 && $basicSalary <= 8249.99) {
            $sssAmount = 290.70;
        } else  if ($basicSalary >= 8250 && $basicSalary <= 8749.99) {
            $sssAmount = 308.80;
        } else  if ($basicSalary >= 8750 && $basicSalary <= 9249.99) {
            $sssAmount = 327;
        } else  if ($basicSalary >= 9250 && $basicSalary <= 9749.99) {
            $sssAmount = 345.20;
        } else  if ($basicSalary >= 9750 && $basicSalary <= 10249.99) {
            $sssAmount = 363.30;
        } else  if ($basicSalary >= 10250 && $basicSalary <= 10749.99) {
            $sssAmount = 363.30;
        } else  if ($basicSalary >= 10750 && $basicSalary <= 11249.99) {
            $sssAmount = 399.70;
        } else  if ($basicSalary >= 11250 && $basicSalary <= 11749.99) {
            $sssAmount = 417.80;
        } else  if ($basicSalary >= 11750 && $basicSalary <= 12249.99) {
            $sssAmount = 436;
        }  else  if ($basicSalary >= 12250 && $basicSalary <= 12749.99) {
            $sssAmount = 454.20;
        } else  if ($basicSalary >= 12750 && $basicSalary <= 13249.99) {
            $sssAmount = 472.30;
        } else  if ($basicSalary >= 13250 && $basicSalary <= 13749.99) {
            $sssAmount = 490.50;
        } else  if ($basicSalary >= 13750 && $basicSalary <= 14249.99) {
            $sssAmount = 508.70;
        } else  if ($basicSalary >= 14250 && $basicSalary <= 14749.99) {
            $sssAmount = 526.80;
        } else  if ($basicSalary >= 14750 && $basicSalary <= 15249.99) {
            $sssAmount = 545;
        } else  if ($basicSalary >= 15250 && $basicSalary <= 15749.99) {
            $sssAmount = 563.20;
        } else  if ($basicSalary >= 15750) {
            $sssAmount = 581.30;
        } 

        return number_format($sssAmount, 2);
    }
}

