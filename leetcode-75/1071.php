<?php

class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings( string $p_str_1, string $p_str_2 ) {
        $v_size_1 = (int) strlen( $p_str_1 );
        $v_size_2 = (int) strlen( $p_str_2 );
        if ( $v_size_1 <= $v_size_2 ) {
            $v_min_str = $p_str_1;
            $v_min_size = $v_size_1;
        } else {
            $v_min_str = $p_str_2;
            $v_min_size = $v_size_2;
        }
        $v_left = (int) 0;
        $v_right = (int) $v_min_size - 1;
        $v_find = $this->t_find( $v_min_str, $p_str_1, $p_str_2, $v_size_1, $v_size_2, $v_left, $v_right );
        while ( $v_left <= $v_right && $v_find === false ) {
            $changed = false;
            if ( $p_str_1[ $v_left ] !== $p_str_2[ $v_right ] ) {
                $v_left++;
                $changed = true;
            }
            if ( $p_str_1[ $v_right ] !== $p_str_2[ $v_right ] ) { 
                $v_right--;
                $changed = true;
            }
            if ( $changed === false) {
                $v_left++;
            }
            $v_find = $this->t_find( $v_min_str, $p_str_1, $p_str_2, $v_size_1, $v_size_2, $v_left, $v_right );            
        }
        if ( $v_find ) return $v_find;
        return '';
    }

    function t_find( string $p_min_str, string $p_str_1, string $p_str_2, int $p_size_1, int $p_size_2, int $p_left, int $p_right ) {
        if ( $p_left > $p_right ) return false;
        $v_share_size = (int) ( $p_right - $p_left + 1 );
        if ( $v_share_size === 0 ) return false;
        if ( $p_size_1 % $v_share_size !== 0 || $p_size_2 % $v_share_size !== 0 ) return false;
        $v_share = (string) substr( $p_min_str, $p_left, $v_share_size );
        $v_pad_1 = (string) str_pad( "", $p_size_1, $v_share );
        $v_pad_2 = (string) str_pad( "", $p_size_2, $v_share );
        if ( $v_pad_1 !== $p_str_1 || $v_pad_2 !== $p_str_2 ) return false;
        return $v_share;
    }
}

?>
