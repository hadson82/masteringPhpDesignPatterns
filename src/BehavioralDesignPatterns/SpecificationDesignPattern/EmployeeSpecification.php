<?php
namespace App\BehavioralDesignPatterns\SpecificationDesignPattern;



interface EmployeeSpecification
{
    public function isSatisfiedBy(\StdClass $customer): bool;
}