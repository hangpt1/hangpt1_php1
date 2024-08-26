<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Bài tập buổi 2</title>

</head>
<body>
<?php
echo '<center><a target="_blank" href="https://www.facebook.com/profile.php?id=100013363294385&locale=vi_VN"><img class="img" src="./anh.jpg"></a></center>';
echo '<center>
        <p>Họ và tên: Phạm Thị Hằng</p>
        <p>Lớp: K58SN2, Trường đại học Thương Mại</p>
    <center>';
echo '<button><a target="_blank"  href="https://github.com/hangpt1">Link Github</a></button><br><br><br>';
//Bài tập buổi 2




// Chuỗi gốc:
$originalString = " Yêu Tổ quốc, yêu đồng bào. 
Học tập tốt, lao động tốt 
Đoàn kết tốt, kỷ luật tốt
Giữ gìn vệ sinh thật tốt 
Khiêm tốn, thật thà, dũng cảm. ";
// Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
echo "Số ký tự trong chuỗi gốc là: " . (strlen($originalString)) . "<br>";
// Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
echo "Số từ trong chuỗi gốc là: " . (str_word_count($originalString)) . "<br>";
// Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo "Chuỗi sau khi đảo ngược là: " . (strrev($originalString)) . "<br>";
// Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo (strpos( $originalString , "Yêu")) . "<br>"; 

// Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo (str_replace("Yêu", "Thương", $originalString )) . "<br>";
// Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
echo (strncmp("Yêu","Yêu Tổ quốc, yêu đồng bào", 3)) . "<br>";
// Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo strtoupper($originalString) . "<br>";
// Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo strtolower($originalString) . "<br>";
// Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo ucwords($originalString) . "<br>";
// Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
echo trim($originalString) . "<br>";
// Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
echo ltrim($originalString) . "<br>";
// Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
echo rtrim($originalString) . "<br>";

// Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$stringAfterSplitting =  explode(" ",$originalString );
// Xem phần tử thứ 5 của dãy sau khi tách
echo $stringAfterSplitting[5] . "<br>";

// Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
// Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
// Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
// Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
// Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
// Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
// Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().



// echo ($str);
// echo (str_word_count($x));
// echo (str_word_count($x));



?>


</body>
</html>