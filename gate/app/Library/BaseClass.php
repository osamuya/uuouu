<?php
// app/Library/BaseClass.php
namespace app\Library;

class BaseClass
{
    public static function hello() {
        return 'BaseClass test hello()!';
    }

    /*
    |--------------------------------------------------------------------------
    | Method makeAccessHash
    |--------------------------------------------------------------------------
    | make normal hash for anyway to use without password hash.
    | * @access public
    | * @param nothing
    | * @return $string
    | * @throws
    | * @todo
    */
    public static function makeAccessHash() {
        $access_hash = sha1(mt_rand(00000000,99999999));
        return $access_hash;
    }

    /*
    |--------------------------------------------------------------------------
    | Method makeEncrypt
    |--------------------------------------------------------------------------
    | * @access public
    | * @param $strings
    | * @return $string
    | * @throws
    | * @todo
    |
    */
    public static function makeEncrypt($password) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        return $password_hash;
    }
}
