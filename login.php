<?php 
  require("config.php");
?>
<?php
  session_start();
  if (isset($_POST['submit'])) {
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    
   $query="SELECT * FROM `register` INNER JOIN roles ON register.role=roles.type WHERE username='".$uname."' AND password='".$password."'";
    $result=mysqli_query($conn,$query);

    while ($row=mysqli_fetch_assoc($result)) {
       // print_r($row);
       if ($row['role']=="admin") {
           $_SESSION['admin']=$row;
          header("Location:admin.php");
        } 
        elseif($row["role"]=="user"){
          $_SESSION['user']=$row;
          header("Location:user.php");
        }
        else{
          echo "Your UserName Or Password Not Matched!";
        }
    }
    
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>RoleWise</title>
</head>
<body>
  <h1>Login Data</h1>
    <fieldset>
      <legend>Login Form</legend>
      <form accept="" method="POST" >
        <table>
          
          <tr>
            <td><label>UserName</label></td>
            <td><input type="text" name="uname" placeholder="Enter User Name"></td>
          </tr>
          <tr>
            <td><label>Password</label></td>
            <td><input type="text" name="password" placeholder="Enter Password"></td>
          </tr>
          <tr>
            <td><input type="submit" name="submit" value="Login"></td>
        </tr>
        </table>
      </form>
    </fieldset>
</body>
</html>