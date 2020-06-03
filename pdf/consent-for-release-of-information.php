<?php 

	require('fpdf.php');

	session_start();



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	

	// $pdf->image('logo.jpg',10,10,20); // logo
	/*$pdf->image('header-7.jpg',10,10,185); // logo



	
	if($_POST['checkbox-4'] == 'true'){
		$pdf->image('check.png',36,111,3);	
	}
	
	if($_POST['checkbox-5'] == 'true'){
		$pdf->image('check.png',36,119,3);	
	}
	
	if($_POST['checkbox-6'] == 'true'){
		$pdf->image('check.png',36,127,3);	
	}
	
	if($_POST['checkbox-7'] == 'true'){
		$pdf->image('check.png',36,135,3);	
	}
	
	if($_POST['checkbox-8'] == 'true'){
		$pdf->image('check.png',36,142,3);	
	}







	
	if($_POST['checkbox-9'] == 'true'){
		$pdf->image('check.png',36,160,3);	
	}
	
	if($_POST['checkbox-10'] == 'true'){
		$pdf->image('check.png',36,172,3);	
	}
	
	if($_POST['checkbox-11'] == 'true'){
		$pdf->image('check.png',36,180,3);	
	}
	
	if($_POST['checkbox-12'] == 'true'){
		$pdf->image('check.png',36,188,3);	
	}






	;
	if($_POST['checkbox-13'] == 'true'){
		$pdf->image('check.png',127,164,3);	
	}
	
	if($_POST['checkbox-14'] == 'true'){
		$pdf->image('check.png',127,172,3);
	}
	
	if($_POST['checkbox-15'] == 'true'){
		$pdf->image('check.png',127,180,3);	
	}
	
	if($_POST['checkbox-16'] == 'true'){
		$pdf->image('check.png',127,188,3);	
	}
	
	if($_POST['checkbox-17'] == 'true'){
		$pdf->image('check.png',127,196,3);	
	}

	*/


	
    $pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Consent to Release of Information',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(2);



	$name = $_POST['name'];
	$relation = $_POST['relation'];
	$date_of_birth = $_POST['date_of_birth'];
	$child_name = $_POST['child_Name'];

	
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(0,8,'Parental Consent to Release and Receive Information',0,1,'C');


	$pdf->Ln(2);
	$pdf->SetFont('Arial','',12);
	$text =  "I ".$name.' '.$relation." give permission to release or receive all personally identifiable information indicated below in reference to my child ".$child_name.' born '.$date_of_birth." to the organizations and/or individuals listed below.";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(7);
	$pdf->SetFont('Arial','',12);
	$text =  "This consent gives Beaufort-Jasper EOC Head Start permission to release the following records regarding my child to the Beaufort and/ or Jasper County School District, and, gives permission to the Beaufort and/ or Jasper County School District to release the following records regarding my child through the third grade to Beaufort-Jasper EOC Head Start.";
	$pdf->MultiCell(0,5,$text,0,1);




	$pdf->Ln(7);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(20,8,'',0,0,'L');
	$text =  "Release or Receipt of information between: ";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(3);

	if($_POST['checkbox-4'] == 'true'){
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(30,5,'',0,0,'L');
	$text =  "Baby Net (Children birth to 3 years old)";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	}
	if($_POST['checkbox-5'] == 'true'){
    $pdf->Cell(30,5,'',0,0,'L');
	$text =  "Department of Social Services";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);
	}
	if($_POST['checkbox-6'] == 'true'){
	$pdf->Cell(30,5,'',0,0,'L');
	$text =  "Early Interventionist";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);
	}
	if($_POST['checkbox-7'] == 'true'){
	$pdf->Cell(30,5,'',0,0,'L');
	$text =  "Pediatrician or other physician(s): ".$_POST['Pediatrician'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);
	}
	if($_POST['checkbox-8'] == 'true'){
	$pdf->Cell(30,5,'',0,0,'L');
	$text =  "Other: ".$_POST['other'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);
	}

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(20,8,'',0,0,'L');
	$text =  "Information to be released or received:";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(3);
    $pdf->SetFont('Arial','',11);

	if($_POST['checkbox-9'] == 'true'){
    $pdf->Cell(30,5,'',0,0,'L');
	$text =  "Educational and/or Developmental";
	$pdf->Cell(0,5,$text,0,1); 

	$pdf->Cell(30,5,'',0,0,'L');
	$text =  "Screenings Result";
	$pdf->Cell(0,5,$text,0,1);
	$pdf->Ln(1);
	}
	
 if($_POST['checkbox-13'] == 'true'){
    $pdf->Cell(30,5,'',0,0,'L');
	$text =  "Evaluation Results";
	$pdf->Cell(0,5,$text,0,1,'L');
	$pdf->Ln(1);
	}

	if($_POST['checkbox-10'] == 'true'){
	$pdf->Cell(30,5,'',0,0,'L');
	$text =  "Educational Assessment Scores";
	$pdf->Cell(0,5,$text,0,1);
	$pdf->Ln(1);
	}
	
 if($_POST['checkbox-14'] == 'true'){
    $pdf->Cell(30,5,'',0,0,'L');
	$text =  "IEP/IFSP";
	$pdf->Cell(0,5,$text,0,1,'L');
	$pdf->Ln(1);
	}

	if($_POST['checkbox-11'] == 'true'){
	$pdf->Cell(30,5,'',0,0,'L');
	$text =  "Hearing/Vision Screenings and/or Results";
	$pdf->Cell(0,5,$text,0,1);
	$pdf->Ln(1);
	}
	
 if($_POST['checkbox-15'] == 'true'){
    $pdf->Cell(30,5,'',0,0,'L');
	$text =  "Certificate of Immunization";
	$pdf->Cell(0,5,$text,0,1,'L');
	$pdf->Ln(1);
	}

	
  
	if($_POST['checkbox-12'] == 'true'){
	$pdf->Cell(30,5,'',0,0,'L');
	$text =  "Medical Records";
	$pdf->Cell(0,5,$text,0,1);
	$pdf->Ln(1);
	}

  if($_POST['checkbox-16'] == 'true'){
    $pdf->Cell(30,5,'',0,0,'L');
	$text =  "Copy of Birth Certificate";
	$pdf->Cell(0,5,$text,0,1,'L');
	$pdf->Ln(1);
	}

	
  if($_POST['checkbox-17'] == 'true'){
    $pdf->Cell(30,5,'',0,0,'L');
	$text =  "Other: ".$_POST['other-2'];
	$pdf->Cell(0,5,$text,0,1,'L');
	}



	$pdf->Ln(4);
	$pdf->SetFont('Arial','',12);
	$text =  "The information being released or received will assist the organizations listed in gathering information for school enrollment and/or transition, record keeping, and data collection purposes for continuous program improvement.";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(7);




	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$parent_signature = $_SESSION['parent_name'];
	$pdf->Cell(100,5,$parent_signature,0,0,'C');

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->SetFont('Arial','',12);
	$signature_date = $_SESSION['today'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',12);
    //$pdf->Cell(100,5,'Signature of Parent/Guardian/Primary Caretaker','T',0,'C');  // Parent signature
	$pdf->Cell(100,5,'Parent Signature','T',0,'C');  // Parent signature

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date



	


	$pdf->Ln(10);
	$pdf->SetFont('Arial','',10);
	$text =  "understand that I have the right to INSPECT, COPY, and CHALLENGE the content of the records for which I am authorizing release. I understand this consent may be revoked in writing by me at anytime, except to the extent that the information has already been used. I understand that until this revocation is made, this consent shall remain in effect and the records will continue to be provided to for the specific purpose described abov";
	$pdf->MultiCell(0,5,$text,1,1);












    // $location = './save/pdf7/asd.pdf';


    // $name = $location.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Consent for Release of Information.pdf";
    // $pdf->Output($location,'F');
    // $pdf->Output();


    //exit();

// 	 $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Release of Information.pdf";


// $_SESSION['pdf-4-path']  = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Release of Information.pdf";

//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();



// 	echo "ok";




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Release of Information.pdf";

	     $_SESSION['pdf-4-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Release of Information.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";







?>