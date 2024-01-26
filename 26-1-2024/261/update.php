<html>
<body>
<?php
$con = mysqli_connect("localhost", "cheer", "ch123455");
if(!$con) {
 die("Could not connect: " . mysqli_error($con));  // Change mysql_error() to mysqli_error($con)
}
mysqli_select_db($con, "library");

// คำสั่ง SQL แก้ไขข้อมูล
$sql = "UPDATE book SET price = " . $_POST["price"] . " WHERE book_id = '" . $_POST["book_id"] . "'";

if(!mysqli_query($con, $sql)) {  // Pass $con as the first argument
 die("Error: " . mysqli_error($con));  // Change mysql_error() to mysqli_error($con)
} else {
 echo "1 ปรับราคาแล้ว";
}

mysqli_close($con);
?>
</body>
</html>
