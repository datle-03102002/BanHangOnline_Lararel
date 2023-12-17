<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/login_style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wraper register">
        <div class="form-box register">
            <form action="{{ route('postregister') }}" method="post">
                @csrf
                <h2>Đăng ký</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                    @error('email.email')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                    @error('email.unique')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></ion-icon></span>
                    <input type="text" name="numberphone" required>
                    <label for="">Số điện thoại</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="fullname" required>
                    <label for="">Tên đầy đủ</label>
                    @error('fullname')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label for="">Mật khẩu</label>
                    @error('password.min')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="repassword" required>
                    <label for="">Xác nhận mật khẩu</label>
                    @error('re_password.same')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="home"></ion-icon></span>
                    <input type="text" name="address" required>
                    <label for="">Địa chỉ</label>
                </div>
                <div class="remember-forgot">
                    <label for=""><input type="checkbox"> Tôi chấp nhận chính sách và điều khoản người
                        dùng</label>
                </div>
                <button type="submit" name="register">Đăng Ký</button>
                <div class="login-link">
                    <p>Bạn đã có tài khoản? <a href="{{ route('client.login') }}">Đăng nhập</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
