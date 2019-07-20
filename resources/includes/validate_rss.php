<?php

function validateFeed( $feedURL )
{

    $sValidator = 'http://feedvalidator.org/check.cgi?url=';
    
    if( $sValidationResponse = @file_get_contents($sValidator . urlencode($feedURL)) ){
        if( stristr( $sValidationResponse , 'This is a valid RSS feed' ) !== false ){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

?>