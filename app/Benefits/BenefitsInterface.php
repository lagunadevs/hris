<?php 


namespace App\Benefits;

interface BenefitsInterface
{
    public function calculateSSS($basicSalary);

    public function calculatePagibig($basicSalary);

    public function calculatePHilHealth($basicSalary);

}