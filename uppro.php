<!DOCTYPE html>
<html>
   <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
session_start();
?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="uppro.css">
</head>
<body style="background-color:yellow;">

<?php
            $name=$_SESSION['name'];
            $email=$_SESSION['email'];
            $dob=$_SESSION['dob'];
            $phone=$_SESSION['phone'];
            $status=$_SESSION['status'];
          // $pass=$_SESSION['password'];
            //$id=$_SESSION['id'];
            
            ?>

<br>
<div class="container" background="1.jpeg">
<table width="55%" height="60%" align="center" bgcolor="#f1f1f1" frame="box">
<form action="uppr.php" method="POST">
<tr><th colspan="2">
 <h1 ><font size="8"><b>Update</b></font></h1>
</th></tr>
<tr><td>
<p><font size="5"><b>Name</p><br><?php echo "$name" ?></b></font></p><hr>
<p><font size="5"><b>Status</p><?php echo "$status" ?></b></font></p><br>
</td>
 <td>
    <label for="phone">Enter your phone number:</label><br>

       <input type="tel" id="phone" name="phone"
       required>  <br><br>

       <label for="dt">Date Of Birth: </label><br><br>
	 <input name="dt" type="date"/><br><br>
</td></tr>
<tr><th colspan="2">
 <button type="submit" class="registerbtnh">Update</button><br>
</th></tr>
</form>
</table>
</div>
</body>
</html>