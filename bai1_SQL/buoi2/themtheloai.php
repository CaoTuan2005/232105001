<?php 
        if(!empty($_POST["ten-the-loai"])
            
        ){
            include("connect.php");
            $tenTheLoai= $_POST["ten-the-loai"];
           
            
            
            $sql = "INSERT INTO the_loai (ten_the_loai)
            VALUES ('$tenTheLoai')";
            
            mysqli_close($conn);
            header("location:index.php?page_layout=theloai");
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
            background-color: grey;
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
    <form action="location:index.php?page_layout=theloai" method="post">
        <h1>Thêm thể loại</h1>
        <div>
            <p>Tên thể loại</p>
            <input type="text" name="ten-the-loai" placeholder="tên thể loại">
        </div>

        <div class="submit">
            
             <input type=submit value="Thêm thể loại">
        </div>
    </form>
</div>
 
</body>
</html>