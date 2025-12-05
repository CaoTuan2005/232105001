<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang admin</title>
    <style>
      body {
        margin: 0;
      }
      nav {
        background-color: orange;
        display: flex;
        justify-content: space-between;
      }
      ul {
        display: flex;
        list-style: none;
        margin: 0;
      }
      li {
        padding: 10px;
      }
      a {
        text-decoration: none;
      }
      main {
        width: 80%;
        margin: auto;
      }s
    </style>
  </head>

  <body>
    <?php
        session_start();
        if(!isset($_SESSION["username"])){
            header('location: login.php');
        }
    ?>

    <header>
      <nav>
        <ul class="">
          <!-- <li class="">
            <a class="" href="index.php?page_layout=trangchu">Trang chủ</a>
          </li> -->
          <li class="">
            <a class="" href="index.php?page_layout=phim">Phim</a>
          </li>
          <li class="">
            <a class="" href="index.php?page_layout=theloai">Thể loại</a>
          </li>
          <li class="">
            <a class="" href="index.php?page_layout=quocgia">Quốc gia</a>
          </li>
          <li class="">
            <a class="" href="index.php?page_layout=nguoidung">Người dùng</a>
          </li>
        </ul>
        <ul class="">
          <li class=""><?php echo "xin chào " . $_SESSION["username"]; ?></li>
          <li class="">
            <a class="" href="index.php?page_layout=dangxuat">Đăng xuất</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <?php
         if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
               case 'trangchu':
                  include "trangchu.php";
                  break;
               case 'phim':
                  include "phim.php";
                  break;
               case 'theloai':
                  include "theloai.php";
                  break;
               case 'quocgia':
                  include "quocgia.php";
                  break;
              case 'themnguoidung':
                  include "themnguoidung.php";
                  break;
               case 'nguoidung':
                  include "nguoidung.php";
                  break;
               case 'dangxuat':         
                  break;
            }
         }
      
      ?>
    </main>
  </body>
</html>
