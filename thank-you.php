
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet" />

	<style>
		body{

			width: 100%;
			height: 100vh;
			background: url('img/back-thankyou.png');
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;

		}
		.container{
			position: relative;
			height: 100vh;
		}
		.logo{
			position: absolute;
			bottom: 5%;
			right: 10%;
		}
		.footer{
			position: absolute;
			text-align:center;
			/*bottom: 5%;*/
			left: 50%;
			transform: translate(-50%,-0%);
		}
		
		.success img{
			width: 55px;
		}
		.next-step{
			background: #ffdf00a3;
			padding: 2px 0px;
			
		}
		.next-step h2{
			font-size: 30px;
		}
		label{
			font-size: 18px;
			font-weight: 500;
		}
		.custom-control-label::before{
			width: 2rem;
			height: 2rem;
			border: 2px solid black;
			border-radius: 0px;
			background: transparent;
		}
		.custom-control-label::after{
			width: 2rem;
			height: 2rem;
		}
		.custom-checkbox .custom-control-label::before{
			border-radius: 0px;
		}


		


@media only screen and (max-width: 600px) {
 .logo_size{
	width:70px !important;
		padding-left: 12px;
  }

}


	</style>



</head>
<body>
  
	

<!-- <div class="logo">
	<img src="img/index-logo.png" alt="logo">
</div> -->

<section>
	<div class="container">
		<div class="logo">
			<img src="img/index-logo.png" alt="logo" class="logo_size">
		</div>
		<div class="row">
			
			<div class="col-lg-10 offset-lg-1 col-12 col-xs-12">
				<div class="row">
					<div class="col-12 text-center">
						<h1 style="font-size: 55px;">THANK YOU</h1>
					</div>

					<div class="col-12 success text-center" style="padding: 20px;
    width: 710px;
    position: relative;
    background: rgb(204, 204, 204);
    background: rgb(172, 204, 233,0.6);

">
						
						<h2><img src="img/check.png" alt=""> You have successfully completed the Head Start online registration for your child. </h2>
						<h5><a href="pdf/thankyou.php" >Click Here</a> to download a copy of your completed registration forms.</h5>
					</div>

					<div class="col-12 text-center mt-5 next-step">
						<h2>What is my next step in the enrollment process?</h2>
					</div>

					<div class="col-12 mt-2">
						<div class="custom-control custom-checkbox mb-3">
					      <input type="checkbox" class="custom-control-input " id="checkbox-1" name="checkbox-1">
					      <label  class="custom-control-label" for="checkbox-1"> &nbsp; &nbsp;&nbsp;Parents will need to submit all necessary health forms. <br> &nbsp;&nbsp;&nbsp;&nbsp;<a href="download.php" >Click Here</a> to download a copy of the required health exam forms.</label>
					    </div>
					</div>


					<div class="col-12 mt-2">
						<div class="custom-control custom-checkbox mb-3">
					      <input type="checkbox" class="custom-control-input " id="checkbox-2" name="checkbox-2">
					      <label  class="custom-control-label" for="checkbox-2">&nbsp;&nbsp;&nbsp;Attend Parent Orientation. Parents will receive notification.</label>
					    </div>
					</div>

					<div class="col-12 mt-2">
						<div class="custom-control custom-checkbox mb-3">
					      <input type="checkbox" class="custom-control-input " id="checkbox-3" name="checkbox-3">
					      <label  class="custom-control-label" for="checkbox-3">&nbsp;&nbsp;&nbsp;Parent Teacher Conference.</label>
					    </div>
					</div>
				</div>
			</div>
		</div>
		


			<div class="footer col-xs-12 col-12">
				<p>Please contact <a href="mail:to">familysupport@thebjeoc.org</a> with any additional questions. </p>
			</div>

	</div>
</section>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


<script>

$( "#btnDownload" ).click(function() {

    setTimeout(function () {
		window.location.href = "pdf/save/Dental.pdf";

    }, 3000);



    
    setTimeout(function () {
		window.location.href = "pdf/save/Medical.pdf";
    }, 3000);



	  

});
	

//<a href="pdf/save/Dental.pdf">pdf/save/Dental.pdf</a>
//        <a href="pdf/save/Medical.pdf">pdf/save/Medical.pdf</a>




</script>


