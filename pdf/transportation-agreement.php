<?php 

	require('fpdf.php');

	session_start();


	$_SESSION['head_name'] = $_POST['head_name'];


	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	

    //$pdf->SetFont('Arial','B',14);
    //$pdf->Cell(0,5,'BEAUFORT JASPER EOC HEAD START',0,1,'C');
    //$pdf->Ln(1);

    //$pdf->Cell(0,4,'TRANSPORTATION AGREEMENT',0,1,'C');


    //$pdf->SetFont('Arial','',10);
    //$pdf->Ln(1);
    //$pdf->Cell(0,4,'(PRIVATE TRANSPORTATION ONLY)',0,1,'C');
    //$pdf->Ln(5);

	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',19);
	$pdf->Cell(0,10,'Transportation Agreement',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,10,'Private Transportation Only',0,1,'C');
		$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(5);




	

	$pdf->SetFont('Arial','',12);
	$text =  "Child Name: ".$_POST['child_Name'];
	$pdf->Cell(100,5,$text,0,0,'L');

	$pdf->Cell(10,5,'',0,0,'L');
	$text =  "Center: ".$_POST['center'];
	$pdf->Cell(100,5,$text,0,1,'L');

	$pdf->Ln(2);
	$text =  "Parent Name: ".$_POST['parent_name'];
	$pdf->Cell(100,5,$text,0,1,'L');







	$pdf->Ln(2);
	$pdf->SetFont('Arial','b',11);
	//$text =  "I will transport my child to ".$_SESSION['center']." Head Start Center on a daily basis";
	$text =  "I will transport my child to the Head Start Center above on a daily basis";
	$pdf->MultiCell(0,4,$text,0,1);

	$pdf->Ln(2);
	$text =  "and I agree to the conditions stated below:";
	$pdf->MultiCell(0,4,$text,0,1);

	$pdf->Ln(2);













	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "Arrival time should be between 7:15 AM and 7:45 AM.";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(1);


	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "My child will be in regular attendance at the Center. ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(1);


	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "When my child will be absent, I will call the Center by 8:15 AM";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(1);



	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "I understand that I or the authorized person must sign my child in and out each day upon his/her arrival to or departure from the center";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(1);



	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "I will stop by the office, pick up a pass, and sign in before taking the child to his/her assigned class.";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(1);



	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "When arriving at the Center with my child and the teacher states he/she cannot receive the child because he/she appears to be ill, I will take my child back home without an argument";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(1);



	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "I further understand that my child will not be released to anyone other than the person(s) who I have authorized in writing to receive my child. ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(1);


	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$text =  "I or authorized responsible person will pick up my child each day by";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(2);


		$pdf->SetFont('Arial','',10);
		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:30 at Beaufort ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);

		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:45 PM at Sandalwood ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);


		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:30 PM at Davis (Pre-school & Early Head)  ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);

		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:45 P.M. Leroy H. Gilliard ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);



		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:45 PM for Robertville (EHS)";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);

		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:30 PM at Robertville (Pre-school) ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);

		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:30 PM Ridgeland (Must pick child up in Car Riders Line) ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);

		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:30 PM Hardeeville (Must pick child up in Car Riders Line) ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);

		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2:30 PM St. Helena EHS ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);



	

	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$text =  "I will notify Head Start in writing of any changes such as: ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(2);



		$pdf->SetFont('Arial','',10);
		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "1. Change of address and telephone number ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);

		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "2. Change of responsible receiver";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);


		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "3. Medical condition ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);

		$pdf->Cell(30,5,'',0,0,'L');
		$text =  "4. Change of custody, restraining orders, etc. ";
		$pdf->MultiCell(0,4,$text,0,1);
		$pdf->Ln(2);




	$pdf->SetFont('Arial','b',11);

	$text =  "I understand the following actions will be implemented if I am late to pick-up my child from his/her Center:";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(2);



	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "The Center staff will call the responsible receiver to pick the child up. ";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(2);


	$pdf->SetFont('Arial','b',11);
	$pdf->Cell(10,5,'',0,0,'L');
	$pdf->Cell(10,5,'o',0,0,'R');
	$pdf->Cell(2,5,'',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$text =  "If the child is still at the Center 15 minutes after the designated time, the Center staff will call the Central Office and an Administrative staff may contact the Sheriff's Department";
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(2);





	$pdf->Ln(2);
	// $pdf->SetFont('Arial','',12);
	// $pdf->Cell(130,5,"Parent's Name/ or Responsible Receiver " .$_POST['parent_s_name'],0,0);
	// $pdf->Cell(50,5,'Date '.$_POST['parent_date'],0,1);
	// $pdf->Ln(5);

	// $pdf->Cell(130,5,'Signature Head Start Representative ' .$_POST['head_name'],0,0);
	// $pdf->Cell(50,5,'Date '.$_POST['head_date'],0,1);

	
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
	


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(100,5,"Parent Signature",'T',0,'C');  // Parent Signature

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



    //$location = './save/pdf14/';


    // $name = $location.$_POST['input-1'].".pdf";
    // $pdf->Output($name,'F');
    // $pdf->Output();
    //exit();




// 	$path = getcwd(); // /home/user/public_html/test/test.php.   
// 	$path = substr($path, 0, strpos($path, "public_html"));
// 	$root = $path . "public_html/";
// 	$SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// 	$name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Transportation Agreement.pdf";


// 	$_SESSION['pdf-19-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Transportation Agreement.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();




// 	echo "ok";





	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Transportation Agreement.pdf";

	     $_SESSION['pdf-19-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Transportation Agreement.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";
		








?>