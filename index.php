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
// Tạo 1 mảng
$originalArray = ["Phạm", "Thị", "Hằng", 1,2];
$arrayAfterCombine  = implode(" ",$originalArray);
echo "Chuỗi được tạo từ mảng là: " . $arrayAfterCombine . "<br>";
// Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
echo str_pad($originalString, 2 , "Năm điều Bác Hồ dạy") . "<br>";

// Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
// Tìm lần xuất hiện cuối cùng của một ký tự trong một chuỗi, trả về chuỗi con đó
echo strrchr($originalString, "dũng cảm.") . "<br>";
// Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
// Tìm lần xuất hiện đầu tiên của một chuỗi, trả về chuỗi từ chuỗi con đó trở đi
echo strstr($originalString ,"Yêu") . "<br>";
// Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi 
// không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
$randomString = "Phamhamg@!%";
// $pattern = "/\d/";  // Mẫu biểu thức chính quy để tìm các chữ số
// $pattern = "/\s+/"; // Tìm tất cả các khoảng trắng (bao gồm cả khoảng trắng liên tiếp)
// $pattern = "/[^a-zA-Z0-9]/"; // Tìm tất cả các ký tự không phải chữ cái hoặc số
// $pattern = "/\.{2,}/"; // Tìm hai hoặc nhiều dấu chấm liên tiếp
// $pattern = "/<[^>]*>/"; // Tìm tất cả các thẻ HTML
// $pattern = "/(\d{2})-(\d{2})-(\d{4})/"; // Tìm ngày tháng theo định dạng DD-MM-YYYY
// $pattern = "/[^\w\s]/"; // Tìm tất cả các ký tự không phải chữ cái, số hoặc khoảng trắng
$cleanString = preg_replace("/[^a-zA-Z0-9]/", "", $randomString);
echo "18.Chuỗi sau khi thay thế ký tự: " . $cleanString.'</br>';


// Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function isInteger($str) {
    // Kiểm tra xem chuỗi có phải là một số nguyên hợp lệ hay không
    if (is_numeric($str) && is_int((int)$str)) {
        return true;
    } else {
        return false;
    }
}

// Ví dụ sử dụng
$testString = "12345";

if (isInteger($testString)) {
    echo "19." .  "$testString là một số nguyên." .'</br>';
} else {
    echo "19." . "$testString không phải là một số nguyên.".'</br>';
} 
// Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
$email = "phamhang12@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "20." . "$email là email".'</br>';
}else{
    echo "20." . "$email không phải là email".'</br>';
}

?>


</body>
</html>