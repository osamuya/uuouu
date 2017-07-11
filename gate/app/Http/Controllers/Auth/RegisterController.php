<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Where to redirect users after temporary registration.
     *
     * @var string
     */
    protected $redirectToStored = '/stored';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        
//		$this->register();
		
		
		
        $data['uniqeid'] = "uniqeid";
        $data['count'] = 1;
        $data['active'] = 1;
        $data['role'] = 1;
        $data['delflag'] = 0;

		$data['uniqeid'] = 'bar';
		$data['uniqehash'] = 'xxxxxxxxxxxxxxxxxxx';
//		var_dump($data);
//        exit("foo 1");
		
		
		
		
		/**
		 * フィールドの追加は、このreturnの部分とmodelにカラム追加します。
		 *
		 *
		 *
		*/
        return User::create([
            'uniqeid' => $data['uniqeid'],
			'uniqehash' => $data['uniqehash'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
//            'remember_token' => "",
            'count' => $data['count'],
            'active' => $data['active'],
            'role' => $data['role'],
            'delflag' => $data['delflag'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  $stored hash
     * @return voide
     */
    protected function stored() {

        return view('auth.stored');

    }
	
	/**
     * Regisuser (over raid Illuminate\Foundation\Auth\RegistersUsers)
     *
     * @param  array  $data
     * @return User
     */
	public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        return $this->redirectToStored;
    }
}
