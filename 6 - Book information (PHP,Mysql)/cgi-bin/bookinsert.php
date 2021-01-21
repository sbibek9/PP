<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "yourPassword";
$db = "test";
$conn = new mysqli($servername,$username,$password,$db);
$sql="insert into books (title, author, publisher) values ('$_POST[title]', r]', '$_POST[publisher]')";
if ($result = $conn->$sql){
    echo "Succesfull";
}
else
{
die('Error: ' . mysql_error());
}
echo "1 record added";
?>
<form action="bookresult.php" method="post">
Title: <input type="text" name="title" />
<input type="submit" />
</form>
</body>
</html>