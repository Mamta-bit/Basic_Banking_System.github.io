<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" href="css/reset.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/style3.css" />

    <style type="text/css">

body {
  background-image: url("customer.jpg");
  min-height: 1000px;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/*Style the top navigation bar */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #332;
  display:flex;
}

li {
flex-direction:right;

}
/* Style the navigation links */
li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
a:hover {
  background-color: red;
  text-decoration: none;
  color:#000;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: crimson;
   color: white;
   text-align: center;

 button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }

    </style>
</head>
  <body >
                  <!--Start Navigation bar-->
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="transactions.php">Transaction History</a></li>
  <li><a href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Converter</a></li>
  
</ul>
	<!--End Navigation bar-->
</body>

<body >
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<div class="container">
        <h1 class="text-center pt-4" style="color : white;font-size: 80px;font-family:Harlow Solid" >Welcome to the Cutomer's Profile </h1>
        <h2 class="text-center pt-4" style="color : white;font-size: 40px;" >Here, All Customers List</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:white;">
                        <thead style="color : white;">
                            <tr>
                            <th scope="col" class="text-center py-2">Account No.</th>
                            <th scope="col" class="text-center py-2">Account Holder Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Account Balance(in Rs.)</th>
                            <th scope="col" class="text-center py-2">View Detail</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : white;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transfer money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
</head> 

<div class="footer">
 	<p>&copy 2021  <b>Mamta Chauhan</b> </br>Chairman, Credible Bank <br> <b>The Spark Foundation</b></p>  
 </div>