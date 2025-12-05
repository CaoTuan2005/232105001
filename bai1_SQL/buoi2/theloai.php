<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            text-align: center;
            
        }
        th, td  {
            border: 1px solid black;
            padding: 10px;
        }
        a{ text-decoration: none; color: white;}
        .xoa{
            background-color: red;
            padding: 0 10px;
            color: green;
        }
         .them{
            color : black;
        }
      
    </style>
</head>
<body>
     <div style="display: flex; justify-content: space-between; align-items: center;">
      <h1>Thể loại</h1>
    <button><a  color: green class="them" href="themtheloai.php">Thêm thể loại</a></button>
    </div>
    
    <table>
        <tr>
            <th>Tên thể loại</th>           
            <th>Chức năng</th>
        </tr>
        <?php 
        include ('connect.php');
        $sql = "SELECT t.* FROM the_loai t ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_the_loai"] ?></td>           
            <td>
                <button>Sửa</button>
                <button class="xoa"><a  href="xoatheloai.php?id.<?php echo $row["id"] ?>">Xóa</a></button>
            </td>        
        </tr>
        <?php } ?>
    </table>
   
</body>
</html>