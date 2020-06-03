<?php 

	require('fpdf.php');

	session_start();

   

	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	

	// $pdf->image('logo.jpg',10,10,20); // logo
	//$pdf->image('header-8.jpg',20,5,185); // logo



	// $pdf->image('check.png',36,106,3);
	// $pdf->image('check.png',36,155,3);




	// $pdf->image('check.png',36,183,3);
	// $pdf->image('check.png',36,175,3);


	// $pdf->image('check.png',127,167,3);



	//$pdf->Ln(50);

	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Permission to Screen Assess',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);

	
	
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,5,'Permission for Behaviorial, Developmental and Sensory',0,1,'C');
    $pdf->Ln(1);

    $pdf->Cell(0,5,'Screenings and Developmental Assessment',0,1,'C');


	$pdf->Ln(10);
	
	$pdf->Cell(0,5,'Child`s Name: '.$_POST['child_Name'],0,1,'L');
	$pdf->Ln(1);

	$pdf->Cell(0,5,'DOB: '.$_POST['date_of_birth'],0,1,'L');
	$pdf->Ln(1);
	$pdf->Cell(0,5,'Center`s Name: '.$_POST['center_name'],0,1,'L');







	$pdf->Ln(5);
	$pdf->SetFont('Arial','',12);
	$text =  "Children enrolled in the Head Start program are required to receive the following screenings within the first forty-five (45) days of enrollment.";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);

	$text =  "Head Start programs are also required to provide a developmental assessment to all children at least three (3) times during the school term.";
	$pdf->MultiCell(0,5,$text,0,1);




	$pdf->Ln(5);
  
	$text =  "We are requesting your permission to screen and assess your child using the following screening and assessment tools.";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$text =  "Developmental Indicators for the Assessment of Learning Fourth Edition (DIAL-4)";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);


	$pdf->SetFont('Arial','B',11);
	$text =  "Hearing and Vision Screenings";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);



	$pdf->SetFont('Arial','B',11);
	$text =  "BRIGANCE Early Head Start Screen lll ";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);

	$pdf->SetFont('Arial','B',11);
	$text =  "Teaching Strategies Gold (TSG) Developmental Assessment ";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);

	$pdf->SetFont('Arial','B',11);
	$text =  "Mental Health Classroom Observations ";
	$pdf->MultiCell(0,5,$text,0,1);
	


	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$text =  "I give my permission for my child to receive the above screenings and assessments while enrolled in the Head Start Program.";
	$pdf->MultiCell(0,5,$text,0,1);


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
	$pdf->Cell(80,5,"Parent Signature",'T',0,'C');  // Parent signature

	$pdf->Cell(35,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date












	$pdf->Ln(15);


	$pdf->SetFont('Arial','',10);
	$text =  'Revised: ';
	$pdf->Cell(40,7,$text.$_POST['revised'],'',1,'L');





	



    // $location = './save/pdf8/';


    // $name = $location.$_POST['child_Name'].".pdf";
    //$pdf->Output($name,'F');
    // $pdf->Output();

    // exit;




// $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Permission to Screen Assess.pdf";


// $_SESSION['pdf-12-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Permission to Screen Assess.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();




// 	echo "ok"


	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Permission to Screen Assess.pdf";

	     $_SESSION['pdf-12-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Permission to Screen Assess.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";







?>