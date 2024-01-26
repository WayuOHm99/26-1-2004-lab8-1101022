<html>
<body>
<?php
include("connect.php");
  // 3) สั่งคำสั่ง SQL
 $sql = "SELECT * FROM book";
 $result = mysqli_query($con, $sql);
 echo "สัมมะเร็จจ้าจ้า!!!<br /><br />";

  // 4) ใช้งานข้อมูล
 while($row = mysqli_fetch_array($result)) 
   echo $row["book_id"] . " " . $row["book_name"] . " " . $row["author"] .  " " . $row["publisher"] .  " " . $row["price"] . "<br />";
  
  // 5) ปิดการเชื่อมต่อ
 mysqli_close($con);

?>
</body>
</html>