<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\BaseClass;
use App\uuoUser;
use Illuminate\Support\Facades\DB;

// Require for sendmail
use Mail;
use App\Mail\BaseMail;

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
         * Sending mail to register dd(\Config::get('mail'));
         * Save data of register
         * Logging
         *
         */
        if ($request->session()->get("regist_status") == $hash) {

//            $password_hashed = BaseClass::makeEncrypt($request->input('password'));
//            var_dump($request->input('username'));
//            var_dump($request->input('email'));
//            var_dump($password_hashed);
            
			
			$uuoUser = new uuoUser;
			// new user regist
			$uuoUser->username = $request->input('username');
			$uuoUser->password = BaseClass::makeEncrypt($request->input('password'));
			$uuoUser->email = $request->input('email');
			$uuoUser->uniqeid = uniqid('pre_');
			$uuoUser->count = 1;
			$uuoUser->delflag = 0;
			$uuoUser->save();

			// session delete
            $request->session()->forget("regist_status");
			
			// sendmail with templete
            Mail::to('oosamuuy@gmail.com')->send(new BaseMail());



        } else {
            $request->session()->forget("regist_status");
            // Redirect
            // Logging
//            abort("500");
            return redirect('/');
        }

        // save mysql database
        return "foo bar";
    }
}
