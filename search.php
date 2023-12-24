<script src="js/modal.js"></script>
<?php
  include("top.php");
?>

<div class="container">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-8 col-md-8 col-sm-8" style="background-color:rgba(233,233,233,1);border-radius:4px;">
<br /><br />
<?php
include("connection.php");
if(isset($_POST['sub']))
{
	
	$text=$_POST['text'];
	
	$query=mysql_query("select * from sign where name LIKE '$text%'")or die(mysql_error());
	
	$num=mysql_num_rows($query);
	
		if($num==0)
		{
			
		echo "No result found";
			
			}
			else
			{
	?>
	<table class="table">
    <?php
	while($row=mysql_fetch_array($query))
	{
		
		{
		$p=$row['dp'];
		$detid=$row['id'];
		?>
        <tr>
		<td width=30%>
	<a href="userdetails.php?url=<?php echo $detid ;?>">	<img src="<?php echo $p; ?>"  width="150px" height="120px" style="border:2px solid rgba(24,24,24,1);"/> </a></td>
        <td >
        <div style="text-transform:capitalize;margin-top:10px;margin-left:-30px;">
		<?php echo $row['name']. " ".$row['surname']."<br>";?>
        
		<?Php echo $row['male']."<br>"; ?></div></td>
        <td>
        <a href="userdetails.php?url=<?php echo $detid ;?>"><button type="button" class="btn btn-success btn-lg" style="margin-top:30px;">Read more</button></a></td>
        <td> <a href="search.php?req=<?php echo $detid ;?>"><button type="button" class="btn btn-success btn-lg" style="margin-top:30px;">Add friend</button></a></td>
        </tr>
		
		
		<?php
		
		
		}		
		
		}
	
			}
	
	}
?>
</table>

<?php
$userid=  $_SESSION['k'];
    if(isset($_REQUEST['req']))
	{
		$r_sender=$userid;
		
		$r_rec=$_REQUEST['req'];
		
		$my=mysql_query("insert into friends(r_rec,r_sender)values('$r_rec','$r_sender')")or die(mysql_error());
		if($my)
		{
			
			?>
            
            
           <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ab"> Click </button>
            
            	<div class="modal fade" role="dialog" id="ab">
                
                	<div class="modal-dialog">
                    
                    	<div class="modal-content">
                        
                        	<div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            </div>
                        aaSA Sa sAS as AS  a sASasvA <BR />
                        SDASD ASDAS DASD ASDASVD ADS AS<BR />
                        AS DADHASDAD AVDASD ASDVADS AVSD AV
                        
                        
                        	<div class="modal-footer">
                            Hello
                            </div>
                        
                        </div>
                    </div>
                
                </div>
            -->
            
            <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Request has been sent..
</div>

            <?php
			
			}
		else
		{
			
			
			}
		
		}
?>
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
</div>



