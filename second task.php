<?php

function longestSubstring($input)
{
    $longestSoFar = 0;
    $currentCounter = 0;
    {
        $arrString = str_split($input);
        for ($i = 0; $i < count($arrString)-1; $i++)
        {
            $currentCounter++;
            if ($arrString[$i] == $arrString[$i+1])
            {
                if ($currentCounter > $longestSoFar)
                {
                    $longestSoFar = $currentCounter;
                    $currentCounter = 0;
                } else
                {
                    $currentCounter = 0;
                }
            }
        }
    }
    return $longestSoFar;
}

echo longestSubstring('abrkaabcdefghijjxxx');