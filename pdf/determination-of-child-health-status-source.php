<?php 
session_start();


	require('fpdf.php');


	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	/*$pdf->image('logo-13.jpg',10,5,30);



	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'BEAUFORT-JASPER EOC HEAD START',0,1,'C');
	$pdf->Ln(1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'POST OFFICE BOX 2296 - 1905 DUKE STREET SUITE 250 ',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,5,"BEAUFORT, SOUTH CAROLINA 29901 ",0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,5,"TELEPHONE (843) 255-7237/FAX (843) 255-7225 ",0,1,'C');
	$pdf->Ln(1);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,5,"Determination of Child's Health Status and Source",0,1,'C');
	$pdf->Ln(10);*/


	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',19);
	$pdf->Cell(0,10,'Determination of Child’s Health Status and Source',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);




	$pdf->SetFont('Arial','',16);
	$pdf->Cell(0,5,"Child's Name:".$_POST['child_Name'],0,1,'L');
	$pdf->Ln(10);
	$pdf->Cell(0,5,"Does the child have a doctor or clinic?, ".$_POST['checkbox-1'],0,1,'L');
	$pdf->Ln(4);

	$pdf->Cell(0,5,"Name of Physician: ".$_POST['physician_name'],0,1,'L');
	$pdf->Ln(4);

	$pdf->Cell(0,5,"Address: ".$_POST['physician_address'],0,1,'L');
	$pdf->Ln(4);

	$pdf->Cell(100,5,"Phone: ".$_POST['physician_phone'],0,0,'L');
	$pdf->Cell(60,5,"Date of last exam: ".$_POST['physician_date'],0,1,'L');
	$pdf->Ln(10);


	$pdf->Cell(0,5,"Does the child have a dentist?, ".$_POST['checkbox-2'],0,1,'L');
	$pdf->Ln(4);



	$pdf->Cell(0,5,"Name of Dentist: ".$_POST['dentist_name'],0,1,'L');
	$pdf->Ln(4);

	$pdf->Cell(0,5,"Address: ".$_POST['dentist_address'],0,1,'L');
	$pdf->Ln(4);

	$pdf->Cell(100,5,"Phone: ".$_POST['dentist_phone'],0,0,'L');
	$pdf->Cell(60,5,"Date of last exam :".$_POST['dentist_date'],0,1,'L');
	$pdf->Ln(10);

	$pdf->Cell(0,5,"Health Insurance/Medicaid # ".$_POST['Health_Insurance'],0,1,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,5,"Private Insurance # ".$_POST['Private_Insurance'],0,1,'L');
	$pdf->Ln(4);

	$pdf->Cell(0,5,"Other Insurance #".$_POST['Other_Insurance'],0,1,'L');
	$pdf->Ln(30);



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




    // $location = './save/pdf13/';


    // $name = $location.$_POST['child_Name'].".pdf";
    //$pdf->Output($name,'F');
    // $pdf->Output();





// 	 $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Determination of Child Health Status Source.pdf";


// $_SESSION['pdf-6-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Determination of Child Health Status Source.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();

// 	echo "ok";




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Determination of Child Health Status Source.pdf";

	     $_SESSION['pdf-6-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Determination of Child Health Status Source.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";









?>