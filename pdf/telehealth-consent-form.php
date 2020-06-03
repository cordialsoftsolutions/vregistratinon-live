<?php 

	require('fpdf.php');

	session_start();



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();




	// $pdf->image('check.png',25,145,5); // check
    //$pdf->image('logo.jpg',75,5,60);
    //$pdf->Ln(50);
	

    //$pdf->SetFont('Arial','B',14);
    //$pdf->Cell(0,5,'Beaufort Jasper EOC Head Start and Early Head Start',0,1,'C');
    //$pdf->Ln(1);
    //$pdf->Cell(0,5,'Telehealth Consent',0,1,'C');
	
    //$pdf->Ln(2);


	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Telehealth Consent',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);



	
	$pdf->SetFont('Arial','',14);
	$text =  "Child's Name: ".$_POST['child_Name'];
	$pdf->Cell(100,5,$text,0,0);

	
	$text =  "DOB: ".$_POST['date_of_birth'];
	$pdf->Cell(60,5,$text,0,1);





	$pdf->SetFont('Arial','',12);
	$pdf->Ln(5);
	$text =  "Before any student is seen at the School-Based Telehealth Site ('Telehealth Clinic'), a signed consent from must be on file. In addition to the consent on file, the parent/guardian will be contacted before each visit to receive verbal consent for the child to be seen. Please check the appropriate box below regarding verbal consent";
	$pdf->MultiCell(0,6,$text,0,1);





	$pdf->Ln(5);
    //$pdf->Cell(15,5,$_POST['checkbox-1'],0,0);
    //$text =  "I give permission for my child to be seen at the Telehealth Site if verbal consent from parent/guardian is not received. (Unable to answer phone, phone number disconnected, etc.)";
    //$pdf->MultiCell(0,6,$text,0,1);

    if($_POST['checkbox-1'] == 'Yes'){
	   // $pdf->Cell(15,5,$_POST['checkbox-1'],0,0);
     	$text =  "I give permission for my child to be seen at the Telehealth Site if verbal consent from parent/guardian is not received. (Unable to answer phone, phone number disconnected, etc.)";
     	$pdf->MultiCell(0,6,$text,0,1);
		$pdf->Ln(5);
    }


	if($_POST['checkbox-2'] == 'Yes'){
		//$pdf->Cell(15,5,$_POST['checkbox-2'],0,0);
		$text =  "I DO NOT give permission for my child to be seen at the Telehealth Site if verbal consent from parent/guardian is not received. I understand that if I cannot be reached, my child will not be seen at the Telehealth Site";
		$pdf->MultiCell(0,6,$text,0,1);
		$pdf->Ln(10);
	}
	$text =  "All's Children Pediatrics may, depending on the diagnosis, prescribe medication to students seen at the Telehealth Site. In the event that the Telehealth Site physician prescribes medication, they will make every effort to contact the student's primary care provider (identified in the Enrollment Packet). Such a contact requires the consent of the student's parent or guardian. Please check the appropriate box below regarding contacting your child's primary care provide.";
	$pdf->MultiCell(0,6,$text,0,1);



	$pdf->Ln(5);

	
	if($_POST['checkbox-3'] == 'Yes'){
		//$pdf->Cell(15,5,$_POST['checkbox-3'],0,0);
		$text =  "I consent to the Telehealth Site notifying my child's primary care provider (identified in Enrollment Packet) that the Telehealth Site provider has issued a prescription for my child. ";
		$pdf->MultiCell(0,6,$text,0,1);
		$pdf->Ln(5);
	}

	
	if($_POST['checkbox-4'] == 'Yes'){
		//$pdf->Cell(15,5,$_POST['checkbox-4'],0,0);
		$text =  "I DO NOT consent to the Telehealth Site notifying my child's primary care provider (identified in the Enrollment Packet) that the Telehealth Site provider has issued a prescription for my child.";
		$pdf->MultiCell(0,6,$text,0,1);
		$pdf->Ln(10);
	}

	$text =  "I, the undersigned,";
	$pdf->MultiCell(0,6,$text,0,1);



	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Give permission and consent for my child to have be seen by a licensed health care provider through and by the Telehealth Site. I have received information on and understand the nature of the treatment provided at the Telehealth Site, the way it is provided, and the details and limitations of this form and style of treatment.";
	$pdf->MultiCell(0,6,$text,0,1);

	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Understand that this consent form is valid for as long as the student is enrolled at Beaufort Jasper EOC Head Start and Early Head Start and that I may revoke this consent at any time by providing notice to Shyrell Daniels, Health Manger (843-466-3564).";
	$pdf->MultiCell(0,6,$text,0,1);



	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Understand that this consent constitutes the establishment of a Physician-Patient relationship between my child and any Physician, employed by All's Children Pediatrics, who examines my child through the Telehealth Site for any and all encounters as long as the student is enrolled in Beaufort Jasper EOC Head Start and Early Head Start and that I may revoke this consent at any time by providing notice to Shyrell Daniels (843-466-3564.";
	$pdf->MultiCell(0,6,$text,0,1);




	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Give permission for the Physician, the school designated staff, and your child's primary health care provider to speak with and share medical information about your child's health issue on an as needed basis, with the understanding that this information will be treated in a confidential way.";
	$pdf->MultiCell(0,6,$text,0,1);

	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Give permission for All's Children Pediatrics to receive information from the school about my child's health history. ";
	$pdf->MultiCell(0,6,$text,0,1);



	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Understand that All's Children Pediatrics will document each encounter with my child in a medical record maintained by All's Children Pediatrics and not Beaufort Jasper EOC Head Start and Early Head Start";
	$pdf->MultiCell(0,6,$text,0,1);



	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Acknowledge that I have been offered a copy of the Notice of Privacy Practices, which addresses the ways in which All's Children Pediatrics maintains, uses and discloses my child's protected health information.";
	$pdf->MultiCell(0,6,$text,0,1);


	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Understand that I will be contacted after my child is seen to discuss my child's diagnosis, treatment options and any need to seek in person care.";
	$pdf->MultiCell(0,6,$text,0,1);


	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Understand that I will receive a visit summary for my child's encounter, either in writing or over the phone, which will include any instructions for follow-up care and any prescriptions issued for my child. ";
	$pdf->MultiCell(0,6,$text,0,1);



	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',12);

	$text =  "As Parent/Guardian of the above student, I: ";
	$pdf->MultiCell(0,6,$text,0,1);


	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Authorize the release of any information necessary to process insurance claims for payment of benefits to All's Children Pediatrics. ";
	$pdf->MultiCell(0,6,$text,0,1);

	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Authorize payment of benefits to All's Children Pediatrics for services rendered. ";
	$pdf->MultiCell(0,6,$text,0,1);


	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,5,'#',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(5,5,'',0,0);
	$text =  "Have provided details of all insurance policies that cover my child. ";
	$pdf->MultiCell(0,6,$text,0,1);



	$pdf->Ln(5);
	$pdf->SetFont('Arial','',12);

	$text =  "I have had the opportunity to read this form and the information provided. All my questions have been answered to my satisfaction.";
	$pdf->MultiCell(0,6,$text,0,1);




    //$pdf->SetFont('Arial','',14);
    //$pdf->Ln(15);
    //$text =  "Parent/Guardian name (Please Print): ".$_POST['parent_name'];
    //$pdf->Cell(0,5,$text,0,1);

   $pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(10);
	




	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$parent_signature = $_SESSION['parent_name'];
	$pdf->Cell(100,5,$parent_signature,0,0,'C');

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->SetFont('Arial','',12);
	$signature_date = $_SESSION['today'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(100,5,"Parent Signature",'T',0,'C');  // Parent signature

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date





    //$location = './save/pdf22/';


    //$name = $location.$_POST['child_Name'].".pdf";
    //$pdf->Output($name,'F');
    //$pdf->Output();


   




// $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Telehealth Consent Form.pdf";

// $_SESSION['pdf-18-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Telehealth Consent Form.pdf";



// //session_destroy();


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');


// 	echo "ok";



	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Telehealth Consent Form.pdf";

	     $_SESSION['pdf-18-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Telehealth Consent Form.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";
		







?>