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
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */
    public static function makeAccessHash() {
        $access_hash = sha1(mt_rand(00000000,99999999));
        return $access_hash;
    }
}
