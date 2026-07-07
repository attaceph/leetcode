<?php

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately( string $p_word_1, string $p_word_2) : string {
        $v_array_1 = (array) str_split( $p_word_1 );
        $v_array_2 = (array) str_split( $p_word_2 );
        $v_size_1 = (int) count( $v_array_1 );
        $v_size_2 = (int) count( $v_array_2 );
        $v_size_max = (int) max( $v_size_1, $v_size_2 );
        $v_result = (array) [];
        for ( $i = (int) 0; $i < $v_size_max; $i++ ) {
            if ( $i < $v_size_1 ) $v_result[] = $v_array_1[ $i ];
            if ( $i < $v_size_2 ) $v_result[] = $v_array_2[ $i ];
        }
        return (string) "".join( $v_result );
    }
}

?>
