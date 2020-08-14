<?php

class PasswordHelper {
	/**
	 * This will generate password hash from plain password
	 * @param  [type] $plainPassword [description]
	 * @return [type]                [description]
	 */
    public static function generate($plainPassword) {
        return password_hash($plainPassword, PASSWORD_DEFAULT, ['cost' => 10]);        
    }

/**
 * Verify password with hashed password
 * @param  [type] $plainPassword [description]
 * @param  [type] $hash          [description]
 * @return [type]                [description]
 */
    public static function verify($plainPassword, $hash) {
        return password_verify($plainPassword, $hash);
        
    }

    /**
     * This will generate random password
     * @param [type] $chars [description]
     */
    public static function generateRandomPassword($length = 15) {
  		$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
            '#0123456789@^';

  $str = '';
  $max = strlen($chars) - 1;

  for ($i=0; $i < $length; $i++)
    $str .= $chars[mt_rand(0, $max)];

  return $str;
	}

}
