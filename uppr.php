<?php
session_start();
?>
<?php
$id=$_SESSION['id'];
$pass=$_SESSION['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$pas=$_POST['psw'];
$dob=$_POST['dt'];
$phone=$_POST['phone'];
$status=$_SESSION['status'];

$conn=mysqli_connect("localhost","root","","project");

$query="SELECT * FROM login WHERE password='$pass' and id=$id";
$get=mysqli_query($conn,$query);
if(mysqli_num_rows($get)>0){

    $query1="UPDATE login SET nameno='$phone' WHERE id=$id";
    $query2="UPDATE login SET dob='$dob' WHERE id=$id";
    mysqli_query($conn,$query1);
    mysqli_query($conn,$query2);
    ?>
<script type="text/javascript">
alert("review your answer");
window.location.href = "uppro.php";
</script>
<?php
}
else{
    ?>
<script type="text/javascript">
alert("review your answer");
window.location.href = "uppro.php";
</script>
<?php
}
header("location:uppro.php");
mysqli_close($conn);
?>