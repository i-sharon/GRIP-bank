
<?php
  session_start();
  if(isset($_POST['transfer-submit']))
  {
      $tacc_id=$_POST['tacc_id'];
      $_SESSION['tacc_id']=$tacc_id;
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
<h4 style="padding:20px;" class="text-white bg-dark text-center"> Enter The Amount To Transfer</h4><br>

<?php    
        $db = mysqli_connect("localhost", "root", "", "bank");

$list="select * from customer where Account_id='$tacc_id'";
$result=mysqli_query($db,$list);?>

<?php
                while($row = $result->fetch_assoc()) {
                    ?>
    
    <div class="col-sm">
                 <h6>Account Id:   <?php echo $row["Account_id"];?> <br></h6>
                 <h6>Name:   <?php echo $row["Name"];?> <br></h6>
                 <p> Email  <?php echo $row["Email"]; ?><br>
                  Balance   <?php echo $row["Balance"];?><br></p>
                                     
                </div>

<hr>
                  
   <?php         
        }   
        ?>

        <form action='transfer.php' method='POST' align='center'> 
            <input type="number" name="amount" id="amount" placeholder="Amount"/><br><br>
            
            <button type='submit' name='transfer-submit' class='btn btn-success btn-sm'>Submit</button>
    </form>
     
</body>
</html>