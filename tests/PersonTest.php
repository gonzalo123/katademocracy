<?php

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function testPersonCreation()
    {
        $person = new Person("33987439A", "M");

        $this->assertEquals("M", $person->getGender());
    }

    public function testWrongPerson()
    {
        $this->setExpectedException("Exception", "Not valid gender");
        $person = new Person("33987439A", "X");
    }
}