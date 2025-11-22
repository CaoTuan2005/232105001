<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php 
        // 1. in ra man hinh 
        echo " Hello World ! <br> ";

        echo "Hi ";

        // 2. Biến
        // Cú pháp : $ + tên biến = giá trị của biến
        $ten = "Cao Tuan";
        $tuoi = 20;
 
        echo $ten . " " . $tuoi." Tuổi <br>";
    
        // 3. Hằng 
        define("soPi","3.14");
        echo soPi ."<br>" ; 
        
        // 4. Phân biệt '' và " " 
        echo '$ten' . "<br>";   // dùng nháy đơn thì in ra màn hình nội dung bên trong nháy đơn
        echo "$ten" ."<br>"; // in ra nội dung biến $ten 
        
        //5. Chuỗi 
        echo strlen($ten) . "<br>";
        echo str_word_count($ten)."<br>";
        // timf kiem trong chuoi
        echo strpos ($ten,"a") . "<br>";
        // thay the ki tu trong chuoi 
        echo str_replace("Tuan" , "Sieu" , $ten ) ."<br>";
         //6. Toán tử
        // phep cong  # + - * /
        # += -= *= /= %= 
        $SothuNhat = 10;
        $SothuHai = 5;
        echo $SothuNhat + $SothuHai . "<br>";
        #so sanh == != > < >= <= === 
        echo $SothuNhat < $SothuHai;
        // 1 là true 0 là false
        $Tong = $SothuNhat + $SothuHai;
        //7. Câu điều kiện
        // if("điều kiện"){
            // logic
        // }
        // elseif("Dieu kien"){
            //logic 
        //}
        // else{
            // logic
        // }

        // kiem tra tong cua so thu nhat va so thu 2 (neu nho hon 15 thi in ra nho hon 15) 
        // neu = 15 thi in ra = 15
        // neu > 15 thi in ra >15

        if ($Tong  < 15 ){
            echo "nho hon 15";
        }
        if($Tong == 15 ){
            echo "  Tong bang 15";
        }
        else{
            echo "lon hon 15";
        }

        // 8. switch case
        $color = "red";
        switch ($color){
            case "red":
                echo "is red ";
                break;
            case "blue":
                echo "is blue";
                break;
            default:
                echo "no color";
                break; 
        }
        // //9. for 
        // for ($i=0;$i<100;$i++){
        //     echo $i . "<br>";
        // }

        //10. Mang 
        $mang = ["An","Nhat Anh","Cao Tuan","Vu Anh"];

        //Dem phan tu 
        echo count($mang). "<br>";
        echo $mang[1] . "<br>";
        print_r($mang). "<br>";
        $mang[0] = "Hai Anh ";
        $mang[] = "Tam ";
        print_r($mang);
        #xoa 
        unset($mang[4]);
        print_r($mang); 
    ?>
</body>
</html>