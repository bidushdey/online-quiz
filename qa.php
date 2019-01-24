'<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="stylesheet" href="qa.css">
</head>
<body >

<br><br>

<div class="container" style="background-color:#f1f1f1">
<form method="post" action="login.php"width:50;>
    <button type="submit">Back</button>10<button type="submit">Next</button>

</form>
<hr>
<?php
$conn=mysqli_connect("localhost","root","","project");

$query="SELECT * FROM questionbank ";
$get=mysqli_query($conn,$query);
?>
<table align="center" height="10%" width="70%">
<tr>
<th>S.no</th>
<th>Question</th>
<th>Answer</th>
</tr>
<?php 
//$count=1;
while ($row = mysqli_fetch_array($get)) {
  //  if($count<=10)
    
    echo "<tr><td>", $row["id"],"</td><td>",
    $row["question"],"</td><td >",
     $row["e"],"</td></tr>";
    // $count++;
    
}
?>

</table>
<?php
mysqli_close($conn);
?>
</div>
</body>

</html>