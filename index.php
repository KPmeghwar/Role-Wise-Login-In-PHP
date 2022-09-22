<?php 
  require("config.php");
?>
<?php
  if (isset($_POST['submit'])) {
  	// print_r($_POST);
    // die;
    // print_r($_FILES);
  	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
  	$password=$_POST['password'];
    $type=$_POST['type'];
   $query="INSERT INTO `register`(`firstname`, `lastname`, `username`, `password`,`role`) 
   VALUES('".$fname."','".$lname."','".$uname."','".$password."','".$type."')";
   // echo $query;
  	$result=mysqli_query($conn,$query);
  	if ($result) {
  		echo "Data Addedd";
  	}
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>RoleWise</title>
</head>
<body>
	<h1>Register Data</h1>
    <fieldset>
    	<legend>Register Form</legend>
    	<form accept="" method="POST" >
    		<table>
    			<tr>
    				<td><label>First Name</label></td>
    				<td><input type="text" name="fname" placeholder="Enter First Name"></td>
    			</tr>
          <tr>
            <td><label>Last Name</label></td>
            <td><input type="text" name="lname" placeholder="Enter Last Name"></td>
          </tr>
    			<tr>
    				<td><label>UserName</label></td>
    				<td><input type="text" name="uname" placeholder="Enter User Name"></td>
    			</tr>
    			<tr>
    				<td><label>Password</label></td>
    				<td><input type="text" name="password" placeholder="Enter Password"></td>
    			</tr>
          <tr>
            <td><label>Role</label></td>
             <td><select name="type">
                  <option>Select Role</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
             </select></td>
          </tr>
    			<tr>
    				<td><input type="submit" name="submit" value="Submit"></td>
    		</tr>
    		</table>
    	</form>
    </fieldset>
</body>
</html>