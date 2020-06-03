<?php 
	session_start();


	$_SESSION['center'] = $_POST['center'];

	require('fpdf.php');


	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	$pdf->image('circle.jpg',24,71,7);
	$pdf->image('circle.jpg',24,78,7);
	$pdf->image('circle.jpg',24,85,7);
	$pdf->image('circle.jpg',24,92,7);
	$pdf->image('circle.jpg',24,99,7);
	$pdf->image('circle.jpg',24,106,7);
	$pdf->image('circle.jpg',24,113,7);



	$pdf->image('circle.jpg',24,140,7);
	$pdf->image('circle.jpg',24,147,7);
	$pdf->image('circle.jpg',24,154,7);
	$pdf->image('circle.jpg',24,175,7);
	$pdf->image('circle.jpg',24,189,7);






    //$pdf->SetFont('Arial','B',16);
    //$pdf->Cell(0,8,'Beaufort Jasper EOC Head Start ',0,1,'C');

    //$pdf->Cell(0,8,'Policy Agreement',0,1,'C');

    //$pdf->Ln(20);

	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Policy Agreement',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);




	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(38,5,"Child's Name:",0,0,'L');
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(80,5,$_POST['child_Name'] ,0,0,'L');  // child name

	
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(20,5,'Center:',0,0,'L');
	$pdf->SetFont('Arial','',14);  // center
	$pdf->Cell(0,5,$_SESSION['center'],0,1,'L');


	$pdf->Ln(5);

	$text = "I have received the Beaufort Jasper EOC Head Start Handbook. The policies listed below have been explained to me by a Head Start Staff.";

	$pdf->SetFont('Arial','',13);
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(5);
	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(80,7,'Discipline',0,1,'L');

	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(80,7,'Field Trips',0,1,'L');


	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(80,7,'Administering Medication',0,1,'L');

	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(80,7,'Drop-off and Pick - up ',0,1,'L');


	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(80,7,'Transportation',0,1,'L');

	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(80,7,'Child Abuse',0,1,'L');

	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',13);
	$pdf->Cell(80,7,'Attendance',0,1,'L');



	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(50,5,"Parental Agreement",'B',1,'L');


	$pdf->Ln(5);
	$pdf->Cell(10,7,'',0,0,'C');
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(50,5,"I agree: ",0,1,'L');


	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,7,'That my child will be in regular attendance at his/her assigned Head Start Center.',0,1,'L');

	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,7,'To call the center when my child will be absent',0,1,'L');


	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(0,7,'To take and meet my child at the assigned bus stop and/or to designate a responsible receiver (an adult) to fulfill this responsibility freeing Head Start from any and all responsibility after my child gets off the bus',0,1,0);


	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(0,7,'If I provide transportation, I agree to be at the center on time to drop-off and  pick - up my child. ',0,1,0);

	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(0,7,"To update all forms whenever changes occur and immediately notify the center of any changes of address or telephone number.",0,1,0);




	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(38,5,"Parent's Name:",0,0,'L');
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(80,5,$_POST['parent_name'],0,0,'L');  // child name

	

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
	$pdf->Cell(80,5,"Parent Signature",'T',0,'C');  // Parent signature

	$pdf->Cell(35,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date







//$location = './save/pdf2/';


//    $name = $location.$_POST['child_name'].".pdf";
//    $pdf->Output($name,'F');
//     $pdf->Output();

//     exit();

// $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Policy Agreement.pdf";

// $_SESSION['pdf-14-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Policy Agreement.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();




// 	echo "ok";




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Policy Agreement.pdf";

	     $_SESSION['pdf-14-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Policy Agreement.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";









?>