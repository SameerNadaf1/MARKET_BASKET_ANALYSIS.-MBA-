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
                            <span class="style1">Employee Details</span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Employe Details</span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">



<?php include('db_connect.php'); ?>
<body>

<form name="form1" method="post" action="employees_insert.php" id="formID">
<table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td colspan="2"><div align="center">Employe Details </div></td>
    </tr>
    <tr>
      <td width="194"><strong>Employee Name</strong></td>
      <td width="144"><input name="emp_name" type="text" id="emp_name" class="validate[required,custom[onlyLetter]]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td><textarea name="address" id="address"  class="validate[required]] form-control"></textarea></td>
    </tr>
    <tr>
      <td><strong>Empolyee Phone Number</strong></td>
      <td><input name="emp_phone" type="text" id="emp_phone" class="validate[required,custom[mobile]]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Gender</strong></td>
      <td><input name="gender" type="radio" value="male" id="male" class="validate[required]] " >
        male 
        <input name="gender" type="radio" value="female" id="female"  class="validate[required]] ">
        female</td>
    </tr>
    <tr>
      <td><strong>Suplier Id </strong></td>
      <td><select name="sup_id" id="sup_id" class="validate[required,custom[onlyNumber]]] form-control">
       
		<?php
		$uname=$_SESSION["uname"];
$sql="select * from suppliers where sup_email='$uname' ";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$id=$row["sup_id"];
?>
<option value="<?php echo $id; ?>"><?php echo $row["sup_name"]; ?>	</option>
<?php
}
?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
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
			<?php include('footer.php');?>
			
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
 <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <script src="assets/js/custom-scripts.js"></script> 
    <?php include('val.php'); ?>
   
</body>
</html>
