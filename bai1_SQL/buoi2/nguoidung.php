<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="bang.css">
</head>
<body>
    <div style="display: flex; justify-content: space-between; align-items: center;">
      <h1>Thông tin người dùng</h1>
    <button><a class="them" href="themnguoidung.php">Thêm người dùng</a></button>

    
    </div>
    <table border = 1>
      <tr>
        <th>Tên đăng nhập</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>SĐT</th>
        <th>Vai trò</th>
        <th>Ngày sinh</th>
        <th>Chức năng</th>
      </tr>
      <?php 
      include ("connect.php");
      $sql = "SELECT nd.*, vt.ten_vai_tro FROM `nguoi_dung` nd JOIN vai_tro vt ON nd.vai_tro_id = vt.id";
      $result = mysqli_query($conn, $sql);
      $_GET['page_layout'];
      while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $row["ten_dang_nhap"]?></td>
        <td><?php echo $row["ho_ten"]?></td>
        <td><?php echo $row["email"]?></td>
        <td><?php echo $row["sdt"]?></td>
        <td><?php echo $row["ten_vai_tro"]?></td>
        <td><?php echo $row["ngay_sinh"]?></td>
        <td class="chucnang">
            <a href="sua.php?id=<?php echo $row["id"]?>"><button>Sửa</button></a>
            <a class = "xoa" href="xoanguoidung.php?id=<?php echo $row["id"]?>">Xóa</a>
        </td>
      </tr>
      <?php } ?>
    </table>
</body>
</html>