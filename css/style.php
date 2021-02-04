<style type="text/css">
	



html
{

	scroll-behavior: smooth;
}





	*{
		margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif;

	}

 .nav_style{
 	background-color: #a29bfe!important;

 }

 .nav_style a{ color: white; }





 .dropdown:hover .dropdown-menu {
  display: block;
}
 

 /*////////////// main header \\\\\\\\\\\\\\\\*/

 .main_header{
 	height: 450px;
 	width: 100%;
 }

.rightside h1{
	font-size: 3rem;
}

.corona_rot img{
	animation: gocorona 3s linear infinite;

}

@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img { animation:  heartbeat 5s linear infinite; }

@keyframes heartbeat
{
	0%
	{
      transform: scale( .75 );
	}

	20%
	{
      transform: scale( .1 );
	}

	40%
	{
      transform: scale( .75 );
	}

	60%
	{
      transform: scale( .1 );
	}

	80%
	{
      transform: scale( .75 );
	}

	100%
	{
      transform: scale( .1 );
	}
}

/******************* corona updata **************************/

.corona_updata
{
	margin: 0 0 30px 0;
}

.corona_updata h3 { color: #ff7675; }

.corona_updata h1 { font-size: 2rem; text-align: center; }


 /*////////////// about section \\\\\\\\\\\\\\\\*/


 .sub_section
 {

 	background-color: #fbfafd;


 }


.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
 



 /*////////////// footer \\\\\\\\\\\\\\\\*/

.footer_style
{
	background-color: #a29bfe!important;

}


.footer_style p{

margin-bottom: 0!important;


}


/******************************* top scroll **************************/
#myBtn {
	display: none; /* Hidden by default */
	position: fixed; /* Fixed sticky position */
	bottom: 30px; /* Place the button at the bottom of the page */
	right: 40px; /* Place the button 30px from the right */
	z-index: 99; /* Make sure it does not overlap */
	border: none; /* Remove borders */
	outline: none; /* Romove outline */
	background-color: #00A8FF; /* Set a background color */
	color: white; /* Text color */
	cursor: pointer; /* Add a mouse pointer on hover */
	padding: 10px; /* Some padding */
	border-radius: 10px; /* Rounded corners */
}

#myBtn:hover {
	background: #606060; /* Add a dark-grey background on hover */
}


</style>