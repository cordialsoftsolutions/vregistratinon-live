<?php 
session_start();

	require('fpdf.php');

	



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();




	$_SESSION['facility'] = $_POST['field-1'];
	$_SESSION['county'] = $_POST['field-2'];

	$_SESSION['child_last']  = $_POST['field-5'];
	$_SESSION['child_first'] = $_POST['field-6'];
	$_SESSION['child_midde'] = $_POST['field-7'];
	$_SESSION['child_nick']  = $_POST['field-8'];
	




	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'South Carolina Department of Social Services ',0,1,'C');
	$pdf->Ln(1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,'Child Care Regulatory Services  ',0,1,'C');
	$pdf->Ln(1);

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(0,5,"GENERAL RECORD AND STATEMENT OF CHILD'S HEALTH FOR ADMISSION",0,1,'C');
	$pdf->Ln(1);

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(0,5,"TO CHILD CARE FACILITY",0,1,'C');
	$pdf->Ln(1);

	$pdf->Ln(10);


	$pdf->Ln(5);
	$pdf->SetFont('Arial','b',12);
	$text =  "This form is to be completed for each child at the time of enrollment in the child care facility, updated as needed when changes occur, and maintained on file at the facility. ";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(5);
	$pdf->SetFont('Arial','',12);
	$text =  "GENERAL INFORMATION: (to be completed by Parent or Guardian)";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(2);
	$text =  "Name of Facility: ".$_POST['field-1']." county: ".$_POST['field-2'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(2);

	$text =  "Address: ";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) street Address:".$_POST['field-3'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) City, state, Zip: ".$_POST['field-4'];
	$pdf->MultiCell(0,5,$text,0,1);



	$text =  "Child's Name: ";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) Last: ".$_POST['field-5'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) First: ".$_POST['field-6'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "C) Midde Initial:".$_POST['field-7'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) Nick Name: ".$_POST['field-8'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(1);
	$text =  "Date of Birth: ".$_POST['field-9']."Enrollment Date: ".$_POST['field-10'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(2);
	$text =  "Child's Current Home Address: ";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) street Address: ".$_POST['field-11'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) City, state, Zip: ".$_POST['field-12'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(2);
	$text =  "Parent/Guardian's Full Name: ".$_POST['field-13'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$text =  "Phone: ".$_POST['field-14']." Work Phone: ".$_POST['field-15']." Other Phone: ".$_POST['field-16'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(2);
	$text =  "Parent/Guardian's Full Name: ".$_POST['field-17'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$text =  "Phone: ".$_POST['field-18']." Work Phone: ".$_POST['field-19']." Other Phone: ".$_POST['field-20'];
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->SetFont('Arial','b',10);
	$pdf->Ln(5);
	$text =  "You must have two individuals who have the authority to obtain emergency medical treatment for the child. ";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->SetFont('Arial','',12);
	$pdf->Ln(1);
	$text =  "1. Person responsible if parent/guardian unavailable for emergency medical services:";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) Full Name: ".$_POST['field-21'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) Relationship: ".$_POST['field-22'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "C) street Address: ".$_POST['field-23'];
	$pdf->MultiCell(0,5,$text,0,1);	


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "D) City, state, Zip : ".$_POST['field-24'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "E) Telephone Number(s): ".$_POST['field-25'];
	$pdf->MultiCell(0,5,$text,0,1);	


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "F) Family Code Word(s):  ".$_POST['field-26'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(2);
	$text =  "2. Person responsible if parent/guardian unavailable for emergency medical services:";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) Full Name: ".$_POST['field-27'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) Relationship: ".$_POST['field-28'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "C) street Address: ".$_POST['field-29'];
	$pdf->MultiCell(0,5,$text,0,1);	


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "D) City, state, Zip : ".$_POST['field-30'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "E) Telephone Number(s): ".$_POST['field-31'];
	$pdf->MultiCell(0,5,$text,0,1);	


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "F) Family Code Word(s):  ".$_POST['field-32'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->AddPage();

	// $pdf->image('check.png',27,41,3);



	$pdf->Ln(2);
	$text =  "Is Child currently enrolled in school? (5K up to 6 years old): ".$_POST['checkbox-1'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(2);
	$text =  "My Child will regularly attend this facility FROM ".$_POST['field-33']." am/pm TO ".$_POST['field-34']." am/pm ";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(2);
	$text =  "If Child is a drop-in, indicate hours of care FROM ".$_POST['field-35']." am/pm TO ".$_POST['field-36']." am/pm ";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(2);
	$text =  "Check all days Child will regularly attend this facility:";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);

	if($_POST['checkbox-2'] == 'Yes'){
		$pdf->Cell(20,5,'',0,0,'');
		$pdf->Cell(10,5,'Mon',0,0);
	}
	
	if($_POST['checkbox-3'] == 'Yes'){	
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Tue',0,0);
	}
	if($_POST['checkbox-4'] == 'Yes'){

		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Wed',0,0);
	}
	
	if($_POST['checkbox-5'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Thurs',0,0);
	}
	
	if($_POST['checkbox-6'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Fri',0,0);
	}
	
	if($_POST['checkbox-7'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Sat',0,0);
	}

	if($_POST['checkbox-8'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Sun',0,1);
	}
	$pdf->Ln(4);
		


	$pdf->Ln(2);
	$text =  "Check all days Child will regularly attend this facility:";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);
	

	if($_POST['checkbox-9'] == 'Yes'){
		$pdf->Cell(20,5,'',0,0);
		$pdf->Cell(30,5,'Meals are not offered',0,0);
	}
	

	if($_POST['checkbox-10'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(20,5,'Breakfast ',0,0);
	}
	

	if($_POST['checkbox-11'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(25,5,'Morning Snack',0,0);
	}
	

	if($_POST['checkbox-12'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(15,5,'Lunch',0,1);
	}
	

	if($_POST['checkbox-13'] == 'Yes'){
		$pdf->Ln(1);
		$pdf->Cell(20,5,'',0,0);
		$pdf->Cell(30,5,'Afternoon Snack',0,0);
	}
	
	if($_POST['checkbox-14'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Dinner ',0,0);

	}
	

	if($_POST['checkbox-15'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Evening Snack ',0,1);
	}



	$pdf->Ln(5);
	$text =  "HEALTH INFORMATION: (to be completed by Parent or Guardian):";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$text =  "Family Physician or Health Resource:";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Name: '.$_POST['field-37'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'street Address:'.$_POST['field-38'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'City, state, Zip: '.$_POST['field-39'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Telephone: '.$_POST['field-40'],0,1);

	$pdf->Ln(2);
	$pdf->Cell(0,5,'Emergency Care Provider',0,1);


	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Emergency Facility Name : '.$_POST['field-41'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'street Address: '.$_POST['field-42'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'City, state, Zip: '.$_POST['field-43'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Telephone: '.$_POST['field-44'],0,1);





	$pdf->Ln(2);
	$pdf->Cell(0,5,'Dental Care Provider',0,1);


	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Name : '.$_POST['field-45'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'street Address: '.$_POST['field-46'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'City, state, Zip: '.$_POST['field-47'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Telephone: '.$_POST['field-48'],0,1);



	$pdf->Ln(2);
	$pdf->Cell(0,5,'Health Care Provider',0,1);


	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Name : '.$_POST['field-49'],0,1);

	



	if($_POST['checkbox-18'] == 'Yes'){

		$pdf->Ln(2);
		$pdf->Cell(0,5,'Certificate of immunization: N/A',0,1);
		

		$pdf->Ln(1);
		$pdf->Cell(0,5,'Please Explain: '.$_POST['field-50'],0,1);
	}else{
		$pdf->Ln(2);
		$pdf->Cell(0,5,'Certificate of immunization: '.$_POST['checkbox-16'],0,1);
	}
	


	$pdf->Ln(5);
	$pdf->MultiCell(0,5,'My child has the following health conditions such as  allergies, asthma, diabetes, epliepsy, etc. and or take the following medications on a regular basis.',0,1);


	$pdf->Ln(5);
	$pdf->Cell(0,5,'Aditional comments: '.$_POST['field-51'],0,1);

	$pdf->Ln(5);
	$pdf->Cell(0,5,'I certify to the best of my knowledge:',0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Child Name:'.$_POST['field-52'],0,1);

	$pdf->MultiCell(0,5,'is in good mental and physical health and able to participate in the child care program at',0,1);
	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$pdf->MultiCell(0,5,'Name of the child care facility: '.$_POST['field-53'],0,1);


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
	$pdf->Cell(100,5,"Parent Signature",'T',0,'C');  // Parent Signature

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date





	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');


	$pdf->Ln(10);
	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$pdf->Cell(100,5,$_POST['field-57'],0,0,'C');

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->SetFont('Arial','',12);
	$signature_date = $_SESSION['today'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(100,5,"Director/operator/staff designee",'T',0,'C');  // Parent signature

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date






    // $location = './save/pdf12/';


    //$name = $location.$_POST['field-6'].".pdf";
    //$pdf->Output($name,'F');
    //$pdf->Output();





    // exit();


//       $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health.pdf";
// //$AnotherName = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health Copy.pdf";



// $_SESSION['pdf-16-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
//     $pdf->Output($name,'F');
// 	//$pdf->Output($AnotherName,'F');
	
// 		echo "ok";

	




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health.pdf";

	     $_SESSION['pdf-16-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";
		




?>