<!DOCTYPE html>

<html>

<head>

	<title>COVID-19 |  UPDATE | LIVE |2020</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Reported Cases and Deaths by Country, Territory, or Conveyance. The coronavirus COVID-19 is affecting 210 countries and territories around the world and ">
  <meta name="keyword" content="Reported Cases and Deaths by Country, Territory, or Conveyance. The coronavirus COVID-19 is affecting 210 countries and territories around the world and">
   <meta name='dmca-site-verification' content='Z3kwbG8xRjJ6Y1dnckZiajJPYWN1dz090' />
   
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  
  
  
  
  
  
</head>



</head>

<body>

<!-- *********************** Nav Bar ********************** -->

<div class="bd-example">
<nav class="navbar navbar-expand-lg   navbar-dark bg-primary p-3">
  <a class="navbar-brand pl-auto" href="index.php">CORONAVRIUS UPDATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto pr-5 text-uppercase ">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.biswajit.co.in" style="background-color:#03A5FC">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About_covid19.php" style="background-color:#03A5FC">about</a>
      </li>
       <div class="dropdown">
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="background-color:#03A5FC">
        COVID-19 UPDATE
      </a>
      <div class="dropdown-menu" style="background-color:#66C8FD">
        <a class="dropdown-item" href="World_covid.php" >world update</a>
        <a class="dropdown-item" href="india_covid.php" >india update</a>
        <a class="dropdown-item" href="Day_wise.php">day wise update</a>
      </div>
    </li>
    </div>
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

<marquee class="container  pt-5 " style="color:#007BFF">This Website Founder & CO-founder: Mr.Biswajit  </marquee>

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="image/world.png" width="150" height="150">
				
			</div>
			
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1 style="color:#33ff33">Let's stay safe & Fight Together Against Cor<span class="corona_rot">
					<img src="image/virus.png"width="50" height="50">
				</span>na Virus</h1>
				
			</div>
		</div>
		
	</div>
	
</div>


<!-- *********************** Nav Bar end********************** -->


<!-- *********************** corona lastest updates ********************** -->

<section class="corona_updata container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center" style="color:#6699ff">covid-19 Live update</h3>
		
	</div>

	<div class="table-responsive">

		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th style="background-color:#03a5fc">Last Updata</th>
				<th style="background-color:#f51493">Country</th>
				<th style="background-color:#f58414">Total Confirmed</th>
				<th style="background-color:#1a821a">Total Recovered</th>
				<th style="background-color:#ad0303">Total Deaths</th>
				<th style="background-color:#f58414">New Confirmed</th>
				<th style="background-color:#1a821a">New Recovered</th>
				<th style="background-color:#ad0303">New Deaths</th>

			</tr>


<?php

$data = file_get_contents('https://api.covid19api.com/summary');
$coronalive = json_decode($data,true);


$countryscount = count($coronalive['Countries']);

$i=0;
while ($i < $countryscount) {


?>

<tr>
	<td style="background-color:#3dffcf"><?php echo $coronalive['Countries'][$i]['Date']  ?></td>
	<td style="background-color:#ef3dff"><?php echo $coronalive['Countries'][$i]['Country' ] ?></td>
	<td style="background-color:#f5bc14"><?php echo $coronalive['Countries'][$i]['TotalConfirmed']  ?></td>
	<td style="background-color:#46e346"><?php echo $coronalive['Countries'][$i]['TotalRecovered']  ?></td>

	<td style="background-color:#cf3434"><?php echo $coronalive['Countries'][$i]['TotalDeaths']  ?></td>
	<td style="background-color:#f5bc14"><?php echo $coronalive['Countries'][$i]['NewConfirmed']  ?></td>
	<td style="background-color:#46e346"><?php echo $coronalive['Countries'][$i]['NewRecovered']  ?></td>
	<td style="background-color:#cf3434"><?php echo $coronalive['Countries'][$i]['NewDeaths']  ?></td>
		
	</tr>	


<?php
	$i++;
}

?>

		</table>
		
	</div>
		
	</div>
	

</section>


<!-- *********************** corona lastest updates end ********************** -->

<!-- *********************** About section ********************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1 style="color:#F74300">About COVID-19</h1>
		
	</div>
	
	<div class="row pt-5">
		<div class="col-lg-5 col-lg-6 col-12 ml-auto">
			<img src="image/Severe-acute-respiratory-syndrome-Coronavirus-SARS-CoV-2-COVID-19.jpg" class="img-fluid">
			
		</div>
		
        <div class="col-lg-6 col-md-6 col-12">
        	<h2 style="color:#ffa31a">What is COVID-19 (Corona Virus)</h2>
<p style="color:#1ad1ff">Common symptoms include fever, cough, fatigue, shortness of breath, and loss of smell. While the majority of cases result in mild symptoms, some progress to viral pneumonia, multi-organ failure, or cytokine storm. The time from exposure to onset of symptoms is typically around five days but may range from two to fourteen days.
</p><br>
<p style="color:#1ad1ff">The virus is primarily spread between people during close contact,[a] often via small droplets produced by coughing,[b] sneezing, or talking. The droplets usually fall to the ground or onto surfaces rather than remaining in the air over long distances. People may also become infected by touching a contaminated surface and then touching their face. On surfaces, the 
</p>
        
        <div class="container">
  <button type="button" class="btn btn-default" style="background-color:#3dffcf"><a href="About_covid19.php">Click here to know more</a></button>
</div>

        
        </div>
        

	</div>
</div>


<!-- *********************** About section end ********************** -->


<!-- *********************** corona symptons ********************** -->

<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1 style="color:#CC5500" >Coronavirus Old Symptoms</h1> 
		
	</div>
	<div class="container">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center" style="color:#F7AD45"  >
			<img src="image/cough.png" class="img-fluid" width="120" height="120">

			<figcaption> <strong> Cough </strong></figcaption>

			</figure>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center" style="color:#F7AD45" >
			<img src="image/runny-nose.png" class="img-fluid" width="120" height="120">

			<figcaption> <strong> Runny Nose </strong></figcaption>

			</figure>
		</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center" style="color:#F7AD45" >
			<img src="image/fever.png" class="img-fluid" width="120" height="120">

			<figcaption> <strong>Fever </strong></figcaption>

			</figure>
		</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center" style="color:#F7AD45" >
			<img src="image/coronavirus.png" class="img-fluid" width="120" height="120">

			<figcaption><strong>Cold</strong></figcaption>

			</figure>
		</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center" style="color:#F7AD45" >
			<img src="image/tired.png" class="img-fluid" width="120" height="120">

			<figcaption><strong>Tiredness</strong></figcaption>

			</figure>
		</div>

<div class="col-lg-4 col-md-4 col-12 mt-5" style="color:#F7AD45" >
			<figure class="text-center">
			<img src="image/difficulty-breathing.png" class="img-fluid" width="120" height="120">

			<figcaption ><strong>Difficulty breathing</strong></figcaption>

			</figure>
		</div>

<div class="container">
  <button type="button" class="btn btn-default" style="background-color:#3dffcf" w-100 h-150><a href="Symptoms_covid19.php">Click here to know Coronavirus New Symptoms
</a></button>
</div>
		
	</div>
</div>
</div>

<!-- *********************** corona symptons end ********************** -->



<!-- *********************** Preventaion Against Coronavirus ********************** -->

<div class="container-fluid sub_section pt-5 pb-5"   id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1 style="color:#009933">6 Steps Preventaion Against Coronavirus</h1>
		
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/hand-wash.png" class="img-fluid" width="90" height="90">
							
						</figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p style="color:#99e699">Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</p>
						
					</div>
					
				</div>


				
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/medical-mask.png" class="img-fluid" width="90" height="90">
							
						</figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p style="color:#99e699">
Cover your mouth and nose when coughing or sneezing.</p>
						
					</div>
					
				</div>


				
			</div>

			
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/distance.png" class="img-fluid" width="90" height="90">
							
						</figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p style="color:#99e699">Maintain at least 2 metre distance between you and people coughing or sneezing</p>
						
					</div>
					
				</div>


				
		
			</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/stay-home.png" class="img-fluid" width="90" height="90">
							
						</figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p style="color:#99e699">Stay home and self-isolate from others in the household if you feel unwell</p>
						
					</div>
					
				</div>


				
			</div>


						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/unstructured-data.png" class="img-fluid" width="90" height="90">
							
						</figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p style="color:#99e699">Stay informed on the latest developments about COVID-19. Follow advice given by your healthcare provider, your national and local public health authority</p>
						
					</div>
					
				</div>


				
			</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/smoke.png" class="img-fluid" width="90" height="90">
							
						</figure>
						
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p style="color:#99e699">Refrain from smoking and other activities that weaken the lungs</p>
						
					</div>
					
				</div>


				
			</div>
		</div>

		

	</div>


	
</div>

<!-- *********************** Preventaion Against Coronavirus end ********************** -->


<!-- *********************** Contact us ********************** -->



<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-5">
		<h1 style="color:#03A5FC">FeedBack Us</h1>

		
	</div>
	
<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 col-12">

			<form

action="https://formspree.io/xrgybvbg"
  method="POST"
  enctype="multipart/form-data"
>
<div class="form-group">
    <label for="Username">Name</label>
    <input type="text" class="form-control" name="Username"  placeholder="Enter Your Name " autocomplete="off" required >
  </div>






  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Name@example.com" autocomplete="off" required>
  </div>



 

  <div class="form-group">
    <label for="Mobile Number">Mobile Number </label>
    <input type="number" class="form-control" name="Mobile Number" placeholder="Mobile Number" autocomplete="off" required>
  </div>


  
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" name="Message" rows="3"></textarea>
  </div>

 <button type="submit" name="submit" value="Send" class="btn btn-primary">Submit</button>


</form>
			
		</div>
		
	</div>
	
</div>



</div>



<marquee class="container  pt-5 " style="color:#007BFF">This Website Founder & CO-founder: Mr.Biswajit  </marquee>


<!-- *********************** Contact us end ********************** -->






<!-- *********************** footer  ********************** -->



<!-- *********************** footer  ********************** -->



<div class="container scrolltop float-right pr-5r">

	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn">
		
	</i>
	
</div>


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
        <p><strong>This is a unofficial website of any government or Organization ! No profit is gain through it !</strong><br>  This is created by Mr.Biswajit. Website is worldwide active on 24 april 2020. This Website motive is to Show Covid-19(Coronavirus) Latest update . If you see any error than please try to contact us </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-auto ">

      <!-- Grid column -->
      
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 ">

        <!-- Links -->
        <h5 class="text-uppercase " >Useful Links</h5>

        <ul class="list-unstyled " >
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="About_covid19.php">About</a>
          </li>
          <li>
            <a href="#!">Contact</a>
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
<!-- Grid column 
 <p> <i class="fa fa-map-marker mr-3"></i> <a href="https://goo.gl/maps/sBh198EmsjMG54nB9"> 62FC+FX Bathinda, Punjab</a></p>
  <p><i class="fa fa-phone mr-3"></i> <a href="callto:(+91) 8289080449"> (+91) 8289080449</a></p>
  <p><i class="fa fa-envelope-o mr-3"><a href="mailto:biswajithemram753@gmail.com"></i>biswajithemram753@gmail.com</a></p>
      -->  
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




