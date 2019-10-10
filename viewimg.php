<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>
<?php
$con = mysqli_connect('localhost','root','','tourismalappuzha') or die('Unable To connect');


if(isset($_POST["submit2"]))
{
   $res=mysqli_query($con,"select * from imgdb");
   echo "<table>";
   echo "<tr>";

   while($row=mysqli_fetch_array($res))
   {
   echo "<td>";
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="300" width="200"/>';
   echo "<br>";
   ?><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php
   echo "</td>";
   }
   echo "</tr>";

   echo "</table>";
  }
?>
</body>
</html>
