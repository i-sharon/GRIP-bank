<?php
  session_start();

 
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

       <p class="text-white bg-dark text-center" style="padding:30px;"> Choose your Account</p><br>';
        
        <?php 
$db = mysqli_connect("localhost", "root", "", "bank");
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5 class="bg-success text-center">Delete was successfull</h5>';
        }
    }  
  
 

$list="select * from customer";
$result=mysqli_query($db,$list);?>

<table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Account Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Balance</th>    
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead>
<?php
                while($row = $result->fetch_assoc()) {
                    ?>
    
                <tbody>
                    <tr>
                    <form action='viewCustomer.php' method='POST'>
                    <input name='acc_id' type='hidden' value="<?php echo $row["Account_id"]; ?>"/>
                      
                      <td ><?php echo $row["Account_id"]; ?></td>
                      <td> <?php echo $row["Name"];?></td>
                      <td> <?php echo $row["Email"]; ?></td>
                      <td> <?php echo $row["Balance"];?></td>
                     
                      <td class='table-danger'><button type='submit' name='submit' class='btn btn-danger btn-sm'>View</button></td>
                          </form>
                    </tr>
              </tbody>
   <?php         
        }   
        ?>
</table>      
</body>
</html>