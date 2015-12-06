<?php

class MostRepeatedValueTest extends \PHPUnit_Framework_TestCase
{

    public function testIfItReturnMostRepeatedValueInIntegersArray()
    {
        $array = [1, 3, 4, 5, 1, 3, 1, 7];
        $utils = new ArrayUtils();
        $mostRepeatedValue = $utils->mostRepeatedValue($array);

        $this->assertEquals(1, $mostRepeatedValue);
    }

    public function testIfItReturnMostRepeatedValueInFloatsArray()
    {
        $array = [0.33, 0.66, 0.99, 0.33, 0.71, 6.99];
        $utils = new ArrayUtils();
        $mostRepeatedValue = $utils->mostRepeatedValue($array);

        $this->assertEquals(0.33, $mostRepeatedValue);
    }

    public function testIfItReturnMostRepeatedValueInStringArray()
    {
        $array = ['Apple', 'Orange', 'Plum', 'Apple', 'Grape', 'Apple'];
        $utils = new ArrayUtils();
        $mostRepeatedValue = $utils->mostRepeatedValue($array);

        $this->assertEquals('Apple', $mostRepeatedValue);
    }

}