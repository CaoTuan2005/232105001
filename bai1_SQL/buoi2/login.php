<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-Buổi 2</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="tên đăng nhập">
        </div>
         <div>
            <input type="password" name="password" placeholder="mật khẩu">
        </div>
        <div>
            <input type="submit" value="đăng nhập">
        </div>
    </form>
    <?php
    include('connect.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
    $tenDangNhap = $_POST['username'];
    $matKhau = $_POST['password'];

    $sql = "select * from nguoi_dung where ten_dang_nhap = '$tenDangNhap' and mat_khau='$matKhau'";
    

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION['username'] = $tenDangNhap;
        header('location: index.php');  
    }
    else{
        echo "<p class = 'warning' > Sai thong tin dang nhap</p>";
    }



    // echo $matKhau;
    // echo $tenDangNhap;

    //Nếu tên đăng nhập = admin
    //mật khẩu 123 thì cho phép user vào trang chủ

   // echo $tenDangNhap . $matKhau;
//    if($tenDangNhap == 'admin' && $matKhau == '123'){
//     session_start();
//     $_SESSION["username"] = $tenDangNhap;
//     header('location: trangchu.php');}
  
//    else {
//     echo"<p class = 'warning'>Sai thông tin đăng nhập</p>";
//    }

    }
    ?>
</body>
</html>