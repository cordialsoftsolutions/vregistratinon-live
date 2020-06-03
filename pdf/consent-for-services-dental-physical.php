<?php 
session_start();


	require('fpdf.php');

	$pdf = new FPDF('p','mm','A4');
	$pdf->AddPage();


	$name = $_POST['parent_name'];
	$relation = $_POST['relation'];
	$date_of_birth = $_POST['date_of_birth'];
	$_SESSION['Relationship-to-child']= $_POST['relation'];
	$_SESSION['date_of_birth']= $_POST['date_of_birth'];

	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Consent for dental and physical services',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(2);




	
	$pdf->SetFont('Arial','I',14);
	$pdf->Cell(0,5,'CONSENT TO RECEIVE MEDICAL AND/OR DENTAL EXAMINATION ',0,1,'C');
	$pdf->Ln(1);



	$pdf->Ln(5);
	$pdf->SetFont('Arial','I',14);
	$text =  "I, ".$name.", hereby give my consent for the child listed below to receive a medical and/or dental examination.  I understand that these services are deemed necessary or advisable by Beaufort-Jasper EOC Head Start program and services will be conducted by a trained Head Start Staff or medical and dental provider contracted through Beaufort-Jasper EOC Head Start.  I understand that I will be notified of my child's test results, if additional treatment is needed.";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);

	$text =  "Medical Examination (includes but not limited to: height, weight, blood pressure, hematocrit, lead, hearing, vision and additional screening if necessary) ";
	$pdf->MultiCell(0,5,$text,0,1);




	$pdf->Ln(5);
  
	$text =  "Dental Examination (includes prophy and fluoride treatment)";
	$pdf->MultiCell(0,5,$text,0,1);




	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(10);



	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',12);
	
	$text =  $_SESSION['child_Name'];
	$pdf->Cell(60,7,$text,0,0,'C');

	
 
    $pdf->Cell(10,8,'',0,0,'L');
	$text =  $_SESSION['center'];
	$pdf->Cell(60,7,$text,0,0,'C');

	$pdf->Cell(10,8,'',0,0,'L');
	$text =  $_SESSION['date_of_birth'];
	$pdf->Cell(40,7,$text,0,1,'C');



	
	$text =  "Child`s Name";
	$pdf->Cell(60,7,$text,'T',0,'C');

    $pdf->Cell(10,8,'',0,0,'L');
	$text =  'Center Name';
	$pdf->Cell(60,7,$text,'T',0,'C');

    $pdf->Cell(10,8,'',0,0,'L');
	$text =  'Date of Birth';
	$pdf->Cell(40,7,$text,'T',1,'C');




	$pdf->Ln(5);
	$pdf->SetFont('Arial','I',12);
	
	// $text =  $_SESSION['parent_name'];
	// $pdf->Cell(60,7,$text,0,0,'C');





	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$parent_signature = $_SESSION['parent_name'];
	$pdf->Cell(60,5,$parent_signature,0,0,'C');

	$pdf->SetFont('Arial','I',12);

	
 
    $pdf->Cell(10,8,'',0,0,'L');
	$text =  $_POST['relation'];
	$pdf->Cell(60,7,$text,0,0,'C');

	$pdf->Cell(10,8,'',0,0,'L');
	$text =  $_SESSION['today'];
	$pdf->Cell(40,7,$text,0,1,'C');



	
	$text =  "Parent signature";
	$pdf->Cell(60,7,$text,'T',0,'C');

    $pdf->Cell(10,8,'',0,0,'L');
	$text =  'Relationship to child';
	$pdf->Cell(60,7,$text,'T',0,'C');

    $pdf->Cell(10,8,'',0,0,'L');
	$text =  'Date Signed ';
	$pdf->Cell(40,7,$text,'T',1,'C');





    //$pdf->Ln(20);


    //$pdf->SetFont('Arial','I',11);
    //$text =  'THIS FORM MUST BE UPDATED YEARLY AND ONLY VALID FOR THE CURRENT SCHOOL YEAR';
    //$pdf->Cell(0,7,$text,'',1,'C');






	


    //$pdf->Ln(10);
    //$pdf->SetFont('Arial','',10);
    //$text =  "understand that I have the right to INSPECT, COPY, and CHALLENGE the content of the records for which I am authorizing release. I understand this consent may be revoked in writing by me at anytime, except to the extent the information has already been used. I understand that until this revocation is made, this consent shall remain in effect and the records will continue to be provided to for the specific purpose described abov";
    //$pdf->MultiCell(0,5,$text,1,1);












     //$location = './save/pdf7/asd.pdf';


     //$name = $location.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Consent for Release of Information.pdf";
     //$pdf->Output($location,'F');
     //$pdf->Output();


    //exit();

// 	 $path = getcwd(); // /home/user/public_html/test/test.php.   
// 	$path = substr($path, 0, strpos($path, "public_html"));
// 	$root = $path . "public_html/";
// 	$SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// 	$name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for dental and physical services.pdf";


// 	$_SESSION['pdf-2-path']  = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for dental and physical services.pdf";

//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();



// 	echo "ok";




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for dental and physical services.pdf";

	     $_SESSION['pdf-2-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for dental and physical services.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";








?>