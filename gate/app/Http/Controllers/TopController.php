<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\BaseClass;



/**
 * TopController 主にサインアップ・サインインなどの認証機能
 *
 * [Class詳細]
 * 出来るだけ細かく書いたほうがよいが、詳細な説明は各メソッドに任せる。
 * 全体での共通ルールとか仕様を書く。
 *
 * @access public
 * @author omnioo
 * @copyright omnioo All Rights Reserved
 * @category Authorization Authorization
 * @package Laravel5.4
 */
class TopController extends Controller
{
    public function index(Request $request)
    {
        $hash = BaseClass::makeAccessHash();
//        var_dump($hash);
        $request->session()->put("regist_status",$hash);
        return view('index')->with('hash',$hash);
    }


    public function regist(Request $request, $hash)
    {
        /*
         * Sending mail to register
         * Save data of register
         * Logging
         *
         */
        if ($request->session()->get("regist_status") == $hash) {
            //nothing




        } else {
            $request->session()->forget("regist_status");
            // Redirect
            // Logging

            dd(\Config::get('mail'));
            abort("500");
            return false;
        }

        // save mysql database
        return "foo bar";
    }
}
