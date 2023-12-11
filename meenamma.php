<html>

<body bgcolor="pink">
<table border="1">
<?php
require('1stlogin.php');
if(isset($_POST['submitt']))
{

$fname=$_POST['bookname'];
$lname=$_POST['author'];
$pass=$_POST['price'];
$sql="insert into library2(bookname,author,price)values('$fname','$lname','$pass')";
$result=mysqli_query($conn,$sql);
if($result)

echo"new records successfully created";


mysqli_close($conn);
}
else
{
?>
<form action=""method="POST">
<center>
<label for="Name">Bookname:</label>
<input type="text"name="bookname" id="Name" placeholder="book Name"><br>
<label for="Name">Author Name:</label>
<input type="text"name="author" id="Name"placeholder="author Name"><br>
<label for="Name">Price:</label>
<input type="text"name="price" id="Name"placeholder="price"><br>
<br>
<input type="submit"name="submitt"value="create now">
<br>

<?php
}
?>
</form>
</table>
</body>
</html>