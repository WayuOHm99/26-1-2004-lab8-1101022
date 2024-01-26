<html>
<body>
<?php
  // 1) เชื่อมต่อเซิร์ฟเวอร์
 $con = mysqli_connect("localhost", "cheer", "ch123455");
 if(!$con) {
   die("Could not connect: " . mysql_error());
 } 
// echo "สัมมะเร็จ!!!<br />";
 mysqli_set_charset($con,"utf8");

  // 2) ระบุฐานข้อมูล
 mysqli_select_db($con, "library");
 echo "สัมมะเร็จจ้า!!!<br />";

  // 3) สั่งคำสั่ง SQL
 $sql = "INSERT INTO book (book_id, book_name, author, publisher, price)
 VALUES('" . $_POST['book_id'] . "',
 '" . $_POST['book_name'] . "',
 '" . $_POST['author'] . "',
 '" . $_POST['publisher'] . "',
 '" . $_POST['price'] . "')";
 mysqli_query($con, $sql);
 echo "เพิ่มละเด้อ!!!<br /><br />";

  // 5) ปิดการเชื่อมต่อ
 mysqli_close($con);

?>
</body>
</html>