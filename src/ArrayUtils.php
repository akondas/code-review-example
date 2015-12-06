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
        $counts = [];
        foreach ($array as $item) {
            if (!isset($counts[$item])) {
                $counts[$item] = 1;
            } else {
                ++$counts[$item];
            }
        }

        $mostRepeatedCount = 0;
        $mostRepeated = null;
        foreach ($counts as $key => $count) {
            if ($count > $mostRepeatedCount) {
                $mostRepeatedCount = $count;
                $mostRepeated = $key;
            }
        }

        return $mostRepeated;
    }
}
