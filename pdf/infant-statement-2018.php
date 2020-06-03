<?php 

	require('fpdf.php');

	session_start();



	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	

    //$pdf->SetFont('Arial','B',10);
    //$pdf->Cell(0,5,'South Carolina Department of Social Services ',0,1,'C');
    //$pdf->Ln(1);
    //$pdf->SetFont('Arial','B',18);
    //$pdf->Cell(0,4,'INFANT STATEMENT',0,1,'C');
    //$pdf->Ln(10);



	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',16);
	$pdf->Cell(0,10,'South Carolina Department of Social Services
Infant Statement',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);

	
	//logic here

	$pdf->Ln(5);
	$pdf->SetFont('Arial','b',12);
	$text =  "Is your child infant? ".$_POST['checkbox-Infant'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);

	
 if($_POST['checkbox-Infant'] == 'Yes'){

	$pdf->SetFont('Arial','',12);
	$text =  "From:  Child Care Center/Provider: ".$_POST['input-1'];
	$pdf->MultiCell(0,4,$text,0,1);


	$pdf->Ln(2);
	$pdf->Cell(13,5,'',0,0);
	$text =  "Sponsoring Organization: ".$_POST['input-2'];
	$pdf->MultiCell(0,4,$text,0,1);




	$pdf->Ln(5);
	$pdf->SetFont('Arial','b',12);
	$text =  "To: Parent/Guardian of Infant(s) in Child Care";
	$pdf->MultiCell(0,4,$text,0,1);




	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$text =  "I am required by the Child and Adult Day Care Food Program to offer a CACFP meal to all enrolled infants in my care. A CACFP meal includes iron fortified infant cereal and baby food when appropriate for the child’s age, at no additional charge.";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);







	$text =  "I am required to offer an infant formula, which meets program requirements to all enrolled infants in my care. The formula that I am providing is iron fortified ".$_POST['input-3'].". There will be no additional charge to you, if you would like your infant to receive the formula and/or age appropriate food that I am offering.";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);





	$text =  "I understand that not all infants need the same formula, and that the formula served to your infant should be the one recommended by your physician. If you choose, you may continue to provide your infant’s formula or other food items.";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);



	$pdf->SetFont('Arial','b',12);
	$text =  "Parent/Guardian, please check the following statement that applies to you. Then sign and date below: ";
	$pdf->MultiCell(0,4,$text,0,1);

	$pdf->Ln(5);
	$pdf->SetFont('Arial','',12);
	$text =  "Name of Infant: ".$_POST['input-4']. " Birth Date: ".$_POST['input-5'];
	$pdf->MultiCell(0,4,$text,0,1);
	$pdf->Ln(5);




	$pdf->Cell(20,5,$_POST['checkbox-1'],0,0);
	$text =  "I would like the child care provider to serve my infant the iron fortified infant formula listed above. When my child is developmentally ready, I understand that besides the formula, the caregiver will offer my infant other food items, approved by the CACFP meal pattern guidelines, at no additional charge to me";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);


	$pdf->Cell(20,5,$_POST['checkbox-2'],0,0);
	$text =  "I will supply the breast milk/infant formula to the child care provider to serve to my infant. The name of the formula I will provide is: ".$_POST['input-6']." . I understand that the caregiver will offer other food items, approved by the CACFP meal pattern guidelines, to my child when developmentally ready";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);


	$pdf->Cell(20,5,$_POST['checkbox-3'],0,0);
	$text =  "I will supply the breast milk on site or express. I understand that the caregiver will offer other food items, approved by the CACFP meal pattern guidelines, to my child to my child when developmentally ready";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);	


	$pdf->Cell(20,5,$_POST['checkbox-4'],0,0);
	$text =  " I will provide breast milk/infant formula and all other meal items to my child care provider to serve to my infant. The name of the formula I will provide is ".$_POST['provide'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

	$pdf->SetFont('Arial','b',8);
	$pdf->Cell(20,5,'',0,0);
	$text =  "Note: You will need to provide a medical statement for exempt formulas such as Nutramigen, NeoSure or Alimentum.";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);


	$pdf->SetFont('Arial','b',12);
	$text =  "If there are any changes from your above selection, a new form is required. ";
	$pdf->MultiCell(0,5,$text,0,1);
	

	}


	//signature section start in here.


	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(10);

	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',14);
	$parent_signature = $_SESSION['parent_name'];
	$pdf->Cell(80,5,$parent_signature,0,0,'C');

	$pdf->Cell(35,5,'',0,0,'C');

	$pdf->SetFont('Arial','',11);
	$signature_date = $_SESSION['today'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(80,5,"Parent Signature",'T',0,'C');  // Parent signature

	$pdf->Cell(35,5,'',0,0,'C');

	$pdf->Cell(50,5,'Date','T',0,'C');  // Date






    //$pdf->Ln(10);


    //$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
    //$pdf->SetFont('BITCBLKAD','',14);
    //$parent_signature = $_SESSION['parent_name'];
    //$pdf->Cell(50,5,$_POST['input-9'],0,0,'C');

    //$pdf->Cell(70,5,'',0,0,'C');

    //$pdf->SetFont('Arial','',11);
    //$pdf->Cell(50,5,$_POST['input-10'],0,1,'C');
	


    //$pdf->SetFont('Arial','B',11);
    //$pdf->Cell(50,5,"Signature of Provider",'T',0,'C');  // Parent signature

    //$pdf->Cell(70,5,'',0,0,'C');

    //$pdf->Cell(50,5,'Date','T',0,'C');  // Date





	$pdf->Ln(10);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(0,3,'DSS Form 3354 (SEPTEMBER 17) (TEMPORARY) Edition of AUG 17 is obsolete. ',0,0);
	



     //$location = './save/pdf14/';


     //$name = $location.$_POST['input-1'].".pdf";
     //$pdf->Output($name,'F');
     //$pdf->Output();
     //exit();



//  $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Infant Statement 2018.pdf";



// $_SESSION['pdf-9-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Infant Statement 2018.pdf";

//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();


// 	echo "ok";



	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Infant Statement 2018.pdf";

	     $_SESSION['pdf-9-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Infant Statement 2018.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";







?>