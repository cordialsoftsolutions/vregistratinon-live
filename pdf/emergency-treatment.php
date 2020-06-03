<?php 

	require('fpdf.php');

	session_start();

	$_SESSION['date_of_birth'] = $_POST['date_of_birth'];

	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();




	

    //$pdf->image('logo-5.jpg',30,10,140); // logo

    //$pdf->Ln(50);
    //$pdf->SetFont('Arial','I',12);
    //$pdf->Cell(0,8,'CONSENT FOR EMERGENCY TREATMENT',0,1,'C');


	
$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Consent for Emergency Treatment',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);





	$pdf->Ln(10);
	$pdf->SetFont('Arial','I',12);
	$name = $_POST['name'];
	$text =  "I ".$name.", hereby give my consent for emergency medical/dental treatment of the child listed below by any licensed physician or dentist while under the care of Beaufort-Jasper EOC Head Start and for transportation of the child to and from the source of emergency treatment.";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);
	$text =  "This care may include examinations and any test which, in the opinion of the physician, are deemed necessary or advisable.";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(5);
	$text =  "This does not include the right to perform surgical operations without further consent, except in the case of an emergency after an effort has been made to locate me, and I am not available.";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(15);


	$pdf->SetFont('Arial','',13);
	$pdf->Cell(60,7,$_POST['child_Name'],0,0,'L');
	$pdf->Cell(5,7,"",0,0,'L');
	
	
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(60,7,$_POST['date_of_birth'],0,0,'L');
	$pdf->Cell(5,7,"",0,0,'L');
	
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(40,7,$_POST['center_name'],0,0,'L');
	$pdf->Cell(5,7,"",0,0,'L');

	$pdf->Ln(7);


	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(60,7,"Child's Full Name",'T',0,'L');
	$pdf->Cell(5,7,"",0,0,'L');
	
	
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(60,7,"Date of Birth",'T',0,'L');
	$pdf->Cell(5,7,"",0,0,'L');
	
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,7,"Center's Name",'T',0,'L');
	$pdf->Cell(5,7,"",0,0,'L');




	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(10);


	
	

	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$parent_signature = $_SESSION['parent_name'];
	$pdf->Cell(60,5,$parent_signature,0,0,'C');
	$pdf->Cell(5,7,"",0,0,'L');
	
	
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(60,7,$_POST['relation'],0,0,'L');
	$pdf->Cell(5,7,"",0,0,'L');
	
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(40,7,$_SESSION['today'],0,0,'L');
	$pdf->Cell(5,7,"",0,0,'L');



	$pdf->Ln(7);


	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(60,7,"Parent Signature",'T',0,'L');
	$pdf->Cell(5,7,"",0,0,'L');
	
	
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(60,7,"Relationship to Child",'T',0,'L');
	$pdf->Cell(5,7,"",0,0,'L');
	
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,7,"Date Signed",'T',0,'L');
	$pdf->Cell(5,7,"",0,0,'L');



	

	$pdf->Ln(25);
	$pdf->SetFont('Arial','I',12);
	$text =  "THIS FORM MUST BE UPDATED YEARLY AND IS ONLY VALID FOR THE CURRENT SCHOOL YEAR.";
	$pdf->MultiCell(0,5,$text,0,1);



    // $location = './save/pdf5/';


    // $name = $location.$_POST['name'].".pdf";
    //$pdf->Output($name,'F');
    //  $pdf->Output();



	 
// $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Emergency Treatment.pdf";


// $_SESSION['pdf-7-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Emergency Treatment.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();



// 	echo "ok";




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Emergency Treatment.pdf";

	     $_SESSION['pdf-7-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Emergency Treatment.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";







?>