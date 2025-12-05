<?php 
        if(!empty($_POST["ten-dang-nhap"])&& 
            !empty($_POST["password"])&&
            !empty($_POST["ho_ten"])&&
            !empty($_POST["email"])&&
            !empty($_POST["sdt"])&&
            !empty($_POST["date"])&&
            !empty($_POST["vai_tro"])
        ){
            include("connect.php");
            $tenDangNhap = $_POST["ten-dang-nhap"];
            $password = $_POST["password"];
            $hoTen = $_POST["ho_ten"];
            $email = $_POST["email"];
            $sdt = $_POST["sdt"];
            $ngaySinh = $_POST["date"];
            $vaiTro = $_POST["vai_tro"];
            
            
            $sql = "INSERT INTO nguoi_dung (ten_dang_nhap, mat_khau, ho_ten, email, sdt, ngay_sinh, ten_vai_tro)
            VALUES ('$tenDangNhap', '$password', '$hoTen', '$email', '$sdt', '$ngaySinh', '$vaiTro')";
            
            mysqli_close($conn);
            header("location:index.php?page_layout=nguoidung");
        }
        else{
            echo "<p class = 'warning' display:flex> Vui lòng nhập đầy đủ thông tin!</p>";
        
            
        }
    ?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <style>
    body{
            margin: auto ;
            
        }
        .form{
            width: 40%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
            background-color: beige;
        }
        input{
            width: 100%;
            padding: 7px;
            border-radius: 10px;
        }
        .submit input   {
            margin-top: 15px;
            text-align: center;
            background-color: green;
            color: white;
        }
        select{
            width: 100%;
            padding: 7px;
            border-radius: 10px;
            text-align: center;
        }
        p{
            text-align: left;
            margin: 10px 0 5px 0;
            font-size: 18px;
        }
        .warning{
            text-align : center;
            color: red;
        }
    </style>
    
</style>
    
</head>
<body>
    
<div class="form">
    <form action="index.php?page_layout=themnguoidung" method="post">
        <h1>Thêm người dùng</h1>
        <div>
            <p>Tên đăng nhập</p>
            <input type="text" name="ten-dang-nhap" placeholder="tên đăng nhập">
        </div>
         <div>
            <p>Mật khẩu</p>
            <input type="password" name="password" placeholder="mật khẩu">
        </div>
        <div>
            <p>Họ tên</p>
            <input type="text" name="ho_ten" placeholder="họ tên">
        </div>
        <div>
            <p>Email</p>
            <input type="email" name="email" placeholder="email">
        </div>
         <div>
            <p>SĐT</p>
            <input type="text" name="sdt" placeholder="số điện thoại">
        </div>
        <div>
            <p>Vai trò</p>
            <select name="vai_tro" >
                <option value="1">admin</option>
                <option value="2">đạo diễn</option>
                <option value="3">diễn viên</option>
                <option value="4">người dùng</option>
              
            </select>
        </div>
        <div>
            <p>Ngày sinh</p>
            <input type="date" name="date" >
        </div>
        <div class="submit">
            
            <input type=submit value="Thêm người dùng">
        </div>
    </form>
</div>
 
</body>
</html>