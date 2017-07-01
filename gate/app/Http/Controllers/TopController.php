<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\BaseClass;
use App\Model\uuoUser;
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

    private $myhash;
    private $memberid;

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
//            var_dump($request->input('name'));
//            var_dump($request->input('email'));
//            var_dump($password_hashed);

            /**
             * Register in the new member DB table
             *
             *
             *
             *
             *
             */
            // make uniqeid
            $uniqeid = BaseClass::makeUniqeid();

            // current time
            $currenttime = BaseClass::makeDatetime();

            // save
            $uuoUser = new uuoUser;
            // new user regist
            $uuoUser->name = $request->input('name');
            $uuoUser->password = BaseClass::makeEncrypt($request->input('password'));
            $uuoUser->email = $request->input('email');
            $uuoUser->uniqeid = $uniqeid;
            $uuoUser->count = 1;
            $uuoUser->delflag = 0;
            $uuoUser->save();

            /**
             * Send the hash key to the mail template for identity verification
             * make access URI for for Identification
             * - hash
             * - date
             */
            $request->session()->put('uniqeid', $uniqeid);
            $request->session()->put('hash', $hash);
            $request->session()->put('currenttime', $currenttime);

            $query = env("APP_URL")."mode=newregist&id=".$uniqeid."&hash=".$hash."datetime=".$currenttime."&flag=1";
            $request->session()->put('query', $query);

            /**
             * Sendmail with templete
             *
             *
             *
             *
             *
             */
            Mail::to($request->input('email'))
                ->bcc("oosamuuy@gmail.com")
                ->send(new BaseMail());
            // session delete when registing.
            $request->session()->forget("regist_status");

        } else {
            $request->session()->forget("regist_status");
            // Redirect
            // Logging
            // abort("500");
            return redirect('/');
        }

        // save mysql database
        return "foo bar";
    }
}
