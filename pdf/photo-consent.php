<?php 

	require('fpdf.php');

	session_start();



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();




	// $pdf->image('check.png',25,145,5); // check
    //$pdf->image('logo-13.jpg',170,15,20);
    //$pdf->Ln(5);
	

    //$pdf->SetFont('Arial','',18);
    //$pdf->Cell(0,5,'Beaufort -Jasper EOC Head Start',0,1,'C');
    //$pdf->Ln(1);

    //$pdf->SetFont('Arial','',12);
    //$pdf->Cell(0,5,'1905 Duke Street, Suite 250',0,1,'C');
    //$pdf->SetFont('Arial','',12);
    //$pdf->Cell(0,5,'Beaufort, SC 29902',0,1,'C');
    //$pdf->SetFont('Arial','',12);
    //$pdf->Cell(0,6,'Phone: (843)255-7233 Fax: (843) 255-7225','B',1,'C');

    //$pdf->Ln(10);


	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',19);
	$pdf->Cell(0,10,'Photo Consent Form',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');



	$pdf->SetFont('Arial','',12);
	$text =  "We take photographs (and may take videos) of your child during the school year to attach to your child's school record to use for identification purposes and at times to display inside our school building.";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(5);
	$text =  "Ocassionally, we may use these photographs or video images for recruitment activites, BJEOC Head Start website, or, to provide information on Head Start Start Initiatives. Your child's name will not be used in any photo caption or text.";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(5);
	$text =  "Please review and select an option below.";
	$pdf->Cell(0,5,$text,'B',1);




	$pdf->SetFont('Arial','',14);
	$pdf->Ln(10);
	$text =  "Child Name: ".$_POST['child_Name'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(4);
	$text =  "Parent Name: ".$_POST['parent_name'];
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(5);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(20,5,'',0,0);
	$text =  $_POST['checkbox-1'].", I give permission to BJEOC Head Start to take photos of my child for school records for identification purposes and to ensure saftey.";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(5);
	$pdf->Cell(20,5,'',0,0);
	$text =  $_POST['checkbox-2'].", I give permission to BJEOC Head Start to take photos of my child during classroom activities, field trips, and events held at the center for display in the classroom and at times display in the school building";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);
	$pdf->Cell(20,5,'',0,0);
	$text =  $_POST['checkbox-3'].", I give permission to BJEOC Head Start to use these photographs or video images for recruitment activities, BJEOC Head Start website, and to provide information on BJEOC Head Start Initiatives";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);
	$pdf->Cell(20,5,'',0,0);
	$text =  $_POST['checkbox-4'].", I  do not give BJEOC Head Start permisison use these photographs or video images for recruitment activities, BJEOC Head Start website, and to provide information on BJEOC Head Start Initiatives.";
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






	
    //$location = './save/pdf21/';


    //$name = $location.$_POST['child_Name'].".pdf";
    //$pdf->Output($name,'F');
    // $pdf->Output();


	    //$location = './save/pdf8/';


    //$name = $location.$_POST['child_Name'].".pdf";
    //$pdf->Output($name,'F');
    //$pdf->Output();





// $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Photo Consent.pdf";



// $_SESSION['pdf-13-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Photo Consent.pdf";

//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();





// 	echo "ok";




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Photo Consent.pdf";

	     $_SESSION['pdf-13-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Photo Consent.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";








?>