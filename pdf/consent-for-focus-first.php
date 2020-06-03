<?php 

	require('fpdf.php');

	session_start();



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	

	// $pdf->image('logo.jpg',10,10,20); // logo
	$pdf->image('logo-10-1.jpg',75,5,60); // logo
	$pdf->image('logo-10-2.jpg',30,260,40); // logo
	$pdf->image('logo-10-3.jpg',140,267,40); // logo



	// $pdf->image('check.png',36,106,3);
	// $pdf->image('check.png',36,155,3);




	// $pdf->image('check.png',36,183,3);
	// $pdf->image('check.png',36,175,3);


	// $pdf->image('check.png',127,167,3);



	$pdf->Ln(30);



	$_SESSION['gender'] = $_POST['gender'];


	$name = $_SESSION['name'];
	$relation = $_SESSION['relation'];
	$date_of_birth = $_SESSION['date_of_birth'];

	
	$pdf->SetFont('Arial','I',20);
	$pdf->Cell(0,5,'FREE VISION SCREENING',0,1,'C');
	$pdf->Ln(1);



	$pdf->Ln(5);
	$pdf->SetFont('Arial','',14);
	$text =  "A free FocusFirst vision screening is being offered at your childcare center.";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);

	$text =  "FocusFirst has screened more than 400,000 children since 2006. Of those screened, over 40,000 were suffering from undetected vision problems.";
	$pdf->MultiCell(0,5,$text,0,1);




	$pdf->Ln(5);
	$text =  "Undetected vision problems can lead to difficulty in the classroom, slow social development, and, in some cases, permanent blindness.";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);
	$text =  "A FocusFirst vision screening can help to ensure that your child has a healthy start to life.";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(5);
	$pdf->Cell(20,6,'-',0,0,'R');
	$text =  "The screening is high-tech and non-invasive; we simply take a photograph of your child's eyes with a digital camera.";
	$pdf->MultiCell(0,6,$text,0,1);

	$pdf->Ln(2);
	$pdf->Cell(20,6,'-',0,0,'R');
	$text =  "If a potential vision problem is detected, you will have access to free or low-cost eye care.";
	$pdf->MultiCell(0,6,$text,0,1);

	$pdf->Ln(2);
	$pdf->Cell(20,6,'-',0,0,'R');
	$text =  "If your child already wears glasses, the screening will confirm that the glasses are the correct prescription.";
	$pdf->MultiCell(0,6,$text,0,1);

	$pdf->Ln(5);

	$text =  "If your child is found to have a potential vision problem, he or she will be referred to our partner organization Sight Savers America. They will contact you to provide information about your child's vision assessment and will assist all families needing information on local eye care resources. For children from low income families, Sight Savers America will coordinate free comprehensive eye care services.";
	$pdf->MultiCell(0,6,$text,0,1);


	$pdf->Ln(5);
	$text =  "Please fill out the attached form completely and return it to your childcare director.";
	$pdf->MultiCell(0,6,$text,0,1);


	$pdf->Ln(5);
	$pdf->SetFont('Arial','I',14);
	$pdf->Cell(0,5,'For more information, call (864) 412-5489',0,1,'C');
	

	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$text =  "Note: This program is based on a screening process; it is not diagnostic. Screening is intended to identify children with a wide range of eye problems who should seek the services of an eye-care professional for examination and diagnosis. As with any screening process, there is no assurance that all problems will be detected. Eye problems not detected by this screening process include diseases affecting the retina and optic nerve, glaucoma, certain forms of astigmatism and color blindness. No screening process, including that of FocusFirst, is a substitute for a full examination by a qualified eye-care professional.";
	$pdf->MultiCell(0,4,$text,0,1);




	$pdf->AddPage();

	$pdf->image('logo-10-1.jpg',75,5,60); // logo

	$pdf->Ln(30);
	$pdf->SetFont('Arial','',18);
	$pdf->Cell(0,5,'Child Screening Form',0,1,'L');
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,'(Please fill out this form completely. We will only contact you if your child has a potential vision problem.) ',0,1,'L');


	$pdf->Ln(5);
	$pdf->SetFont('Arial','',18);
	$pdf->Cell(0,5,'Child Information',0,1,'L');



	$pdf->Ln(5);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(20,8,'First Name: '.$_POST['first_name'],0,1,'L');


	
	// for($i=0; $i<16; $i++){
	// 	$pdf->SetFont('Arial','',10);
	// 	if($i == 15){
	// 		$pdf->Cell(10,25,'',1,1,'L');
	// 	}else{
	// 		$pdf->Cell(10,25,'',1,0,'L');
	// 	}
	// }

	$pdf->SetFont('Arial','',12);
	$pdf->Cell(20,8,'Last Name: '.$_POST['last_name'],0,1,'L');
	// for($i=0; $i<16; $i++){
	// 	$pdf->SetFont('Arial','',10);
	// 	if($i == 15){
	// 		$pdf->Cell(10,25,'',1,1,'L');
	// 	}else{
	// 		$pdf->Cell(10,25,'',1,0,'L');
	// 	}
	// }


	// $pdf->SetFont('Arial','',12);
	// $pdf->Cell(20,8,'Teacher '.$_POST['teacher'],0,1,'L');
	// for($i=0; $i<16; $i++){
	// 	$pdf->SetFont('Arial','',10);
	// 	if($i == 15){
	// 		$pdf->Cell(10,25,'',1,1,'L');
	// 	}else{
	// 		$pdf->Cell(10,25,'',1,0,'L');
	// 	}
	// }



	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(30,5,'Date Of Birthe: '.$_POST['date_of_birth'],0,1,'L');




	$pdf->SetFont('Arial','',10);
	$pdf->Cell(20,5,'Gender: '.$_POST['gender'],0,1,'L');

	


	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(30,5,'Parent / Guardian Information',0,1,'L');

	

	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(100,5,'Primary Contact',0,0,'L');

	$pdf->Cell(10,5,'',0,0,'L');

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(30,5,'Secondary Contact:',0,1,'L');
	$pdf->Ln(1);

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(100,5,'Name: '.$_POST['parent_name_1'],0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'Name:  '.$_POST['parent_name_2'],0,1,'L');

	$pdf->Cell(100,5,'Relationship to Child: '.$_POST['relation_1'],0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'Relationship to Child: '.$_POST['relation_2'],0,1,'L');

	$pdf->Cell(100,5,'Home Phone: '.$_POST['home_phone_1'],0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'Home Phone: '.$_POST['home_phone_2'],0,1,'L');


	$pdf->Cell(100,5,'Mobile Number: '.$_POST['call_phone_1'],0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'Mobile Number: '.$_POST['call_phone_2'],0,1,'L');


	$pdf->Cell(100,5,'Work Phone: '.$_POST['workphone_1'],0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'Work Phone: '.$_POST['workphone_2'],0,1,'L');


	$pdf->Cell(100,5,'Address: '.$_POST['address_1'],0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'Address: '.$_POST['address_2'],0,1,'L');	


	$pdf->Cell(100,5,'City, State, Zip: '.$_POST['city_state_zip_1'],0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'City, State, Zip: '.$_POST['city_state_zip_2'],0,1,'L');


	$pdf->Cell(100,5,'Email Address: '.$_POST['emal_1'],0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'Email Address: '.$_POST['emal_2'],0,1,'L');



	$pdf->Ln(2);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,7,"FocusFirst Screening Result (to be completed by FocusFirst screener) ",'T',1,'L');



	$pdf->Cell(100,5,'Screening Complete / Passed',0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'Parent Declined Vision Screening',0,1,'L');


	$pdf->Cell(100,5,'Complete Eye Exam Recommended / Failed',0,0,'L');
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(30,5,'No Result',0,1,'L');

	$pdf->Cell(0,5,'Absent ','B',0,'L');



	$pdf->Ln(10);
	$pdf->SetFont('Arial','',10);
	$text =  "Only complete this portion if you DO NOT want your child screened for vision problems: Please write “NO” in the box and sign below if you DO NOT want your child to receive a free, non-invasive vision screening.";
	$pdf->MultiCell(0,4,$text,0,1);


	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(10);


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

	








	$pdf->image('logo-10-2.jpg',90,260,40); // logo
	


	





     //$location = './save/pdf10/';


     //$name = $location.$_POST['first_name'].".pdf";
     //$pdf->Output($name,'F');
     //$pdf->Output();

	


// 	  $path = getcwd(); // /home/user/public_html/test/test.php.   
//      $path = substr($path, 0, strpos($path, "public_html"));
//      $root = $path . "public_html/";
//      $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
//      $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Focus First.pdf";

// 	 $_SESSION['pdf-3-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Focus First.pdf";

//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();


// 	echo "ok";







	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Focus First.pdf";

	     $_SESSION['pdf-3-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Focus First.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";







?>