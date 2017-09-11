<?php

namespace App\Http\Controllers\UAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SigninController extends Controller
{
    //
	
	
	
	
	public function index()
	{
		
		return view('uauth/index');
	}
}





/*
1.サインインの入力ページのルーティング
[D:/localhost/uuouu/gate/app/Http/Controllers/UAuth/SigninController.php]
Route::get('/signin', 'UAuth\SigninController@index');

2.コントローラ作成
[D:/localhost/uuouu/gate/app/Http/Controllers/UAuth/SigninController.php]
php artisan make:controller UAuth\SigninController
````
public function index()
{
	return view('uauth/index');
}
````

3.テンプレート作成
[D:/localhost/uuouu/gate/resources/views/uauth/index.blade.php]






*/
