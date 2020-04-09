<?php


namespace App\StructuralDesignPatterns\FlyWeight;


class ShapeFactory
{
    private $shape = array();

    public function getCircle(string $colour)
    {
        $circle = 'Circle' . '_' . $colour;
        if (!isset($this->shapeMap[$circle])){
            echo "Creating a ".$colour." circle.";
            echo "<br />";
            $this->shapeMap[$circle] = new Circle($colour);
        }

        return $this->shapeMap[$circle];
    }
}