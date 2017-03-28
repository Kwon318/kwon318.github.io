<?php
/**
 * Created by IntelliJ IDEA.
 * User: 권영민
 * Date: 2017-03-27
 * Time: 오후 5:46
 */
define('G5_STRING_ENCRYPT_FUNCTION', 'sql_password');


function get_encrypt_string($str)
{
    if (defined('G5_STRING_ENCRYPT_FUNCTION') && G5_STRING_ENCRYPT_FUNCTION) {
        $encrypt = call_user_func(G5_STRING_ENCRYPT_FUNCTION, $str);
    } else {
        $encrypt = md5($str);
    }

    return $encrypt;
};
echo get_encrypt_string("123456");