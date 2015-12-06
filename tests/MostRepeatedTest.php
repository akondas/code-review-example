<?php

class MostRepeatedTest extends \PHPUnit_Framework_TestCase
{

    public function testIfItFoundMostRepeatedValueInIntegersArray()
    {
        $array = [1, 3, 4, 5, 1, 3, 1, 7];
        $utils = new ArrayUtils();
        $mostRepeatedValue = $utils->mostRepeatedValue($array);

        $this->assertEquals(1, $mostRepeatedValue);
    }

    public function testIfItFoundMostRepeatedValueInStringArray()
    {
        $array = ['Apple', 'Orange', 'Plum', 'Apple', 'Grape', 'Apple'];
        $utils = new ArrayUtils();
        $mostRepeatedValue = $utils->mostRepeatedValue($array);

        $this->assertEquals('Apple', $mostRepeatedValue);
    }

}