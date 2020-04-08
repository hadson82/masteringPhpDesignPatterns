<?php

use App\PrototypePattern\Student;

require_once __DIR__ . "/../../vendor/autoload.php";


$prototypeStudent = new Student();
$prototypeStudent->setName('Dave');
$prototypeStudent->setYear(2);
$prototypeStudent->setGrade('A*');

var_dump($prototypeStudent);
echo "<br />";
echo "<br />";

$theLesserChild = clone $prototypeStudent;
$theLesserChild->setName('Mike');
$theLesserChild->setGrade('B');

var_dump($theLesserChild);
echo "<br />";
echo "<br />";

$theChildProdigy = clone $prototypeStudent;
$theChildProdigy->setName('Bob');
$theChildProdigy->setYear(3);
$theChildProdigy->setGrade('A');


$theChildProdigy->danceSkills = "Outstanding";
$theChildProdigy->dance = function (string $style) {
    return "Dancing $style style.";
};

var_dump($theChildProdigy);
var_dump($theChildProdigy->dance->__invoke('Pogo'));