
<?php

$name=$_POST['name'];
$email=$_POST['email'];
$pas=$_POST['psw'];
$dob=$_POST['dt'];
$phone=$_POST['phone'];
$status=$_POST['status'];

$conn=mysqli_connect("localhost","root","","project");
if(!$conn)
{
    echo "NOt connected";
}
else{
    echo "connected";
}

$query1="SELECT * FROM login WHERE email='$email'";
$get=mysqli_query($conn,$query1);
if(mysqli_num_rows($get)>0)
{
    header('Location: signup.html');
    echo '<script language="javascript">';
    echo 'alert("Already have a account!")';
    echo '</script>';

}

else{
  $query="INSERT INTO login(name,email,password,dob,status,phoneno)VALUES ('$name','$email','$pas',$dob,'$status',$phone)";
if(!mysqli_query($conn,$query))
{
    echo "Error: " . $query . "<br>" . mysqli_error($conn); }
}   
header("location:signup.html");
mysqli_close($conn);

?>