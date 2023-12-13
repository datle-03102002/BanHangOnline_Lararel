<link rel="stylesheet" href="{{ asset('assets/css/personal.css') }}">

<body>
    <div class="account">
        <div class="image">
            <img src="{{ asset('assets/imgs/logn.webp') }}" alt="">
        </div>
        <div class="inforr">
            <div class="infor-title">
                <p>Hồ sơ của tôi</p>
            </div>
            <div class="information">
                <div class="thongtinchitiet">
                    <label for="">Họ và tên: </label>
                    <span>{{ $user->hoten }}</span>
                </div>
                <div class="thongtinchitiet">
                    <label for="">Email: </label>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="thongtinchitiet">
                    <label for="">Số điện thoại: </label>
                    <span>{{ $user->sodienthoai }}/span>
                </div>
                <div class="thongtinchitiet">
                    <label for="">Địa chỉ: </label>
                    <span>{{ $user->diachi }}</span>
                </div>
            </div>
            <div class="update">
                <button type="submit" name="update">Cập nhật thông tin</button>
            </div>
        </div>
    </div>
    {{-- <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box capnhat">
            <form action="user/capnhat.php?id=<?php echo $_SESSION['login']; ?>" method="post">
                <div class="box-input">
                    <label for="">Tên đăng nhâp</label>
                    <input type="text" name="tencapnhat" required value="<?php echo $row_data['tentaikhoan']; ?>">
                </div>
                <div class="box-input">
                    <label for="">Họ và tên</label>
                    <input type="text" name="hotencapnhat" required value="<?php echo $row_data['hoten']; ?>">
                </div>
                <div class="box-input">
                    <label for="">Email</label>
                    <input type="email" name="emailcapnhat" required value="<?php echo $row_data['email']; ?>">
                </div>
                <div class="box-input">
                    <label for="">Số điện thoai</label>
                    <input type="number" name="sdtcapnhat" required value="<?php echo $row_data['sodienthoai']; ?>">
                </div>
                <div class="box-input">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diachicapnhat" required value="<?php echo $row_data['diachi']; ?>">
                </div>
                <button class="btncapnhat" type="submit" name="capnhat">Cập nhật</button>
            </form>
        </div>
    </div> --}}
    <script src="./js/personal.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
