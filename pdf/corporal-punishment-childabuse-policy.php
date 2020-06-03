<?php 
session_start();
	require('fpdf.php');

	



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();



    $pdf->Cell(20,20,'',0,0,'C'); // space for logo
    $pdf->image('logo-4.jpg',10,10,15); // logo


    //$pdf->Ln(10);
    $pdf->SetFont('Arial','B',25);
    $pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',19);
    $pdf->Cell(0,10,'Corporal Punishment, Child Abuse and Isolation Policy',0,1,'C');
    $pdf->Ln(1);
    $pdf->Cell(0,0,'','B',2,'L');
    $pdf->Ln(2);





	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(38,5,"Child's Name:",0,0,'L');
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(80,5,$_POST['child_Name'] ,0,0,'L');  // child name

	
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(20,5,'Center:',0,0,'L');
	$pdf->SetFont('Arial','',14);  // center
	$pdf->Cell(0,5,$_POST['center'],0,1,'L');


	$pdf->Ln(10);

	$text = "Corporal punishment is never used at a Head Start Center (inside or outside) or on a Head Start bus by parent, staff or anyone who comes in contact with the children.";

	$pdf->SetFont('Arial','',13);
	$pdf->MultiCell(0,5,$text,0,1);






	$pdf->Ln(5);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(0,7,'The policy states that a parent or staff will not: ',0,1,'L');
	$pdf->Ln(5);
	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(0,7,'1)   Use physical force, such as spanking, slapping, pulling of hair, shoving, pinching, or boxing, as a discipline measure on Head Start property or at a Head Start function.',0,1,0);


	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(0,7,'2)    Isolate a child from normal classroom activities as punishment.',0,1,0);


	$pdf->Cell(20,7,'',0,0,'C');
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(0,7,'3)   Confine the child to the classroom when the other children go to play or restricting the child from any meal with his/her classmates. ',0,1,0);



	$pdf->Ln(10);
	
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(0,7,'I have read the policy forbidding the use of corporal punishment and isolation in the Beaufort-Jasper EOC Head Start Program.  I understand that if I am found guilty of administering corporal punishment to any child on Head Start property or at a Head Start function a child abuse report will be made with the Child Protective Service. ',0,1,0);

	




	$pdf->Ln(20);


	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$parent_signature = $_SESSION['parent_name'];
	$pdf->Cell(38,5,$parent_signature,0,0,'C');

	$pdf->Cell(80,5,'',0,0,'C');

	$pdf->SetFont('Arial','',12);
	$signature_date = $_SESSION['today'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(38,5,'Parent Signature','T',0,'C');  // Parent signature

	$pdf->Cell(80,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date




	$pdf->Ln(25);

	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(13,2,'Revised:',0,0,'L');
	$pdf->SetFont('Arial','',8);  // center
	$pdf->Cell(0,2,$_SESSION['receved_date'],0,1,'L');

	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(20,5,'Program Year:',0,0,'L');
	$pdf->SetFont('Arial','',8);  // center
	$pdf->Cell(0,5,$_SESSION['program_year'],0,1,'L');



     //$location = './save/pdf3/';


     //$name = $location.$_POST['child_Name'].".pdf";
     //$pdf->Output($name,'F');
     //$pdf->Output();


		// $path = getcwd(); // /home/user/public_html/test/test.php.   
		// $path = substr($path, 0, strpos($path, "public_html"));
		// $root = $path . "public_html/";
		// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
		// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Corporal Punishment Childabuse Policy.pdf";


		// $_SESSION['pdf-40-path']  = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Corporal Punishment Childabuse Policy.pdf";

		//  //var_dump('savep');exit;
		// //	$name = $_POST['child_Name'].".pdf";
		// 	$pdf->Output($name,'F');
		// 	//$pdf->Output();



	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Corporal Punishment Childabuse Policy.pdf";

	     $_SESSION['pdf-40-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Corporal Punishment Childabuse Policy.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";








?>


