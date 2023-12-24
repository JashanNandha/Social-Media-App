
<link rel="stylesheet" type="text/css"  href="css/store.css" />

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<div class="container">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10" style="background-color:rgba(243,243,243,1);height:70px;border:1px solid rgba(212,212,212,1);">
<span class="glyphicon glyphicon-user" style="font-size:24px; color:rgba(195,195,195,1);
margin-top:20px;"></span><font style="color:rgba(3,3,3,1);font-size:24px;font-weight:bold;"> &nbsp;&nbsp;About</font>

</div>
</div>
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-5" style="background-color:rgba(253,253,253,1);height:300px;border:1px solid rgba(212,212,212,1);">
bgjknbk

</div>

<div class="col-lg-5 col-md-5 col-sm-5" style="background-color:rgba(253,253,253,1);height:300px;border:1px solid rgba(212,212,212,1);">


<span class="glyphicon glyphicon-ice-lolly-tasted"></span>

<?php
include("connection.php");

	


$select=mysql_query("select * from sign where id='$useid'")or die(mysql_error());

$row=mysql_fetch_array($select);
     
	
	echo $name=$row['name'].$row['surname']."<br>";
    echo $row['birthday']."<br>";
	echo $row['phone']."<br>";
	echo $row['address']."<br>";
	?>
    </div>
    </div>
    </div>