<?php 

	require('fpdf.php');

	session_start();



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();




    //$pdf->SetFont('Arial','B',14);
    //$pdf->Cell(0,5,'BEAUFORT JASPER EOC HEAD START',0,1,'C');
    //$pdf->Ln(1);

    //$pdf->Cell(0,4,'TRANSPORTATION PERMISSION AGREEMENT',0,1,'C');



    //$pdf->Ln(10);

	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Transportation Permission Agreement',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);


	$pdf->SetFont('Arial','',12);
	$text =  "Child Name: ".$_POST['child_Name'];
	$pdf->Cell(100,5,$text,0,0,'L');

	$pdf->Cell(10,5,'',0,0,'L');
	$text =  "Center: ".$_POST['center'];
	$pdf->Cell(100,5,$text,0,1,'L');

	$pdf->Ln(5);
	$text =  "Parent Name: ".$_POST['parent_name'];
	$pdf->Cell(100,5,$text,0,1,'L');






	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$text =  "I give Beaufort-Jasper EOC Head Start permission to transport my child to the Center,  to the Responsible Receiver, home, on field trips, and any other away from the center activities/services. ";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$text =  "I will be at the bus stop to put my child on the bus in the morning and to receive him/her from the bus in the afternoon. I understand I am responsible for giving a written and  signed notice to the bus driver prior to changing the following: ";
	$pdf->MultiCell(0,5,$text,0,1);












	$pdf->Ln(10);


	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(30,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "Responsible Receiver(s) ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(30,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "Pick-up/Drop-off point";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(3);	


	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(30,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "Updates to Parent/Guardian contact information ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(3);







	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$text =  "I understand the responsible receiver must be an adult, have picture identification and know the family password/code. I agree to attend Safety Education Training session for parents within the first thirty days of school.";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(5);

	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(30,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "Pedestrian Safety ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(30,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "Bus Evacuation ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(3);	


	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(30,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "Bus Safety ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(3);



	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$text =  "A Head Start Representative has explained to me the following penalties for not being at home or to the bus stop to receive my child: ";
	$pdf->MultiCell(0,5,$text,0,1);




	$pdf->Ln(5);

	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(35,5,'',0,0,'L');
	$pdf->Cell(25,5,'1st Offense',0,0,'L');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "A parent conference will be scheduled.";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(35,5,'',0,0,'L');
	$pdf->Cell(25,5,'2nd Offense',0,0,'L');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "A multi-team conference will be scheduled. (Family Service Department and Transportation Specialist)";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(35,5,'',0,0,'L');
	$pdf->Cell(25,5,'3rd Offense',0,0,'L');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "The Sheriff or Police Department will be called to Pick-up your child from the Central Office. A child abuse and neglect report will be submitted to the Child Protective Services at Department of Social Services.";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(3);




	

	



	//$pdf->Ln(15);
	// $pdf->SetFont('Arial','',12);
	// $pdf->Cell(130,5,"Parent's Name/ or Responsible Receiver " .$_POST['parent_s_name'],0,0);
	// $pdf->Cell(50,5,'Date '.$_POST['parent_date'],0,1);
	// $pdf->Ln(5);

	// $pdf->Cell(130,5,'Signature Head Start Representative ' .$_POST['head_name'],0,0);
	// $pdf->Cell(50,5,'Date '.$_POST['head_date'],0,1);

	


	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(5);




	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$parent_signature = $_SESSION['parent_name'];
	$pdf->Cell(100,5,$parent_signature,0,0,'C');

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->SetFont('Arial','',12);
	$signature_date = $_SESSION['today'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(100,5,"Parent Signature",'T',0,'C');  // Parent signature

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date

	$pdf->Ln(10);




    //$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
    //$pdf->SetFont('BITCBLKAD','',16);
    //$pdf->Cell(100,5,$_POST['head_name'],0,0,'C');

    //$pdf->Cell(20,5,'',0,0,'C');

    //$pdf->SetFont('Arial','',12);
    //$signature_date = $_SESSION['today'];
    //$pdf->Cell(50,5,$signature_date,0,1,'C');
	


    //$pdf->SetFont('Arial','B',10);
    //$pdf->Cell(100,5,"Signature Head Start Representative",'T',0,'C');  // Parent signature

    //$pdf->Cell(20,5,'',0,0,'C');

    //$pdf->Cell(50,5,'Date','T',0,'C');  // Date








	
   // $location = './save/pdf16/';


   // $name = $location.$_POST['child_Name'].".pdf";
   // $pdf->Output($name,'F');
  //$pdf->Output();

  //exit;




// 	$path = getcwd(); // /home/user/public_html/test/test.php.   
// 	$path = substr($path, 0, strpos($path, "public_html"));
// 	$root = $path . "public_html/";
// 	$SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// 	$name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Transportation Permission Form.pdf";

// 	$_SESSION['pdf-20-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Transportation Permission Form.pdf";




//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');



// 	echo "ok";



	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Transportation Permission Form.pdf";

	     $_SESSION['pdf-20-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Transportation Permission Form.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";
		








?>