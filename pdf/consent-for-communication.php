<?php 
session_start();
	require('fpdf.php');

	$_SESSION['Relationship-to-child'] = $_POST['relation_1'];



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();




	$pdf->Cell(20,20,'',0,0,'C'); // space for logo

	$pdf->image('logo-4.jpg',10,10,15); // logo


	// check box 


    //if($_POST['checkbox-1'] == 'true'){
    //    $pdf->image('check.png',18,69,5);


    //}


    //if($_POST['checkbox-2'] == 'true'){
    //    $pdf->image('check.png',18,90,5);
    //}

    //if($_POST['checkbox-3'] == 'true'){
    //    $pdf->image('check.png',18,169,5);
    //}


    //if($_POST['checkbox-4'] == 'true'){
    //    $pdf->image('check.png',18,190,5);
    //}





    //$pdf->Ln(13);
    //$pdf->Cell(18,20,'',0,0,'C');
	
    //$pdf->SetFont('Arial','B',12);
    //$pdf->Cell(80,8,'Beaufort Jasper EOC Head Start',0,0,'L');

    //$pdf->SetFont('Arial','',11);
    //$pdf->Cell(90,8,'Parent Communication Consent Form ',0,1,'L');
    //$pdf->Cell(0,0,'','B',1,'L');




	// $pdf->Cell(3,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(5,10,'',0,0,'L');
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'L');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Parent Communication Consent Form',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);


	
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Text Messaging Consent','B','L');


	$pdf->Ln(6);
	$pdf->SetFont('Arial','',12);
	$pdf->MultiCell(0,5,'There may be times throughout the year that Head Start would like to send a brief text message to parents (ex. event reminds, center information, family service information, etc.). Since text messaging is not free; parents who want to receive texts must complete the information below giving permission.',0,1);
	$pdf->Ln(6);


	 if($_POST['checkbox-1'] == 'true'){
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(15,20,'',0,0,'C');
		$pdf->MultiCell(0,5,"Yes, I want to receive text messages from my child's Head Start center at the following cell number",0,1);
		$pdf->Ln(2);
    }


	
	

	



	$pdf->Cell(15,20,'',0,0,'C');
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(38,5,"Cell number:",0,0,'L');
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(40,5,$_POST['call_number_1'],0,0,'L');  // child name

	
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(52,5,'Relationship to child:',0,0,'L');
	$pdf->SetFont('Arial','',14);  // center
	$pdf->Cell(0,5,	$_POST['relation_1'],0,1,'L');



	$pdf->Ln(6);
	

	 if($_POST['checkbox-2'] == 'true'){
        $pdf->SetFont('Arial','',12);
		$pdf->Cell(15,20,'',0,0,'C');
		$pdf->MultiCell(0,5,"No, I do not want to receive text messages at this time.",0,1);
		$pdf->Ln(10);
    }




	

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(30,5,'Child Name: ',0,0,'L');
	$pdf->Cell(0,5,$_POST['child_Name'],0,1,'L');

	$pdf->Ln(2);
	$pdf->Cell(45,5,"Parent Name: ",0,0,'L');
	$pdf->Cell(0,5,$_POST['parent_signature'],0,1,'L');  // child name

	
	$pdf->Ln(2);
	$pdf->Cell(15,5,'Date: ',0,0,'L');
	$pdf->Cell(0,5,$_POST['date'],0,1,'L');




	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(50,5,'Email Consent','B','L');


	$pdf->Ln(6);
	$pdf->SetFont('Arial','',12);
	
	$pdf->MultiCell(0,5,"There may be times throughout the year that Head Start would like to email parents (ex. event reminds, center information, family service information, etc.).  E-mail communication is another possible way for parents to communicate with your child's Head Start center. Although e-mail is a valuable tool, it is important to remember that it is not always a completely secure and confidential method of communication.  If you would like to receive communication through email, please complete the information below giving permission.",0,1);




	$pdf->Ln(6);

	 if($_POST['checkbox-3'] == 'true'){
      	$pdf->SetFont('Arial','',12);
		$pdf->Cell(15,20,'',0,0,'C');
		$pdf->MultiCell(0,5,"Yes, I want to receive emails from my child's Head Start center at the following email address",0,1);
		$pdf->Ln(2);
    }


 



	$pdf->Cell(15,20,'',0,0,'C');

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(20,5,"Email:",0,0,'L');
	$pdf->Cell(40,5,$_POST['email-address'],0,1,'L');  // child name

	$pdf->Ln(1);
	
	$pdf->Cell(15,20,'',0,0,'C');
	$pdf->Cell(52,5,'Relationship to child:',0,0,'L');
	$pdf->Cell(0,5,$_POST['relation_2'],0,1,'L');



	$pdf->Ln(6);

    if($_POST['checkbox-4'] == 'true'){
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(15,20,'',0,0,'C');
		$pdf->MultiCell(0,5,"No, I do not want to receive email at this time.",0,1);
		$pdf->Ln(10);
    }





	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(30,5,'Child Name:',0,0,'L');
	$pdf->SetFont('Arial','',14);  // center
	$pdf->Cell(0,5,$_POST['child_name_2'],0,1,'L');

	
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
	$pdf->Cell(80,5,'Parent Signature','T',0,'C');  // Parent signature

	$pdf->Cell(35,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date


    // $location = './save/pdf4/';


    // $name = $location.$_POST['child_Name'].".pdf";
    //$pdf->Output($name,'F');
    //$pdf->Output();
    //exit;


	// $path = getcwd(); // /home/user/public_html/test/test.php.   
    // $path = substr($path, 0, strpos($path, "public_html"));
    // $root = $path . "public_html/";
    // $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
    // $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Consent for Communication.pdf";
	

    // $_SESSION['pdf-2-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Consent for Communication.pdf";
 
//	$name = $_POST['child_Name'].".pdf";
	//$pdf->Output($name,'F');
	//$pdf->Output();

	//echo "ok";





	function full_path_and_save_path($save_path){

		     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Communication.pdf";

		     $_SESSION['pdf-2-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Consent for Communication.pdf";

		     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');


	echo "ok";

	







?>