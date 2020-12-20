
<?php
  session_start();
  if(isset($_POST['submit']))
  {
      $acc_id=$_POST['acc_id'];
      $_SESSION['acc_id']=$acc_id;
  }
 
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
 

    <style>
        .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4682b4;
  color: white;
}

.topnav-right {
  float: right;
}
.col-sm{
    padding: 5px;
    background-color: #ddd;
}

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
<p style="padding:20px;" class="text-white bg-dark text-center"> Enter Your Credentials To Continue</p><br>

<?php    
        $db = mysqli_connect("localhost", "root", "", "bank");

$list="select * from customer where Account_id='$acc_id'";
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

        <form action='validate.php' method='POST' align='center'> 
            <input type="email" name="email" id="email" placeholder="Email"/><br><br>
            <input type="password" name="password" id="password" placeholder="Password"/><br><br>
            <button type='submit' name='validate-submit' class='btn btn-success btn-sm'>Submit</button>
    </form>
     
</body>
</html>