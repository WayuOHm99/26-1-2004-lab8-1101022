<html>
<body>
<?php
include("connect.php");
 $sql = "INSERT INTO book (book_id, book_name, author, publisher, price)
 VALUES('" . $_POST['book_id'] . "',
 '" . $_POST['book_name'] . "',
 '" . $_POST['author'] . "',
 '" . $_POST['publisher'] . "',
 '" . $_POST['price'] . "')";
 IF(mysqli_query($con, $sql)){
     echo "สัมมะเร็จจ้าจ้าจ้า!!!<br /><br />";
 }
 
 mysqli_close($con);

?>
</body>
</html>