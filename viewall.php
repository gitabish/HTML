<html>
<head>
<title>ammayi</title></head>
<body bgcolor="aquamarine"><center>
<?php
require('1stlogin.php');

$sql="select * from library";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo"bookname :".$row["Book_name"]."<br>";
echo"author :".$row["Author"]."<br>";
echo"publisher :".$row["Publisher"]."<br>";
echo"quantity :".$row["Quantity"]."<br>";
echo"prize :$".$row["prize"]."<br><br>";
}
}
else
{
echo"failed";
}
mysqli_close($conn);
?></center>
</body>
</html>



