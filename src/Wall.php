<?php
declare(strict_types = 1);

namespace App;

class Wall
{

    public function __construct(private int $totalLength)
    {
    }

    public function totalLength(): int
    {
        return $this->totalLength;
    }

    public function getOneCombinationElement(int $elementSize): int|float
    {
        return $this->totalLength / $elementSize;
    }

    public function calculate(array $elements)
    {
        $result = [];

        foreach ($elements as $size) {
            if (is_int($this->getOneCombinationElement($size))) {
                $result[] = [$this->getOneCombinationElement($size) => $size];
            } else {
                $result[] = [$this->getCombinationWithMultipleElements($size, $elements) => $size];
            }
        }

        print_r($result);
        return $result;
    }

    private function getCombinationWithMultipleElements($size, $elements)
    {
        $elementsLength = 0;
        $compteur = 0;
        $i = 0;

        while ($elementsLength <= $this->totalLength) {
            $elementsLength += $size;

            // if (is_int($this->getTwoCombinationElements($elements[$i], $elementsLength))) {
            //     $elementsLength += $this->getTwoCombinationElements($elements[$i], $elementsLength) * $elements[$i];
            // }
            
            $compteur++;
            $i++;
        }
    }

    public function getTwoCombinationElements(int $elementSize, int $elementsLength): int|float
    {
        return $elementsLength / $elementSize;
    }

    public function calculateBis(array $elements)
    {
        $result = [];

        foreach($elements => $size)
        {
            //50
            while($lengthWall <= 250)
            {
                $sumSizeElement += $size // 50

                //5 itérations pour arriver à 250

                //ajouter une condition
                if(is_int($this->getOneCombinationElement($sumSizeElement))){

                }
            }
        }
    

    
        return $result;
    }
}