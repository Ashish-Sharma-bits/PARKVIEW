
<?php

echo "hi";
session_start();
if( isset( $_SESSION['email'] ) )
     {
	 }
	else{
	 exit;
  }
   ?>
<?php include 'admin-main.php';?>
<?php 
include('inc/dbcon.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="css/mystyles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/dt_bootstrap.css">

</head>
<body>
<section class="HomeKisii">
<img src="..\img\gov.JPG" alt="" style="width:70vw;height:75vh">


<div class="cont">
<br>
<br>
<foxrm action="edit.php" method="post">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Transaction Id</th>
                                    <th>Date</th>
									 <th>Amount</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              	<?php 
								$no=0;
							$query=mysqli_query($connection,"select * from transactions")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
							$no=$no+1;
							?>
                                
										<tr>
										 <td><?php echo $no ?></td>
                                         <td><?php echo $row['id'] ?></td>
                                         <td><?php echo $row['d1'] ?></td>
                                         <td><?php echo $row['charge'] ?></td>
                                        
										        </tr>
                         <?php  } ?>
						 
                            </tbody>
                        </table>
						
</form>



</div>


</section>
<section class="kisii-bottom">
</section>
</body>
</html>
