<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.font
{
	font-size:25px;font-style:oblique;color:#000;
	
	}
    </style>
</head>

<body>
<h1> <font class="font"><center>Update Name</center></font></h1>
<?php
	
include("connection.php");
  
 $userid=  $_SESSION['k'];
  $my=mysql_query("select * from sign where id ='$userid'")or die(mysql_error());
  $row=mysql_fetch_array($my);
   $name= $row['name'];
if(isset($_POST['sub']))
   {
  $nn=$_POST['edname'];
  $myselect=mysql_query("update sign set name='$nn' where id='$userid'")or die(mysql_error());	   
	   
	   if($myselect)
	   {
		    //echo "done";
			 $_SESSION['login']=$nn ;
		header("location:welcome.php?profile=user");
	   }
  else
  {
	    echo "error";
	  
	  }	   
}
?>
<form action="" method="post">
<label>Edit Name</label>
<br />
<input type="text" value="<?php  echo $_SESSION['login']; ?>"class="form-control" name="edname" required="required"  >
<br />
<input type="submit" class="btn btn-success btn-md active  " name="sub" value="Update">

</form>
</body>
</html>