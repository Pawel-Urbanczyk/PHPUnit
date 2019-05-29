<?php

namespace AppBundle\Factory;

use AppBundle\Entity\Dinosaur;

class DinosaurFactory
{

    public function growVelociraptor(int $length): Dinosaur
    {

        return $this->createDinosaur('Velociraptor', true, $length);
    }

    private function createDinosaur(string $genus, bool $isCarnivourus, int $length): Dinosaur
    {
        $dinosaur = new Dinosaur($genus,$isCarnivourus);

        $dinosaur->setLength($length);

        return $dinosaur;
    }


//    private function getLengthFromSpecification(string $specification): int
//    {
//        $availableLengths = [
//            'huge' => ['min' => Dinosaur::HUGE, 'max' => 100],
//            'omg' => ['min' => Dinosaur::HUGE, 'max' => 100],
//            '😱' => ['min' => Dinosaur::HUGE, 'max' => 100],
//            'large' => ['min' => Dinosaur::LARGE, 'max' => Dinosaur::HUGE - 1],
//        ];
//        $minLength = 1;
//        $maxLength = Dinosaur::LARGE - 1;
//
//        foreach (explode(' ', $specification) as $keyword) {
//            $keyword = strtolower($keyword);
//
//            if (array_key_exists($keyword, $availableLengths)) {
//                $minLength = $availableLengths[$keyword]['min'];
//                $maxLength = $availableLengths[$keyword]['max'];
//
//                break;
//            }
//        }
//
//        return random_int($minLength, $maxLength);
//    }
}
