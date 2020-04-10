<?php

namespace App\BehavioralDesignPatterns\SpecificationDesignPattern;

class EmployeeIsEngineer implements EmployeeSpecification
{

    public function isSatisfiedBy(\StdClass $customer): bool
    {
        if($customer->department === "Engineering"){
            return true;
        }

        return false;
    }
}