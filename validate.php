<?php
  session_start();
  if(isset($_POST['validate-submit']))
  {
      $email=$_POST['email'];
      $password=$_POST['password'];
      echo $_SESSION['acc_id'];

      
  }
  $conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'bank');

$acc_id=$_SESSION['acc_id'];
$s="select * from customer where Account_id='$acc_id' && Password='$password' && Email='$email'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1){

	header('location:chooseAcc.php');
}
else
{
	header('location:viewCustomer.php?login=fail');
}

 
?>