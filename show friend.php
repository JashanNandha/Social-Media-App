<style>
.sanp
{
 width:200px;  border:1px solid rgba(234,234,234,1);
		margin-top:10px; margin-left:12px; float:left;	
		text-align:center; text-transform:capitalize;
	
}
.fontname
{
 margin-top:-10px; margin-bottom:0px; text-transform:capitalize;
}
</style>


<?php
//session_start();
 // include("top.php");
?>

<div class="container" >
<div class="row">

<div class="col-lg-10 col-md-10 col-sm-10" style="background-color:rgba(239,239,239,1);border-bottom:4px solid rgba(232,232,232,1) ; height:80px;">
</br>
<img src="image/friends_24.png" /><font  style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px;font-weight:bold;margin-top:20px;">&nbsp;&nbsp;Friends</font>
</div>
</div>

<br />
<div class="row">

<div class="col-lg-10 col-md-10 col-sm-10" style="background-color:#EAEAEA;">
<table class="table">
<?php
include("connection.php");

	
	$query=mysql_query("select * from friends inner join sign where friends.r_sender=sign.id and friends.r_rec='$userid' and friends.f_status=1")or die(mysql_error());
	
	
	while($row=mysql_fetch_array($query))
	{
		 $name=$row['name']. " ".$row['surname'];
		$fre=$row['f_id'];
	
	 
	
        
		$p=$row['dp'];
		
		$detid=$row['id'];
		?>
     <!-- <div class="sanp">-->
      
     <tr>
     <td> 
	 <a href="profile details.php?details=<?php echo $detid ; ?>">	<img src="<?php echo $p ; ?>"  width="150px" height="130px" style="border:5px solid rgba(255,255,255,1);"/> </a></td>
     <td>
    
  <div style="margin-top:50px;">  	<?php echo " <font class='fontname'> $name </font> ";?></div></td>
  
        
  <td>      
 <div style="margin-top:50px;">  <a href="add friend.php?unf=<?php echo $fre ;?>"   
 <button class="btn btn-success btn-lg">
 
 Unfriend </a> </button>
 </div>
 <!--<div class="btn-group pull-right">
   <a href="add friend.php?unf=<?php //echo $fre ;?>"   
   <button class="dropdown-toggle" data-toggle="dropdown" style="margin-top:10px; width:20px;" button class="btn btn-success btn-lg">Add Friends </a> </button>
 
 <ul class="dropdown-menu" role="menu">
  <li> <a href="postdelete.php?url=<?php  //echo $dd ; ?>"><button type="button" class="btn -btn-primary" />Delete</button></a></li>
   </ul>
 </div>-->
   </td> 
     <!--<td>
     <a href="add friend.php?unf=<?php //echo $fre;?>"   <button class="btn btn-success">add Friends </a> </button></td>-->
     </tr> 
       
   <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ab"> Click </button>-->
            
            	<!--<div class="modal fade" role="dialog" id="ab">
                
                	<div class="modal-dialog">
                    
                    	<div class="modal-content">
                        
                        	<div class="modal-header">-->
     <!--<button type="button" class="close" data-dismiss="modal" >&times;</button>
                            </div>-->
                        
                    
                        
                        	<!--<div class="modal-footer">
                            Hello
                            </div>
                        
                        </div>
                    </div>
                
                </div>
        -->
        <hr />
        
        
       
		
		
		<?php
		
		
		}		
		
	
	
		
	
?>
<!--
          <div class="btn-group pull-right">
   <img src="image/arrow2.gif" class="dropdown-toggle" data-toggle="dropdown" style="margin-top:10px; width:20px;"/>
   <ul class="dropdown-menu" role="menu">
  <li> <a href="postdelete.php?url=<?php  //echo $dd ; ?>"><button type="button" class="btn -btn-primary" />Delete</button></a></li>
   </ul>
   </div>
</table>-->
 
<!--</div>
</div>
</div>-->

