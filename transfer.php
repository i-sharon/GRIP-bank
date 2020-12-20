
<?php
  session_start();
  if(isset($_POST['transfer-submit']))
  {
      $amount=$_POST['amount'];
      $acc_id=$_SESSION['acc_id'];
      $tacc_id=$_SESSION['tacc_id'];
      echo $_SESSION['Balance'];

      if($amount<=$_SESSION['Balance']){

      $db = mysqli_connect("localhost", "root", "", "bank");
      $q=" UPDATE CUSTOMER SET Balance=Balance+'$amount' where Account_id='$tacc_id'";
      mysqli_query($db,$q);

      $q=" UPDATE CUSTOMER SET Balance=Balance-'$amount' where Account_id='$acc_id'";
      mysqli_query($db,$q);
      
      $s="select name from customer where Account_id='$acc_id'";
$result=mysqli_query($db,$s);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];

$s="select name from customer where Account_id='$tacc_id'";
$result=mysqli_query($db,$s);
$row = mysqli_fetch_assoc($result);
$tname=$row['name'];

    
 $sql="INSERT INTO TRANSACTION(Sacc_id ,Sname ,Racc_id ,Rname ,Amount) VALUES ('$acc_id','$name','$tacc_id','$tname','$amount')";
 mysqli_query($db,$sql);    

 $trans_id=$db->insert_id;
 echo $trans_id;

    
  }

  else{

    header('location:transferAmount.php?amount=fail');


  }
}
 
?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
  <link rel="stylesheet" href="nav.css">
 

    <style>
      

</style>
</head>

<div class="topnav">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
<a href="" class="w3-bar-item ">Grip Bank</a>

  <div class="topnav-right">
  <a href="home.html" class="w3-bar-item w3-button">Home</a>
  </div>
</div>
</div>

<body>
<h4 style="padding:20px;" class="text-white bg-dark text-center">Transaction Details</h4><br>

<?php    
        $db = mysqli_connect("localhost", "root", "", "bank");

$list="select * from transaction where Transaction_id='$trans_id'";
$result=mysqli_query($db,$list);?>

<?php
                while($row = $result->fetch_assoc()) {
                    ?>
    
    <div class ="centered">
      <div style="background-color: #ddd;   padding:7px; border-style: solid;">
        <p><b> Transaction ID: </b>  <?php echo $row["Transaction_id"];?> <br></p><br>
        <p><b> Sender Name: </b>  <?php echo $row["Sname"];?> <br></p>
        <p><b> Sender Account ID: </b> <?php echo $row["Sacc_id"]; ?><br></p>
        <p><b> Receiver Name:  </b> <?php echo $row["Rname"];?><br></p>
        <p><b> Receiver Account ID: </b> <?php echo $row["Racc_id"]; ?><br><br>
        <p><b> Amount: </b> <?php echo $row["Amount"];?><br></p>
        <p><b> Date:  </b> <?php echo $row["Date"];?><br></p>
      </div>                         
    </div>

<hr>
                  
   <?php         
        }   
        
   
                
        //session_destroy();
        ?>
<form action='home.html' method='POST' align='center'> 
             <button type='submit' name='transfer-submit' class='btn btn-success btn-sm'>Home</button><br><br>
             
    </form>

  
<form action='allCustomers.php' method='POST' align='center'> 
             
             <button type='submit' name='transfer-submit' class='btn btn-success btn-sm'>Transfer again</button>
    </form>
    
     
</body>
</html>