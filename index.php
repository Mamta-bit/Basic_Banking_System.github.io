<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: tahoma;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 5px;
  text-align: center;
  font-family:tahoma;
  color:white;
  background:  #666666;

}
.header img {
  float: left;
border-radius:50%;
  width: 120px;
  height: 120px;
  padding:0px;
background:transparent;
}
.header h1 {
  font-size: 50px;
text-align: center;

}

/*Style the top navigation bar */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #332;
}

li {
  float: left;
}
/* Style the navigation links */
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
/* Create single columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 100%;
}

/* fake image */
.img {  
background-image: url('payment.jpg');
  width: 100%;
  padding: 20px;
background-repeat:no-repeat;

}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

.social {
  column-count: 7;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer*/
.footer {
  padding: 20px;
  text-align: center;
  background: crimson; 
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) 
{
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
.fa {
  padding: 10px;
  font-size: 40px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #b30047;
  color: white;
}

.fa-github {
  background: #262626;
  color: white;
}

</style>
</head>
<body>

<div class="header">
<img style="display: inline;" src="log.jpg">
  <h1 style="display: inline;">Credible Bank</h1>
  <p><h4>Your Bank in Your hand@</h4></p>
</div>


<ul>
  <li><a href="#home">Home</a></li>
  <li class="dropdown">
<a href="javascript:void(0)" class="dropbtn">Customers</a>
    <div class="dropdown-content">
      <a href="customers.php">View All Customes List</a>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Transaction</a>
    <div class="dropdown-content">
      <a href="transactions.php">Transaction History</a>
     <!-- <a href="#">Transfer History/Show all Transaction</a> -->
   <li class="dropdown">
   <a href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR" class="dropbtn">Currency Converter</a>
    
    </div>
  </li>
</ul>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
     <h1 style='text-align:center; margin-top:0px; color:dark grey'> BASIC BANKING SYSTEM</marquee></h1>
      <div class="img" style="height:350px;">
<pre style='color:crimson; font-size:40px; font-family:cooper std;text-align:center;'>
<marquee behavior="scroll" direction="up" scrollamount="3" height="50px" >We build</marquee>
<marquee behavior="scroll" direction="up" scrollamount="3" height="50px">Easy to use</marquee>
<marquee behavior="scroll" direction="up" scrollamount="3" height="50px">For</marquee>
<marquee behavior="scroll" direction="up" scrollamount="3" height="50px">Everyone</pre></marquee></div>
      <p>Banks Status</p>
      <p>“Everyday is a bank account, and time is our currency. No one is rich, no one is poor, we've got 24 hours each.” “It is well enough that people of the nation do not understand our banking and monetary system, for if they did, I believe there would be a revolution before tomorrow morning.”</p>
    </div>
   
    <div class="card">
      <h2>Like, Follow and Subscribe us on</h3>
          <div class="social">
                     <h4 style=color:blue;>Linkdin<a href="https://www.linkedin.com/in/mamta-chauhan-b14a44221" class="fa fa-linkedin"></a></h4><h4 style=color:blue;> facebook<a href="https://www.facebook.com/profile.php" class="fa fa-facebook"></a></h4><h4> github<a href="https://github.com/Mamta-bit" class="fa fa-github"></a></h4><h4 style=color:red;> Youtube<a href="#" class="fa fa-youtube"></a></h4><h4 style=color:#b30047;> Instagram<a href="#" class="fa fa-instagram"></a></h4>
         </div>
    </div>
  </div>
</div>

<div class="footer">
  <h2 style="color:#f2f2f2">&copy;Credible Bank of Sparks Foundation Since:2021 </h2><h4  style="color:#f2f2f2;">Name: Mamta Chauhan || Contact us: 9711459779 || email id: mamtachauhan.fw@gmail.com </h4>
</div>
 </body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 10px;
  font-size: 40px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}
</style>
</head> 