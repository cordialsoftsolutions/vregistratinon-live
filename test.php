<?php
function createGUID() { 
    
    // Create a token
    $token      = $_SERVER['HTTP_HOST'];
    $token     .= $_SERVER['REQUEST_URI'];
    $token     .= uniqid(rand(), true);
    
    // GUID is 128-bit hex
    $hash        = strtoupper(md5($token));
    
    // Create formatted GUID
    $guid        = '';
    
    // GUID format is XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX for readability  
    $guid .= substr($hash,  0,  8) . 
         '-' .
         substr($hash,  8,  4) .
         '-' .
         substr($hash, 12,  4) .
         '-' .
         substr($hash, 16,  10) ;
         
            
    return $guid;

}




 function getOriginalName($getFullName){
   echo  substr($getFullName,34)."<br>";
}



$pdf1 ="83DE0996-C171-E29B-3563F4EDB1_EHS sarder 1212_Family Communication Form.pdf";
echo "<a href='https://incipitweb.com/incipitweb.com/vRegistration/vRegistrationFiles/$pdf1' return getURL(); class='dummy_click' >".getOriginalName($pdf1)."</a></br>";






//$directory = "C:/wamp64/www/corona-app/newRApplication/css/";
//$phpfiles = glob($directory . "*.css");


//foreach($phpfiles as $phpfile)
//{
//echo "<a href=$phpfile>".basename($phpfile)."</a></br>";
//}

// $fp = fopen($phpfile, "r");
//    fpassthru($fp);
//    fclose($fp);

?>