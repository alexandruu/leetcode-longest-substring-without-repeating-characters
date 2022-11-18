<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        if (empty($s)) {
            return 0;
        }
        
        $length = 0;
        $string = null;
        for ($i = 0; $i < strlen($s); $i++) {
            $position = strpos($string, $s[$i]);
            if ($position !== false) {
                $string = substr($string, $position + 1);
            }
            
            $string .= $s[$i];
            
            if ($length < strlen($string)) {
                $length = strlen($string);
            }
        }
        
        return $length;
    }
}
