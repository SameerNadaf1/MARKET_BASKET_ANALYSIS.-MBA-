<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php include('medatada.php');?>
   <?php include('header.php');?>
   <?php include('sidebar.php');?>
   <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
   </style>
<body>
  
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <span class="style1">Customer Details </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Customer Details </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('val.php'); ?>
<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST['id'];
$sql="select * from customer where cust_id='$id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?>

<form name="form1" method="post" action="customer_update1.php" id="formID">
 <input type="hidden" value="<?php echo $row['cust_id'];?>" name="cust_id" >
<table width="437" height="260" align="center" class="table table-striped table-bordered table-hover">
   
    <tr>
      <td width="186"><strong>Customer Name </strong></td>
      <td width="141"><input name="cust_name" type="text" id="cust_name" value="<?php echo $row['cust_name']; ?>" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Customer Phone Number </strong></td>
      <td><input name="cust_phone" type="text" id="cust_phone" value="<?php echo $row['cust_phone']; ?>" class="validate[required,custom[mobile]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Customer Email </strong></td>
      <td><input name="cust_email" type="text" id="cust_email" value="<?php echo $row['cust_email']; ?>" class="validate[required,custom[email]] form-control"></td>
    </tr>
    <tr>
      <td height="32"><strong>Date </strong></td>
      <td><input name="date_become_cust" type="date" id="date_become_cust" value="<?php echo $row['date_become_cust']; ?>" class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Customer City </strong></td>
      <td><input name="cust_city" type="text" id="cust_city" value="<?php echo $row['cust_city']; ?>" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
	<tr>
      <td><strong>&nbsp;Suppliers</strong></td>
      <td><select name="sup_id" id="sup_id" class="validate[required] form-control">
	  <option value="">Select</option>
	  <?php include('db_connect.php'); ?>
	  <?php 
	  $sql="select * from suppliers";
	  $res=$conn->query($sql);
	  while($row1=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row1['sup_id']; ?>" <?php if($row1['sup_id']==$row['sup_id']) {?> selected <?php } ?>><?php echo $row1['sup_name']; ?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Pincode</strong></td>
      <td><input name="pincode" type="text" id="pincode" value="<?php echo $row['pincode']; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success">        <input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
	<?php include('footer.php');?>
	
 <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <script src="assets/js/custom-scripts.js"></script> 
    
   <?php include('val.php'); ?>
</body>
</html>
