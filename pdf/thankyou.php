<?php 

require('fpdf.php');

session_start();

$path = getcwd();  
$path = substr($path, 0, strpos($path, "public_html"));


//$root = $path . "public_html/";
//$directory =  $root.'incipitweb.com/vRegistration/vRegistrationFiles/';  // This will output /home/user/public_html/



     

 function getOriginalName($getFullName){
   $getName =  substr($getFullName,33);
   return $getName;
}



$pdf1 = $_SESSION['pdf-1-path'];
if($pdf1 !=""){
   echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf1' return getURL(); class='dummy_click' >".getOriginalName($pdf1)."</a></br>";
}

$pdf2 = $_SESSION['pdf-2-path'];
if($pdf2 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf2' return getURL(); class='dummy_click' >".getOriginalName($pdf2)."</a></br>";
}

$pdf3 = $_SESSION['pdf-3-path'];
if($pdf3 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf3' return getURL(); class='dummy_click' >".getOriginalName($pdf3)."</a></br>";
}

$pdf4 = $_SESSION['pdf-4-path'];

if($pdf4 !=""){
  echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf4' return getURL(); class='dummy_click' >".getOriginalName($pdf4)."</a></br>";
}


$pdf5 = $_SESSION['pdf-5-path'];
if($pdf5 !=""){
  echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf5' return getURL(); class='dummy_click' >".getOriginalName($pdf5)."</a></br>";
}

$pdf6 = $_SESSION['pdf-6-path'];
if($pdf6 !=""){
    echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf6' return getURL(); class='dummy_click' >".getOriginalName($pdf6)."</a></br>";
}


$pdf7 = $_SESSION['pdf-7-path'];
if($pdf7 !=""){
 echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf7' return getURL(); class='dummy_click' >".getOriginalName($pdf7)."</a></br>";
}

$pdf8 = $_SESSION['pdf-8-path'];
if($pdf8 !=""){
 echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf8' return getURL(); class='dummy_click' >".getOriginalName($pdf8)."</a></br>";
}

$pdf9 = $_SESSION['pdf-9-path'];
if($pdf9 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf9' return getURL(); class='dummy_click' >".getOriginalName($pdf9)."</a></br>";
}

$pdf10 = $_SESSION['pdf-10-path'];
if($pdf10 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf10' return getURL(); class='dummy_click' >".getOriginalName($pdf10)."</a></br>";
}

$pdf11 = $_SESSION['pdf-11-path'];
if($pdf11 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf11' return getURL(); class='dummy_click' >".getOriginalName($pdf11)."</a></br>";
}

$pdf12 = $_SESSION['pdf-12-path'];
if($pdf12 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf12' return getURL(); class='dummy_click' >".getOriginalName($pdf12)."</a></br>";
}

$pdf13 = $_SESSION['pdf-13-path'];
if($pdf13 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf13' return getURL(); class='dummy_click' >".getOriginalName($pdf13)."</a></br>";
}

$pdf14 = $_SESSION['pdf-14-path'];
if($pdf14 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf14' return getURL(); class='dummy_click' >".getOriginalName($pdf14)."</a></br>";
}

$pdf15 = $_SESSION['pdf-15-path'];
if($pdf15 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf15' return getURL(); class='dummy_click' >".getOriginalName($pdf15)."</a></br>";
}

$pdf16 = $_SESSION['pdf-16-path'];
if($pdf16 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf16' return getURL(); class='dummy_click' >".getOriginalName($pdf16)."</a></br>";
}


$pdf17 = $_SESSION['pdf-17-path'];
if($pdf17 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf17' return getURL(); class='dummy_click' >".getOriginalName($pdf17)."</a></br>";
}

$pdf18 = $_SESSION['pdf-18-path'];
if($pdf18 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf18' return getURL(); class='dummy_click' >".getOriginalName($pdf18)."</a></br>";
}

$pdf19 = $_SESSION['pdf-19-path'];
if($pdf19 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf19' return getURL(); class='dummy_click' >".getOriginalName($pdf19)."</a></br>";
}

$pdf20 = $_SESSION['pdf-20-path'];
if($pdf20 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf20' return getURL(); class='dummy_click' >".getOriginalName($pdf20)."</a></br>";
}

$pdf40 = $_SESSION['pdf-40-path'];
if($pdf40 !=""){
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf40' return getURL(); class='dummy_click' >".getOriginalName($pdf40)."</a></br>";
}


//session_destroy();


?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

<script>
    

    $(document).ready(function () {
       
       
      // window.location.href = $('.dummy_click').attr('href');
       function getURL() {
        //$(".dummy_click").trigger('click');
    }
    });



</script>