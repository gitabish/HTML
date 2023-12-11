<html>
<body bgcolor="yellow">
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
<label for="Name">book Name:</label>
<input type="text"name="fname" id="Name" placeholder="book Name"><br>
<label for="Name">author Name:</label>
<input type="text"name="lname" id="Name"placeholder="author Name"><br>
<label for="Name">price:</label> <input type="txt"name="pass"placeholder="price Here"><br></label>
<br>
<br>
<input type="submit"name="submitt"value="create now">
<br>

<?php
}
?>
</form>
</body>
</html>