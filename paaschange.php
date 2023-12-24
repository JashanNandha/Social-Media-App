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
<font class="font"><center>Change Password</center></font>
<?php
   include("connection.php");
 $my=mysql_query("select * from sign where id ='$userid'")or die (mysql_error());
	$row=mysql_fetch_array($my);
	$pss=$row['password'];
if(isset($_POST['sub']))
{
	$cur   =$_POST['cur'];
	$nepass =$_POST['npass'];
	$repass =$_POST['pass1'];
	if($repass==$nepass)
	{
	if($cur==$pss)
	{
 $myselect=mysql_query("update sign set password='$nepass' where id='$userid'")or die(mysql_error());
 if($myselect)
 {
	 ?>
    <script>
    $(document).ready(function(e) 
	{
		$(".gs").fadeOut(2000);
        
    });
    
    
    </script> 
     <?php
	echo "<font class='gs'>Pass successful</font>";
	 
	 }	
	 else
	 {
		 
		 echo "error";		 
		 
		 }
	}
	
}
	
	
}
?>




<form action="" method="post">
<label class="font">Current</label><br />
<input type="text" name="cur"  class="form-control" required="required" /><br />
 <label class="font"> New password</label><br />
 <input type="password" name="npass" class="form-control" required="required" /><br />
<label class="font">Re-password</label><br />
 <input type="password" name="pass1" class="form-control" required="required" /><br /><br />
 <input type="submit" name="sub" value="Submit"  class="btn btn-success"/>
 </form>
</body>
</html>
