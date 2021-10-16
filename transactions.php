<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
     integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" href="css/reset.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/style3.css" />
<style>
body {
  background-image: url("tran.jpg");
  min-height: 1200px;
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
</style>
</head>

<body style="background-color : indigo;">
<!--Start Navigation bar-->
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="customers.php">Cutomer</a></li>
  <li><a href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Convertor</a></li>

  </li>
</ul>

	<div class="container">
        <h2 class="text-center pt-4" style="color : white; font-size:80px; font-family:Harlow Solid">Transfer History</h2> 
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : white;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : white;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

	<div class="footer">
 <p><b>&copy 2021, Mamta Chauhan</b> </br>Chairman || Credible Bank <br> <b>The Spark Foundation</b></p>  
 </div>
</body>
</html>