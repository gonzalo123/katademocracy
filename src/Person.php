<?php

class Person
{
    private $dni;
    private $gender;

    const M = 'M';
    const F = 'F';

    function __construct($dni, $gender)
    {
        $this->dni = $dni;
        if (!in_array(strtoupper($gender), [self::M, self::F])) {
            throw new \Exception("Not valid gender");
        }
        $this->gender = $gender == self::M ? self::M : self::F;
    }

    public function getGender()
    {
        return $this->gender;
    }
}