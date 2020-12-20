
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
  <link rel="stylesheet" href="nav.css">  <!--bootstrap-->
 

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

       <p class="text-white bg-dark text-center" style="padding:30px;"> Transaction History!!</p><br>
        
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
  
 

$list="select * from transaction";
$result=mysqli_query($db,$list);?>

<table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Transaction Id</th>
                        <th scope="col">Account Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Account Id</th>
                        <th scope="col">Name</th> 
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>   
                        
                    </tr>
                </thead>
<?php
                while($row = $result->fetch_assoc()) {
                    ?>
    
                <tbody>
                    <tr>
              

                     <td ><?php echo $row["Transaction_id"]; ?></td> 
                      <td ><?php echo $row["Sacc_id"]; ?></td>
                      <td> <?php echo $row["Sname"];?></td>
                      <td> <?php echo $row["Racc_id"]; ?></td>
                      <td> <?php echo $row["Rname"];?></td>
                      <td> <?php echo $row["Amount"];?></td>
                      <td> <?php echo $row["Date"];?></td>
                    
                  
                    </tr>
              </tbody>
   <?php         
        }   
        ?>
</table>      
</body>
</html>