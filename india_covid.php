<!DOCTYPE html>

<html>

<head>

  <title style="color:#1ad1ff">COVID-19 |  UPDATE | LIVE |2020 </title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Reported Cases and Deaths by Country, Territory, or Conveyance. The coronavirus COVID-19 is affecting 210 countries and territories around the world and ">
  <meta name="keyword" content="Reported Cases and Deaths by Country, Territory, or Conveyance. The coronavirus COVID-19 is affecting 210 countries and territories around the world and">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>
<!-- *********************** NavBar start ********************** -->

<div class="bd-example">
<nav class="navbar navbar-expand-lg   navbar-dark bg-primary p-3">
  <a class="navbar-brand pl-auto" href="https://www.biswajit.co.in/">CORONAVRIUS UPDATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto pr-5 text-uppercase ">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.biswajit.co.in/" style="background-color:#03A5FC">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About_covid19.php" style="background-color:#03A5FC">about</a>
      </li>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="background-color:#03A5FC">
        COVID-19 UPDATE
      </a>
      <div class="dropdown-menu" style="background-color:#66C8FD">
        <a class="dropdown-item" href="World_covid.php" >world update</a>
        <a class="dropdown-item" href="india_covid.php">India Update</a>
        <a class="dropdown-item" href="Day_wise.php">day wise update</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="Symptoms_covid19.php" style="background-color:#03A5FC">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Prevention_covid19.php" style="background-color:#03A5FC">prevention</a>
        <li class="nav-item">
        <a class="nav-link" href="Contact_covid.php" style="background-color:#03A5FC">contact</a>
      </li>
      
    </ul>
  </div>
</nav>
</div>
<!-- *********************** NavBar end  ********************** -->
<marquee class="container  pt-5 " style="color:#007BFF">This Website Founder & CO-founder: Mr.Biswajit </marquee>
<!-- *********************** corona lastest updates ********************** -->

<section class="corona_updata container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center pt-5 pb-5" style="color:#53ff1a">covid-19 india live update</h3>
    
  </div>

  <div class="table-responsive text-capitalize">

    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
        <th style="background-color:#03a5fc">last updated time</th>
        <th style="background-color:#f51493">state</th>
        <th style="background-color:#f58414">confirmed</th>
        <th style="background-color:#F74300">active</th>
        <th style="background-color:#1a821a">recovered</th>
        <th style="background-color:#ad0303">deaths</th>
        <th style="background-color:#f58414">delta confirmed</th>
        <th style="background-color:#ad0303">delta deaths</th>

      </tr>


<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data,true);


$countryscount = count($coronalive['statewise']);

$i=1;
while ($i < $countryscount) {


?>

<tr>
  <td style="background-color:#3dffcf"><?php echo $coronalive['statewise'][$i]['lastupdatedtime']  ?></td>


  <td style="background-color:#ef3dff"><?php echo $coronalive['statewise'][$i]['state']  ?></td>
  <td style="background-color:#f5bc14"><?php echo $coronalive['statewise'][$i]['confirmed']  ?></td>
  <td style="background-color:#FF9248"><?php echo $coronalive['statewise'][$i]['active']  ?></td>

  <td style="background-color:#46e346"><?php echo $coronalive['statewise'][$i]['recovered']  ?></td>
  <td style="background-color:#cf3434"><?php echo $coronalive['statewise'][$i]['deaths']  ?></td>
  <td style="background-color:#f5bc14"><?php echo $coronalive['statewise'][$i]['deltaconfirmed']  ?></td>
  <td style="background-color:#cf3434"><?php echo $coronalive['statewise'][$i]['deltadeaths']  ?></td>
    
  </tr> 


<?php
  $i++;
}

?>

    </table>
    
  </div>
    
  </div>
  

</section>

<marquee class="container  pt-5 " style="color:#007BFF">This Website Founder & CO-founder: Mr.Biswajit </marquee>
<!-- *********************** scrolltop ********************** -->


<div class="container scrolltop float-right pr-5r">

  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn">
    
  </i>
  
</div>

<!-- *********************** scrolltop End ********************** -->


<!-- *********************** footer ********************** -->

<footer class="mt-5 " >


<!-- Footer -->
<footer class="page-footer  pt-5" style="background-color:#000000">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left" style="color:#ffffff">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">About us</h5>
        <p><strong>This is a unofficial website of any government or Organization ! No profit is gain through it !</strong><br>  This is created by Mr.Biswajit. Website is worldwide active on 24 april 2020. This Website motive is to Show Covid-19(Coronavirus) Latest update . If you see any error than please try to contact us</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-auto ">

      <!-- Grid column -->
      
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 ">

        <!-- Links -->
        <h5 class="text-uppercase " >Quick Links</h5>

        <ul class="list-unstyled " >
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="About_covid19.php">About</a>
          </li>
          <li>
            <a href="connect.php">FeedBack Us</a>
          </li>
          <li>
            <a href="Privacy_Policy.php">Privacy Policy</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase mr-3">Contact Us</h5>

    
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div  class="footer-copyright text-center py-3"  style="color:#ffffff">© 2020 Copyright:
    <a href="https://biswajit.co.in/"> Biswajit.co.in</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</footer>


<!-- *********************** footer end ********************** -->

<script src="https://ajax.googleapis.com/ajax/libs/ jquery/3.4.1/jquery.min.js">
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/ waypoints/4.0.1/jquery.Waypoints.min.js" integrity="sha256-jDNOKIOq2KN5QZTCBTENsp76FnfMEttF6AV2DF2FFNE=" crossorigin="anonymous">
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0 jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNOMODHOAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



<script>


// ****************** top arrow *************************//
  

mybutton = document.getElementById("myBtn");
// when the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction()  {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)

{

mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// when the user clicks on the button, scroll to the top of the of the document
function topFunction () {
  document.body.scrollTop = 0; // For safari
  document.documentElement.scrollTop = 0; // For chrome, Firefox, IE and Opera  
}



</script>



</body>
</html>
