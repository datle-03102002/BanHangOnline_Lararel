<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/login_style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="wraper">
        <div class="form-box login">
            <form action="{{ route('postlogin') }}" method="post">
                <h2>Đăng nhập</h2>
                @if (Session::has('error'))
                    <h4>{{ Session::get('error') }}</h4>
                @endif
                @csrf
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="email" required value="{{ old('email') }}">
                    <label for="">Tên đăng nhập</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" required>
                    <label for="">Mật khẩu</label>
                </div>
                <div class="remember-forgot">
                    <label for=""><input type="checkbox"> Remember me</label>
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <button type="submit" name="login">Login</button>
                <div class="register-link">
                    <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký</a></p>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
