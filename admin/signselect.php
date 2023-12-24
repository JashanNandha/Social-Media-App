<div class="jumbotron">
<?php
  include("connection.php");
 
$select=mysql_query("select * from sign")or die(mysql_error());
?>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-condensed ">
<tr>
<td>Id</td>
<td>Name</td>
<td>Email</td>
<td>Birthday</td>
<td>City</td>
<td>Status</td>
<td>Delete</td>
<td>Deactive</td>
</tr>
<?php
 while($row=mysql_fetch_array($select))
 
 {
	 $ii = $row['id'];
	 ?>
     <tr>
	 <td><?php echo $row ['id'];?></td>
	 <td><?php echo $row['name']; ?></td>
	 <td><?php echo $row['email']; ?> </td>
	 <td><?php echo $row['birthday']; ?> </td>
	 <td><?php echo $row['city']; ?> </td>
     <td><?php echo $row['user_status']; ?> </td>
     <td><a href="deletesign.php?url=<?php echo $ii ; ?>"><button>Delete</button></a></td>
     <td><a href="deactive.php?url=<?php echo $ii ; ?>"><button>Deactive</button></a>
     <a href="active.php?url=<?php echo $ii ; ?>"><button>Active</button></a></td>
     </tr>
	 
	 
	 <?php
	 } 
  ?>
</table>
</div>
</div>

