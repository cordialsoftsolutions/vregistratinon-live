<?php 
session_start();

	require('fpdf.php');



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	

    //$pdf->SetFont('Arial','',14);
    //$pdf->Cell(0,5,'Beaufort- Jasper EOC Head Start',0,1,'C');
    //$pdf->Ln(1);

    //$pdf->SetFont('Arial','',20);
    //$pdf->Cell(0,8,'Verification of Responsible Receiver','B',1,'C');



	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',19);
	$pdf->Cell(0,10,'Verification of Responsible Receiver',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	

	$pdf->Ln(2);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,4,'ACCORDING TO THE BJEOC HEAD START POLICY, CHILD MUST BE RELEASED TO ONLY INDIVIDUALS AUTHORIZED TO PICK THEM ',0,1,'C');
	$pdf->Cell(0,4,'UP. ONLY PERSONS LISTED BELOW WILL BE PERMITTED
TO PICK UP YOUR CHILD. ALL PERSONS MUST HAVE AND ',0,1,'C');
	$pdf->Cell(0,4,'SHOW THEIR PICTURE ID. MAKE SURE YOU LIST ALL ADULTS EVEN IF YOU RESIDE IN THE SAME HOUSEHOLD ',0,1,'C');
	$pdf->Cell(0,5,' PERSONS MUST BE 18 YEARS OR OLDER ','B',1,'C');


	$pdf->Ln(5);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,8,'THE FOLLOWING ADULTS ARE AUTHORIZED TO PICK UP MY CHILD FROM SCHOOL',0,1,'C');


	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,'1. Parent/Guardian Name: '.$_POST['parent_name_1'],0,1,'L');

	$pdf->Ln(2);
	$pdf->Cell(10,5,'',0,0);
	$pdf->Cell(50,5,'Mobile Number: '.$_POST['call_phone_1'],0,0);

	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(50,5,'Work Phone: '.$_POST['work_phone_1'],0,0);

	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(50,5,' Home Phone: '.$_POST['home_phone_1'],0,1);
	$pdf->Ln(3);



	$pdf->Cell(10,5,'',0,0);
	$pdf->Cell(70,5,'Address: '.$_POST['address_1'],0,0);

	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(30,5,'City: '.$_POST['city_1'],0,0);

	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(30,5,' State: '.$_POST['state_1'],0,0);


	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(20,5,' Zip: '.$_POST['zip_1'],0,1);
	$pdf->Ln(5);



	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,'2. Parent/Guardian Name: '.$_POST['parent_name_2'],0,1,'L');

	$pdf->Ln(2);
	$pdf->Cell(10,5,'',0,0);
	$pdf->Cell(50,5,'Mobile Number: '.$_POST['call_phone_2'],0,0);

	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(50,5,'Work Phone: '.$_POST['work_phone_2'],0,0);

	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(50,5,' Home Phone: '.$_POST['home_phone_2'],0,1);
	$pdf->Ln(3);



	$pdf->Cell(10,5,'',0,0);
	$pdf->Cell(70,5,'Address: '.$_POST['address_2'],0,0);

	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(30,5,'City: '.$_POST['city_2'],0,0);

	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(30,5,' State: '.$_POST['state_2'],0,0);


	$pdf->Cell(5,5,'',0,0);
	$pdf->Cell(20,5,' Zip: '.$_POST['zip_2'],0,1);
	





	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,8,'PERSON(S) OTHER THAN PARENT/GUARDIAN AUTHORIZED TO PICK UP CHILD',0,1,'C');


	$pdf->Ln(3);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(62,5,' Name of Authorized Person',1,0,'L');
	$pdf->Cell(62,5,' Phone (Cell/Home/Work)',1,0,'L');
	$pdf->Cell(62,5,' Relationship to Child',1,1,'L');


	$pdf->Cell(62,9,$_POST['tbl-r-1-1'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-1-2'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-1-3'],1,1,'L');

	$pdf->Cell(62,9,$_POST['tbl-r-2-1'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-2-2'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-2-3'],1,1,'L');

	$pdf->Cell(62,9,$_POST['tbl-r-3-1'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-3-2'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-3-3'],1,1,'L');

	$pdf->Cell(62,9,$_POST['tbl-r-4-1'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-4-2'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-4-3'],1,1,'L');

	$pdf->Cell(62,9,$_POST['tbl-r-5-1'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-5-2'],1,0,'L');
	$pdf->Cell(62,9,$_POST['tbl-r-5-3'],1,1,'L');




	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,5,'',0,0,'L');
	$text =  "FAMILY CODE WORD (S): ".$_POST['famlily_code'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,5,'',0,0,'L');
	$text =  "I authorize BJEOC Head Start to release my child to any person listed above. I understand all 'Authorized Pick-Up Person' must be at least 18 years old, will be asked to provide photo ID, and the family code word(s).  I agree that this authorization shall remain valid for the duration of my child's enrollment in Head Start until changed in writing by completing the required form, in person, at my child's Head Start Center.  ";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$text =  "Name of Child(ren): ".$_POST['child_Name'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(5);
	$pdf->SetFont('Arial','I',8);
	$text =  "Authorized by:";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);


	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(3);


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


	






   // $location = './save/pdf19/';


   // $name = $location.$_POST['child_Name'].".pdf";
   // $pdf->Output($name,'F');
   // $pdf->Output();
   //exit();




//  $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Responsibe Reciever Authorization Form 2019.pdf";



// $_SESSION['pdf-15-path'] =  $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Responsibe Reciever Authorization Form 2019.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');



// 	echo "ok";



	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Responsibe Reciever Authorization Form 2019.pdf";

	     $_SESSION['pdf-15-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Responsibe Reciever Authorization Form 2019.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";







?>