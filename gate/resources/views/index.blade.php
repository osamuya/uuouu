<!doctype html>
<!--[if IE 6]> <html class="ie6"> <![endif]-->
<!--[if IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<!--page info-->
<title></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--og-->
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:site_name" content="" />
<!--favicon-->
<link rel="shortcut icon" href=""/>
<!--css-->
<link rel="stylesheet" type="text/css" href="/assets/css/index.css" media="all" />

<!--js-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/easing.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="/assets/js/html5shiv-printshiv.js"></script>
<script type="text/javascript" src="/assets/js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="/assets/js/flexibility.js"></script>
<![endif]-->

</head>

<body>
<header class="header">
    <h1 class="header__toplogo">uuouu</h1>
</header>
<div class="ubody">



<article class="top">
    <div class="signup formarea">
	
	<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" id="regist" novalidate>
		{{ csrf_field() }}
		
		
		<div class="formarea__input">
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			
				<div class="formarea__input">
					<label for="name" class="col-md-4 control-label formarea__input__label">ユーザー名: </label>


						<input id="name" type="text" class="form-control formarea__input__field" name="name" value="{{ old('name') }}">

						@if ($errors->has('name'))
							<div class="help-block formarea__err">
								{{ $errors->first('name') }}
							</div>
						@endif
<!--						<div class="formarea__err">*ユーザー名を入力してください。</div>-->

				</div>
			</div>
		</div>

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email" class="col-md-4 control-label">E-Mail Address</label>

			<div class="col-md-6">
				<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="password" class="col-md-4 control-label">Password</label>

			<div class="col-md-6">
				<input id="password" type="password" class="form-control" name="password" required>

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>
		</div>

		<div class="form-group">
			<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

			<div class="col-md-6">
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					Register
				</button>
			</div>
		</div>
	</form>
	</div><!--// formarea -->
</article>
   
   
   
   
   
    <article class="top">
        <div class="signup formarea">
            <form action="/regist/{{$hash}}" method="post" id="regist">
                <div class="formarea__input">
                    <label class="formarea__input__label">ユーザー名: </label>
                    <input type="text" name="name" id="name"  class="formarea__input__field" placeholder="User name">
                    <div class="formarea__err">*ユーザー名を入力してください。</div>
                </div>
                <div class="formarea__input">
                    <label class="formarea__input__label">Eメール: </label>
                    <input type="text" name="email" id="email" class="formarea__input__field" placeholder="Email">
                    <div class="formarea__err">*Emailを入力してください。</div>
                </div>
                <div class="formarea__input">
                    <label class="formarea__input__label">パスワード: </label>
                    <input type="text" name="password" id="password" class="formarea__input__field--small">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" name="" id="submit_regist" class="formarea__input__submit--regist" value="regist">
                    <div class="formarea__err">*ユーザー名を入力してください。</div>
                </div>
            </form>
        </div><!--// formarea -->
        <div class="signin formarea">
            <form action="" method="post" id="signin">
                <div class="formarea__input">
                    <label class="formarea__input__label">ユーザー名: </label>
                    <input type="text" name="" id="" class="formarea__input__field" placeholder="User name or Email">
                    <div class="formarea__err">*ユーザー名またはEmailを入力してください。</div>
                </div>
                <div class="formarea__input">
                    <label class="formarea__input__label">パスワード: </label>
                    <input type="text" name="" id="" class="formarea__input__field--small">
                    <input type="submit" name="" id="submit_signin" class="formarea__input__submit--signin" value="Sign in">
                    <div class="formarea__err">*パスワードを入力してください。</div>
                </div>
            </form>
        </div><!--// formarea -->
    </article>

</div>
<footer class="footer">
    <p class="footer__copy">Copyright (C) 2017 omnioo. All rights reserved.</p>
</footer>


</body>
</html>
