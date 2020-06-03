<?php 

	require('fpdf.php');

	session_start();



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();




    //$pdf->image('logo-13.jpg',10,10,30);
    //$pdf->Ln(20);
	

    //$pdf->SetFont('Arial','',14);
    //$pdf->Cell(0,5,'Beaufort Jasper EOC Head Start',0,1,'C');
    //$pdf->Ln(1);

    //$pdf->SetFont('Arial','',20);
    //$pdf->Cell(0,8,'Parent Handbook Sign-Off Form',0,1,'C');

    //$pdf->Ln(10);

	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',19);
	$pdf->Cell(0,10,'Parent Handbook Sign-Off Form',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);



	$pdf->SetFont('Arial','',14);
	$pdf->Cell(0,8,'Dear Parent(s),',0,1,'L');



	$pdf->Ln(5);
	$text =  "The Parent Handbook and Parent University Book are important references for parents to use throughout the school year. These books are useful in familiarizing your family with the policies and practices of Beaufort Jasper EOC Head Start.  Please sign this form as confirmation you have received the Parent Handbook. ";
	$pdf->MultiCell(0,8,$text,0,1);





	$pdf->Ln(20);
	$text =  "YES, I have received and will reviewed the current school year's Parent Handbook and Parent University Book";
	$pdf->MultiCell(0,8,$text,0,1);







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
	$text =  "Child's Name: ".$_POST['child_Name'];
	$pdf->MultiCell(0,5,$text,0,1);


	
    // $location = './save/pdf20/';


    // $name = $location.$_POST['child_Name'].".pdf";
    //$pdf->Output($name,'F');
    // $pdf->Output();




// $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Parent Handbook Signoff.pdf";


// $_SESSION['pdf-11-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Parent Handbook Signoff.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();



// 	echo "ok";




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Parent Handbook Signoff.pdf";

	     $_SESSION['pdf-11-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Parent Handbook Signoff.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";







?>