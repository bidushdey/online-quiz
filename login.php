<?php
session_start();
?>
<?php
$email=$_POST['email'];
$pas=$_POST['psw'];

$conn=mysqli_connect("localhost","root","","project");
if(!$conn)
{
    echo "NOt connected";
}
else{
    echo "connected";
}
$query="SELECT * FROM login WHERE email='$email' and password='$pas'";
$get=mysqli_query($conn,$query);
if(mysqli_num_rows($get)>0)
{
    $query1="SELECT * FROM login WHERE email='$email' and password='$pas'";

    $query3 =mysqli_query($conn,$query1);
    $record=mysqli_fetch_array($query3);
    $name=$record["name"];
    $id=$record["email"];
    $dob=$record["dob"];
    $status=$record["status"];
    $phone=$record["phoneno"];
    $id1=$record["id"];

    $_SESSION['name']=$name;
    $_SESSION['email']=$id;
    $_SESSION['dob']=$dob;
    $_SESSION['status']=$status;
    $_SESSION['phone']=$phone;
    $_SESSION['id']=$id1;
    if($status=="student")
    {
    header('Location: spage.html');
    }
    else{
        header('Location: tpage.html');
    }
}
else
{
    header('Location:login.html');
    echo '<script language="javascript">';
    echo 'alert("You donot have account or invalid username or password")';
    echo '</script>';

}

?>