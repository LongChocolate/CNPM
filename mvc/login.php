<?php
    session_start();
    require_once('models/Taikhoan.php');
    require_once('models/Nhanvien.php');
    
    if (isset($_SESSION['users'])) {
        header('Location: index.php');
        exit();
    }
    $error = '';
    $sdt = '';
    $pass = '';
    if (isset($_POST['SDT']) && isset($_POST['Password'])) {
        $sdt = $_POST['SDT'];
        $pass = $_POST['Password'];
        
        $data = Taikhoan::login($sdt,$pass);
        if($data['code'] == 0)
        {
            
           $_SESSION['users'] = $data['error']['SDT'];
           $_SESSION['hoten'] = $data['error']['HoTen'];
           $_SESSION['loai'] = $data['error']['Loai'];
           header('Location: index.php');
           exit();
        }
        else
        {
            $error = $data['error'];
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='asset/js/validator.js'></script>
    <link rel="stylesheet" href="asset/css/base.css">
    <link rel="stylesheet" href="asset/css/form.css">

</head>
<body>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <h3 class="text-center text-secondary mt-5 mb-3">Đăng Nhập</h3>
            <form id='form' method="post" action="" class="border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light">
                <div class="form-group">
                    <label for="sdt">Số Điện Thoại</label>
                    <input  value=""name="SDT" id="SDT" type="text" class="form-control" placeholder="Tài khoản">
                    <div class='form-message'></div>
                </div>
                <div class="form-group">
                    <label for="Password">Mật Khẩu</label>
                    <input name="Password" value="" id="Password" type="password" class="form-control" placeholder="Mật khẩu">
                    <div class='form-message'></div>
                </div>
                <div class="form-group custom-control custom-checkbox">
                    <input <?= isset($_POST['remember']) ? 'checked' : '' ?> name="remember" type="checkbox" class="custom-control-input" id="remember">
                    <label class="custom-control-label" for="remember">Ghi nhớ đăng nhập</label>
                </div>
                <div class="form-group">
                    <?php
                        if (!empty($error)) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    ?>
                    <button class="btn btn-success px-5">Đăng nhập</button>
                </div>
                <div class="form-group">
                    <p>Bạn quên mật khẩu <a href="forgot.php">Reset mật khẩu</a>.</p>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    Validator({
        form: '#form',
        errorSelector: '.form-message',
        rules:[
            Validator.isRequired('#SDT','Số điện thoại'),
            Validator.isNumber('#SDT','Số điện thoại'),
            Validator.isRequired('#Password','Mật khẩu'),
            Validator.isLength('#Password',6,'Mật khẩu')
        ]
    })
</script>
</body>
</html>