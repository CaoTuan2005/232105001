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
            color: white;
        }
        .them{
            color : black;
        }
    </style>
</head>
<body>
     <div style="display: flex; justify-content: space-between; align-items: center;">
      <h1>Quốc Gia</h1>
    <button><a  class="them" href="themquocgia.php">Thêm Quốc Gia</a></button>
    </div>
    <table>
        <tr>
            <th>Tên quốc gia</th>           
            <th>Chức năng</th>
        </tr>
        <?php 
        include ('connect.php');
        $sql = "SELECT q.* FROM quoc_gia q ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_quoc_gia"] ?></td>           
            <td>
                <button>Sửa</button>
                <button class="xoa"><a  href="xoaquocgia.php?id.<?php echo $row["id"] ?>">Xóa</a></button>
            </td>        
        </tr>
        <?php } ?>
    </table>
</body>
</html>