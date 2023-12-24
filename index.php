<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css"  href="css/store.css" />
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css.map" />
<script src="js/jquery-1.9.1.min.js"></script>
<style>
.acc
{
	width:200px; height:150px; background-color:rgba(3,3,3,1);color:rgba(234,234,234,1);
	/*margin-top:100px; */
	
}
.checkbox{
	color:#fff;
	}
.forget{
	color:#fff;
	padding-top:20px;
}
.forget:hover{
	color:#fff;
	text-decoration:none;
}
</style>
</head>

<body>
<div class="container-fluid top">
<br />
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6" ></div>
<div class="col-lg-6 col-md-6 col-sm-6" >
<?php
session_start();
  include("connection.php");
  if(isset($_POST['ss']))
  {
	  $email=$_POST['email'];
	  $pass =$_POST['pass'];
	 $my2=mysql_query("select * from sign where email='$email' and password='$pass'")or    die(mysql_error()); 
	 
	 $num=mysql_num_rows($my2);
	 if($num==0)
	 {
		 
		 echo "Invalid Login...";
		 
		 }
		 else
		 {
			 
			 
			 
		 
		   while($row=mysql_fetch_array($my2))
		   {
			   $st = $row['user_status'];
			   if($st==1)
			   {
				   echo "<font class='acc'>Account Blocked...</font>";
			   }
			   else
			   {
			  		$_SESSION['k']=$row['id'];
			  		$_SESSION['login']=$row['name'];
					$_SESSION['email']=$row['email'];
			  
			  	header("location:welcome.php?profile=home");  
			   
			   
			   }
		   		}
		   
		   }
		 
		
			?>
          <script>
         /* $(document).ready(function(e)
		   {
			   $(".gg").fadeOut(1000);
            
        }); */
          
          </script>  
            
            <?php
			//echo "<fon class ='gg'>invalid</font>";
			
			//}   
	  
	  }
?>
<h1 style="margin-left:-500px; margin-top:0px;color:white; position:absolute;">Facebook</h1>
<form action="" method="post" class="form-inline">
  <div class="form-group">
    
    <input type="text" class="form-control" placeholder="Emai" name="email">
  </div>
  <div class="form-group">
  
    <input type="password" class="form-control"  placeholder="Password" name="pass">
  </div>
  <input type="submit" class="btn btn-primary btn-sm" value="Log in" name="ss">
  <br />
  <div class="form-group">
    
     &nbsp;&nbsp; <div class="checkbox">
        <label>
          <input type="checkbox"> Keep me logged in
        </label>
      </div>
  </div>
 <a href="forgotten.php" class="forget" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;Forgotten your password?</a>
</form>

</div>
</div>
</div>
<br />
</div>


<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6" >
<br />
<font class="ff">
<b> Facebook helps you connect and share with the<br />
    people in your life.</b></font>
    
    <img src="image/pyNVUg5EM0j.png" / style="margin-top:100px;">
    
    </div>
<div class="col-lg-6 col-md-6 col-sm-6" >
<br />
<font class="create"><b>Create an account</b></font><br />

<h3>It's free and always will be</h3>
<br />
<script>
function val()
{
	
 var em=document.form1.email.value;
 var ee=document.form1.email2.value;
     if(em!=ee)
        {
			alert("match email");
			document.form1.email.focus();
			return false;
			}
			
	}
</script>


<?php
   include("connection.php");
   if(isset($_POST['sub']))
   {
	  $name  =$_POST['name'];
	  $sur   =$_POST['surname'];
	  $email =$_POST['email'];
	  $pass  =$_POST['pass'];
	  $d     =$_POST['day'];
	  $m     =$_POST['month'];
	  $y     =$_POST['year'];
	  $g     =$_POST['g'];
	  $dob   =$d."/".$m."/".$y;
	  
	  	$emcheck= mysql_query("select * from sign where email='$email' ") or die(mysql_error());
		$num2 = mysql_num_rows($emcheck);
		
		if($num2!=0)
		{
			echo "Email id already used";
		}
		else
		{
	  
	  $my=mysql_query("insert into sign(name,surname,email,password,birthday,male)
	  values('$name','$sur','$email','$pass','$dob','$g')")or die(mysql_error());
	   if($my)
	   {
		   ?>
		   
		    <script>
          $(document).ready(function(e)
		   {
			   $(".gg").fadeOut(1000);
            
        });
          
          </script> 
		   
		   
		   <?php
		   echo "<font class='gg'>success</font>";
		   
		   } 
		else
		{
			echo "error";
			
			}   
	   
		}
	   
	   }
?>

<form action="" method="post" name="form1" onsubmit="return val();" >

  <div class="form-group">
  <table  width="100%">
<tr>
<td width="50%">
<input type="text" class="form-control" name="name" required="required" placeholder="First name"  >
</div></td> 
<td width="50%">
 
  <input type="text" class="form-control" name="surname" required="required" placeholder="Surname" >
</td>
</tr>
</table>
</div>

<div class="form-group">
    
    <input type="email" class="form-control" name="email" required="required" placeholder="Email or mobile number" >
  </div>
 
<div class="form-group">
    
    <input type="email" class="form-control" name="email2" required="required" placeholder="Re-enter email or mobile number" >
  </div> 
  
  <div class="form-group">
    
    <input type="password" class="form-control" name="pass" required="required" placeholder="New password" >
  </div> 
  <label>Birthday </label>
  <br />
<select name="day" >
<option >Day</option>
<script>
 var i;
 for(i=1;i<=31;i++)
{
	document.write("<option>"+i+"</option>");
	
	}

</script>
</select>
<select name="month" >
<option>Month</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>Jun</option>
<option>Jul</option>
<option>Aug</option>
<option>Sept</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select>
<select name="year" >
<option>Year</option>
<script>
var i;
for(i=2015;i>=1931;i--)
{
	document.write("<option>"+i+"</option>");
	
	}

</script>
</select>
Why do I need to provide my date of birth?
<br><br />
<label>
    <input type="radio" name="g" id="blankRadio1" value="male" required="required" >Male
  </label>

  <label>
    <input type="radio" name="g" id="blankRadio1" value="female" required="required">Female
  </label>
<h6>By clicking Create an account, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</h6>

<input type="submit" class="btn btn-success btn-lg active  " name="sub" value="Create an account">
<br />
<hr class="alert-info"/>
Create a Page for a celebrity, band or business.

 
</form>

</div>
</div>
</div>




</body>
</html>
