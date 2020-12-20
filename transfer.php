
<?php
  session_start();
  if(isset($_POST['transfer-submit']))
  {
      $amount=$_POST['amount'];
      $acc_id=$_SESSION['acc_id'];
      $tacc_id=$_SESSION['tacc_id'];

      $db = mysqli_connect("localhost", "root", "", "bank");
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
    
    <div class="col-sm">
      <h6> Sender Details
                 <h6>Transaction Id:   <?php echo $row["Transaction_id"];?> <br></h6>
                 <h6> Sender Name:   <?php echo $row["Sname"];?> <br></h6>
                 <p> Sender Account id  <?php echo $row["Sacc_id"]; ?><br>
                  Receiver Name   <?php echo $row["Rname"];?><br></p>
                  <p> Receiver Account id  <?php echo $row["Racc_id"]; ?><br>
      Amount transferd  <?php echo $row["Amount"];?><br></p>
                  Date of transaction   <?php echo $row["Date"];?><br></p>
                                     
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