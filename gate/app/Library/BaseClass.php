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

    /*
    |--------------------------------------------------------------------------
    | Method makeDatetime
    |--------------------------------------------------------------------------
    | * @access public
    | * @param STIRINGS $timestamp
    | * @return $timestamp
    | * @throws
    | * @todo
    |
    */
    public static function makeDatetime($timestamp=0) {
        // If there is no parameter, return current time

        // current time
        $datetime = date('Ymd_His');
        return $datetime;

    }

    /*
    |--------------------------------------------------------------------------
    | Method makeUniqeid
    |--------------------------------------------------------------------------
    | make uniqeid
    | * @access public
    | * @param STIRINGS $timestamp
    | * @return $timestamp
    | * @throws
    | * @todo
    |
    */
    public static function makeUniqeid($oiprefix="000") {

        $uniqeid_tmp = uniqid();
        // (example)5-94f5-3b53-8eda
        $uiprefix = substr($uniqeid_tmp,0,1);
        $ui1 = substr($uniqeid_tmp,1,4);
        $ui2 = substr($uniqeid_tmp,5,4);
        $ui3 = substr($uniqeid_tmp,9,4);
        $uniqeid = $oiprefix."-".$uiprefix."-".$ui1."-".$ui2."-".$ui3;

        return $uniqeid;
    }







}
