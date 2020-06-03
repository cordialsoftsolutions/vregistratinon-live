<?php 
session_start();



$_SESSION['child_first_name']  = $_POST['child_first_name'];
$_SESSION['child_middle_name'] = $_POST['child_middle_name'];
$_SESSION['child_last_name']   = $_POST['child_last_name'];

$_SESSION['parent_first_name']  = $_POST['parent_first_name'];
$_SESSION['parent_middle_name'] = $_POST['parent_middle_name'];
$_SESSION['parent_last_name']   = $_POST['parent_last_name'];

$child_full_name = $_POST['child_first_name'];
if($_POST['child_middle_name'] !=''){
	$child_full_name .= ' '.$_POST['child_middle_name']; 
}
if($_POST['child_last_name'] !=''){
	$child_full_name .= ' '.$_POST['child_last_name']; 
}

$_SESSION['child_Name'] = $child_full_name;

$parent_full_name = $_POST['parent_first_name'];
if($_POST['parent_middle_name'] !=''){
	//$parent_full_name .= ' '.$_POST['parent_middle_name']; 
}
if($_POST['parent_last_name'] !=''){
	$parent_full_name .= ' '.$_POST['parent_last_name']; 
}
$_SESSION['parent_name'] = $parent_full_name;


//full name parent
$parent_name = $_POST['parent_first_name'];
if($_POST['parent_middle_name'] !=''){
	$parent_name .= ' '.$_POST['parent_middle_name']; 
}
if($_POST['parent_last_name'] !=''){
	$parent_name .= ' '.$_POST['parent_last_name']; 
}





$_SESSION['center'] = $_POST['center'];




$_SESSION['mobile'] 		= $_POST['mobile'];
$_SESSION['home'] 			= $_POST['home'];
$_SESSION['work'] 			= $_POST['work'];

$_SESSION['email-address']  = $_POST['email-address'];
$_SESSION['today'] 			= $_POST['today'];

$_SESSION['address'] 		= $_POST['address'];
$_SESSION['city'] 			= $_POST['city'];
$_SESSION['state'] 			= $_POST['p_state'];
$_SESSION['zipcode']		= $_POST['zipcode'];

$_SESSION['getGUID'] = createGUID();

$totalAddress = ' '.$_POST['address'].', '. $_POST['city'].', '. $_POST['p_state'].', '. $_POST['zipcode'];
$_SESSION['total_address'] = $totalAddress;



$_SESSION['cityStateZipcodeParent'] = $_POST['city'].', '. $_POST['p_state'].', '. $_POST['zipcode'];



//var_dump($_POST['child_Name']);exit;
     
     require('fpdf.php');

	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();
	
	//$pdf->SetFont('Arial','',18);


    //$pdf->Cell(100,60,'',0,1,'C'); // add a blank cell
    //$pdf->image('logo.jpg',65,5,80); // add image 


	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Family Communication Form',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);


	


	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(16,1,'Date:',0,0,'L'); // non break cell
	$pdf->SetFont('Arial','',16);
	$pdf->Cell(0,1,$_POST['today'],0,1,'L'); // non break cell
	$pdf->Ln(10); // line break


	// echo $_POST['checkbox-3'];

	// exit;

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(38,5,'Child(s) Name:',0,0,'L');
	$pdf->Cell(0,5,$child_full_name,0,1,'L');  // child name

	$pdf->Ln(2);
	$pdf->Cell(40,5,'Parent(s) Name:',0,0,'L');
	$pdf->Cell(0,5,$parent_name,0,1,'L');


	$pdf->Ln(2);
	$pdf->Cell(30,5,'Center:',0,0,'L');
	$pdf->Cell(0,5,$_POST['center'],0,1,'L');



	$pdf->Ln(2);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(18,10,'Home:',0,0,'L');  // Home
	$pdf->SetFont('Arial','',16);
	$pdf->Cell(50,10,$_POST['home'],0,0,'L');


	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(16,10,'Work:',0,0,'L');  // Work
	$pdf->SetFont('Arial','',16);
	$pdf->Cell(50,10,$_POST['work'],0,0,'L');

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(20,10,'Mobile:',0,0,'L');  // Mobile
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(50,10,$_POST['mobile'],0,1,'L');

	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(50,5,'Text Messaging Consent','B',1,'L');



	$text = "There may be times throughout the year that Head Start would like to send a brief text message to parents (ex. event reminds, center information, family service information, etc.). Since text messaging is not free; parents who want to receive texts must complete the information below giving permission.";

	$pdf->SetFont('Arial','',9);
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Cell(20,5,'',0,0,'L'); // blank cell


	if($_POST['checkbox-1'] == 'true'){
		//$pdf->image('check.png',27,135,3);
		$pdf->image('check.png',27,108,3);
	}
	
	$pdf->Cell(0,5,'Yes, I want to receive text messages from my child`s Head Start center to the mobile numbers indicated above.',0,1,'L') ;

	$pdf->Cell(21,5,'',0,0,'L'); // blank cell

	if($_POST['checkbox-2']  == 'true'){
		//$pdf->image('check.png',27,140,3);
		$pdf->image('check.png',27,113,3);
	}
	
	$pdf->Cell(0,5,'No, I do not want to receive text messages at this time.',0,1,'L') ;

	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(24,10,'Address:',0,0,'L');
	$pdf->SetFont('Arial','',14);  // address
	$pdf->Cell(0,10,$totalAddress,0,1,'L');


	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(38,10,'Email Address:',0,0,'L');
	$pdf->SetFont('Arial','',14);  // email address
	$pdf->Cell(0,10,$_POST['email-address'],0,1,'L');


	$pdf->SetFont('Arial','',9);
	$pdf->Cell(21,5,'',0,0,'L'); // blank cell

	

    //if($_POST['checkbox-3']  == 'true'){
    //    //$pdf->image('check.png',27,168,3);
    //    $pdf->image('check.png',27,141,3);
    //}
	if($_POST['email-address'] !="")
	{
	  $pdf->image('check.png',27,141,3);
    }

	$pdf->Cell(0,5,"Yes, I want to receive emails from my child's Head Start center. I have provided the email address above.",0,1,'L') ;

	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(0,10,'Emergency Contact Information:',0,1,'C');





	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(14,10,'Name:',0,0,'L');  // Name
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['name_1'],0,0,'L');


	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(26,10,'Relationship:',0,0,'L');  // Relation
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['relation_1'],0,0,'L');

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(18,10,'Phone #:',0,0,'L');  // Phone
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['phone_1'],0,1,'L');


	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(14,10,'Name:',0,0,'L');  // Name
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['name_2'],0,0,'L');


	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(26,10,'Relationship:',0,0,'L');  // Relation
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['relation_2'],0,0,'L');

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(18,10,'Phone #:',0,0,'L');  // Phone
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['phone_2'],0,1,'L');


	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(14,10,'Name:',0,0,'L');  // Name
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['name_3'],0,0,'L');


	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(26,10,'Relationship:',0,0,'L');  // Relation
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['relation_3'],0,0,'L');

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(18,10,'Phone #:',0,0,'L');  // Phone
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,$_POST['phone_3'],0,1,'L');




	//new added

	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(5);
	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$parent_signature = $_SESSION['parent_name'];
	$pdf->Cell(80,5,$parent_signature,0,0,'C');

	$pdf->Cell(35,5,'',0,0,'C');

	$pdf->SetFont('Arial','',12);
	$signature_date = $_SESSION['today'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(80,5,'Parent Signature','T',0,'C');  // Parent signature

	$pdf->Cell(35,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date
	



   //$SavePath = './save/pdf1/sd.pdf';

  //$pdf->Output($SavePath,'F');
  //   $pdf->Output();
   // exit;
    
    


//      $path = getcwd(); // /home/user/public_html/test/test.php.   
//      $path = substr($path, 0, strpos($path, "public_html"));
//      $root = $path . "public_html/";
//      $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
//      $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Family Communication Form.pdf";



//      $_SESSION['pdf-1-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Family Communication Form.pdf";


	

//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();




// 	echo "ok";





	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Family Communication Form.pdf";

	     $_SESSION['pdf-1-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Family Communication Form.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";

	

	



?>



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

?>