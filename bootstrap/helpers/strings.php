<?php

if(!function_exists('acronym')){

    function acronym( $string = '' )
    {
        $words = explode(' ', $string);
        if ( ! $words ) {
            return false;
        }
        $result = '';
        foreach ( $words as $word ) $result .= $word[0];
        return strtoupper( $result );
    }
}
