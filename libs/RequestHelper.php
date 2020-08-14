<?php

class RequestHelper {

    public static function purify($var, $extraCharToRemove = []) {
        $pattern = array_merge(['\'', '"', ',', ';', '<', '>'], $extraCharToRemove);
        $var = str_replace($pattern, '', $var);
        $var = filter_var($var, FILTER_SANITIZE_STRING);
        return $var;
    }

    public static function checkRecaptcha($response){    	
    	// Make and decode POST request:
	    $recaptcha = file_get_contents(RECAPTCHA_VERIFY_URL . '?secret=' . RECAPTCHA_SECRET_KEY . '&response=' . $response);
	    $recaptcha = json_decode($recaptcha);
	    //echo "<pre>";print_r($recaptcha);
	    //exit;

	    // Take action based on the score returned:
	    if ($recaptcha->score >= 0.5) {
	        // Verified - send email
	        return true;
	    } else {
	        // Not verified - show form error
	        return false;
	    }
    }

}
