<?php
//session_start();
//echo "popo";
include("co.php");
if(isset($_POST['send']))
{
    $uname =$_POST['username'];
	 $pass =$_POST['password'];





  if($uname=="admin" && $pass=="admin")
  {
    include("admin1.php");echo "<center>";
    //echo "<img src=images/nadi.jpg width=100 align=left>";
    //echo "<p align=left>"."<font color=red size=+3>"."welcome..".$uname."</font></p>";
  //include("admin.php");echo "<center>";
 //echo "<font size=+3><a href=up.php>Registration page</a></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 //echo "<font size=+3><a href=up.php>Registration page</a></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  //echo "<font size=+3><a href=up.php>Registration page</a></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  // echo "<font size=+3><a href=up.php>Registration page</a></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    //echo "<font size=+3><a href=up.php>Registration page</a></font>";
  }
  //echo "<center>";


//echo $u_pass;
//echo "<script>alert('$uname');</script>";

$sql="select * from login where username='$uname' and password='$pass'";
//echo $sql;

$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount!=0)
{

	while($row=mysqli_fetch_array($result))
	{
		$dbu_name=$row['username'];
		$dbu_pass=$row['password'];
		$dbu_type=$row['usertype'];

		if($dbu_name==$uname && $dbu_pass==$pass)
		{
			//$_SESSION['uname']=$dbu_name;
            //$_SESSION['pass']=$dbu_pass;
		     //echo $dbu_type;
			if($dbu_type==0)
			{
				//$_SESSION['usertype']="admin";
               	header('Location: admin1.php');
			}
			else if($dbu_type==1)
			{
				//$_SESSION['usertype']="user";
                	header('Location: index.php');
			}
			else if($dbu_type==2)
			{
				//$_SESSION['usertype']="User";
					//header("location:../important/User/user_home.php");
			}
		}



else
{
			//header("location:signin.php?error=User Not Found");
			//echo "not found";
}
}
}
}
?>
