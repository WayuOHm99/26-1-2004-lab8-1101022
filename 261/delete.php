<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
 <?php
 $ $con = mysqli_connect("localhost", "cheer", "ch123455");
if(!$con) {
 die("Could not connect: " . mysql_error());
}
mysqli_select_db($con, "library");
 // 3) คำสั่ง SQL ลบข้อมูล
$sql="DELETE FROM book WHERE book_id = '"
 . $_POST["book_id"] . "'";

 if(!mysqli_query($sql, $con)) {
 die("Error: " . mysql_error());
 } else {
 echo "1 record deleted.";
 }
 mysqli_close($con);
 ?>
</body>
</html>