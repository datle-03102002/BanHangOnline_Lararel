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
    <div class="wraper register" style="height: auto">
        <div class="form-box register">
            <form action="{{ route('postregister') }}" method="post">
                @csrf
                <h2>Đăng ký</h2>
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" value="{{ old('email') }}">
                    <label for="">Email</label>
                </div>
                @error('email')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></ion-icon></span>
                    <input type="text" name="phone" value="{{ old('phone') }}">
                    <label for="">Số điện thoại</label>
                </div>
                @error('phone')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="fullname" value="{{ old('fullname') }}">
                    <label for="">Tên đầy đủ</label>
                </div>
                @error('fullname')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password">
                    <label for="">Mật khẩu</label>
                </div>
                @error('password')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="repassword">
                    <label for="">Xác nhận mật khẩu</label>
                </div>
                @error('repassword')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                <div class="input-box">
                    <span class="icon"><ion-icon name="home"></ion-icon></span>
                    <input type="text" name="address" value="{{ old('address') }}">
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
