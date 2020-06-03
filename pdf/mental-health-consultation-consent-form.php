<?php 

  require('fpdf.php');

  session_start();



  $pdf = new FPDF('p','mm','A4');

  $pdf->AddPage();




  

  //$pdf->image('logo-6.jpg',10,10,20); // logo
  //$pdf->image('header-6.jpg',45,10,120); // logo


  //if($_POST['checkbox-1']){
  //  $pdf->image('check.png',18,188,5);  
  //}

  //if($_POST['checkbox-2']){
  //  $pdf->image('check.png',18,195,5);  
  //}  
  



  //$pdf->Ln(70);
  
$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Mental Health Consultation',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);



  
  $pdf->SetFont('Arial','B',14);
  $pdf->Cell(0,8,'Parent Consent for Mental Health Consultation',0,1,'C');


  $pdf->Ln(10);
  $pdf->SetFont('Arial','',12);
  $text =  "Beaufort Jasper EOC Head Start promotes the development of healthy, happy, and wholesome children who are able to adjust well to life changes to be socially competent children and adults. Head Start provides a mental health program that meets the needs of children and families served. ";
  $pdf->MultiCell(0,5,$text,0,1);


  $pdf->Ln(5);
  $pdf->SetFont('Arial','',12);
  $text =  "BJEOC Head Start provides Mental Health Consultation services which include:";
  $pdf->MultiCell(0,5,$text,0,1);

  $pdf->Ln(5);
    $pdf->SetFont('Arial','',12);
  $text =  "-Classroom Observations";
  $pdf->MultiCell(0,5,$text,0,1);

  $pdf->Ln(5);
  $pdf->SetFont('Arial','',12);
  $text =  "-Support for classroom management & positive learning environments";
  $pdf->MultiCell(0,5,$text,0,1);


  $pdf->Ln(5);
  $pdf->SetFont('Arial','',12);
  $text =  "Your consent for Mental Health Consultation allows the program to provide the best services to support social and emotional development. Please sign and return to your child’s Head Start center.";
  $pdf->MultiCell(0,5,$text,0,1);






  $pdf->Ln(25);

   if($_POST['checkbox-1'] == 'true'){
      $pdf->Cell(15,7,'',0,0);
      $pdf->SetFont('Arial','',12);
      $text =  "I give consent for Mental Health Consultation services";
      $pdf->MultiCell(0,5,$text,0,1);
      $pdf->Ln(5);
  }


 if($_POST['checkbox-2'] == 'true'){
  $pdf->Cell(15,7,'',0,0);
  $pdf->SetFont('Arial','',12);
  $text =  "I do not give consent for Mental Health Consultation services";
  $pdf->MultiCell(0,5,$text,0,1);
  }




  $pdf->Ln(10);



  $pdf->Cell(15,20,'',0,0,'C');

  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(38,5,"Child Name: ",0,0,'L');
  $pdf->Cell(40,5,$_POST['child_Name'],0,1,'L');  // child name


   $pdf->Cell(15,20,'',0,0,'C');
  $pdf->Cell(30,5,"Parent Name: ",0,0,'L');
  $pdf->Cell(40,5,$_SESSION['parent_name'],0,1,'L');  // child name


  $pdf->Ln(5);
  $pdf->Cell(15,20,'',0,0,'C');


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






    //$location = './save/pdf5/';


    // $name = $location.$_POST['name'].".pdf";
    //$pdf->Output($name,'F');
    // $pdf->Output();



// $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Mental Health Consultation Consent Form.pdf";



// $_SESSION['pdf-10-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Mental Health Consultation Consent Form.pdf";


//  //var_dump('savep');exit;
// //	$name = $_POST['child_Name'].".pdf";
// 	$pdf->Output($name,'F');
// 	//$pdf->Output();


//  echo "ok";



  function full_path_and_save_path($save_path){

       $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Mental Health Consultation Consent Form.pdf";

       $_SESSION['pdf-10-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Mental Health Consultation Consent Form.pdf";

       return $name;
  }


  include('save_path.php');

  $save_path = getSavePath();

  $name = full_path_and_save_path($save_path);

  $pdf->Output($name,'F');

  echo "ok";







?>