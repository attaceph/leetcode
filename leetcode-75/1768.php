<?php

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($p_word_1, $p_word_2) {
        $v_array_1 = str_split( $p_word_1 );
        $v_array_2 = str_split( $p_word_2 );
        $v_size_1 = count( $v_array_1 );
        $v_size_2 = count( $v_array_2 );
        $v_size_max = max( $v_size_1, $v_size_2 );
        $v_result = [];
        for ( $i = 0; $i < $v_size_max; $i++ ) {
            if ( $i < $v_size_1 ) $v_result[] = $v_array_1[ $i ];
            if ( $i < $v_size_2 ) $v_result[] = $v_array_2[ $i ];
        }
        return "".join( $v_result );
    }
}

?>
