<?php

class ArrayUtils
{
    /**
     * @param array $array
     *
     * @return mixed
     */
    public function mostRepeatedValue(array $array)
    {
        $counts = array_count_values($array);
        arsort($counts);

        return key($counts);
    }
}
