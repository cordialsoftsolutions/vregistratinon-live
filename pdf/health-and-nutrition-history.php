<?php 
session_start();

	require('fpdf.php');

	

	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	

	
    //$pdf->image('header-11.jpg',50,5,110); // logo


    //$pdf->Ln(30);




	$pdf->Cell(20,20,'',0,0,'C'); // space for logo
	$pdf->image('logo-4.jpg',10,10,15); // logo


	//$pdf->Ln(10);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(0,10,'Beaufort Jasper EOC Head Start',0,1,'C');
	$pdf->Ln(2);

	$pdf->SetFont('Arial','',25);
	$pdf->Cell(0,10,'Health History/Nutrition Assessment',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,0,'','B',2,'L');
	$pdf->Ln(10);


	// $name = $_SESSION['name'];
	// $relation = $_SESSION['relation'];
	// $date_of_birth = $_SESSION['date_of_birth'];

	$text = "Child's Name: ".$_POST['child_Name']." Date of Birth: ".$_POST['date_of_birth'];
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(0,5,$text,0,1,'L');
	$pdf->Ln(5);


	$text = "Parent/Guardian: ".$_POST['parent_name']." Parent/Guardian Phone #: ".$_POST['parent_phone'];
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(0,5,$text,0,1,'L');
	$pdf->Ln(5);



	$text = "1) Medical History";
	$pdf->SetFont('Arial','b',12);
	$pdf->Cell(43,5,$text,0,1,'L');
	$pdf->Ln(5);


	$pdf->Cell(20,5,'',0,0,'L');
	$pdf->SetFont('Arial','',12);
	$text = "How much did you child weigh a birth? ".$_POST['lbs']." lbs. ".$_POST['oz']." oz.";
	$pdf->Cell(0,5,$text,0,1,'L');
	$pdf->Ln(5);





	$pdf->Cell(20,5,'',0,0,'L');



	$text =  $_POST['radio-1'].", Has anyone in your family ever had any serious illness or medical conditions (i.e. heart disease, cancer, tuberculosis, asthma, mental illness, etc.? if Yes, please explain? ".$_POST['explain-1'];



	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  $_POST['radio-2'].", Were there any problems with your child immediately after birth? if Yes, please explain?  ".$_POST['explain-2'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);


	$pdf->Cell(20,5,'',0,0,'L');
	$text =  $_POST['radio-3'].", Is your child taking any medications every day? if Yes, please explain?  ".$_POST['explain-3'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  $_POST['radio-4'].", Will medication be needed at school? if Yes, please explain ".$_POST['explain-4'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  $_POST['radio-5'].", Has your child ever been prescribed a EPI-PEN? if Yes, please indicate allergy?  ".$_POST['explain-5'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  $_POST['radio-6'].", Are there any conditions requiring special; attention at childcare setting/school? if Yes, please explain ".$_POST['explain-6'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);


	$pdf->Cell(20,5,'',0,0,'L');
	$text =  $_POST['radio-7'].", Is your child allergic to any of the following? (Please circle) Animals, perfume, trees, pollen, grass, flowers, dust, other ".$_POST['explain-7'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);


	$pdf->Cell(20,5,'',0,0,'L');
	$text =  $_POST['radio-8'].", Does anyone in the household smoke? (Where? E.g. at home?) ".$_POST['explain-8'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(6);


	$pdf->SetFont('Arial','b',12);
	$text =  "2) Has your child ever had the following illnesses?";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	$pdf->SetFont('Arial','',9);
	$pdf->Cell(40,7,'',1,0,'L');
	$pdf->Cell(20,7,'YES',1,0,'C');
	$pdf->Cell(40,7,'',1,0,'L');
	$pdf->Cell(20,7,'YES',1,0,'C');
	$pdf->Cell(40,7,'',1,0,'L');
	$pdf->Cell(20,7,'YES',1,1,'C');
	
	
	$pdf->Cell(40,7,'Measles',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-1'],1,0,'C');
	$pdf->Cell(40,7,'Ear/Nose/Throat Problems',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-2'],1,0,'C');
	$pdf->Cell(40,7,'Eye Problems',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-3'],1,1,'C');


	
	

	$pdf->Cell(40,7,'Mumps',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-4'],1,0,'C');
	$pdf->Cell(40,7,'Urinary/Kidney Problems',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-5'],1,0,'C');
	$pdf->Cell(40,7,'Heart Disease',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-6'],1,1,'C');
	


	$pdf->Cell(40,7,'Chickenpox',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-7'],1,0,'C');
	$pdf->Cell(40,7,'Muscle/Bone Problems',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-8'],1,0,'C');
	$pdf->Cell(40,7,'Pneumonia ',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-9'],1,1,'C');
	


	$pdf->Cell(40,7,'Scarlet Fever',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-10'],1,0,'C');
	$pdf->Cell(40,7,'Anemia',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-11'],1,0,'C');
	$pdf->Cell(40,7,'Intestinal Problems',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-12'],1,1,'C');


	$pdf->Cell(40,7,'Respiratory Problems',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-13'],1,0,'C');
	$pdf->Cell(40,7,'Blood Pressure Problems',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-14'],1,0,'C');
	$pdf->Cell(40,7,'Diabetes ',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-15'],1,1,'C');


	$pdf->Cell(40,7,'Tuberculosis',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-16'],1,0,'C');
	$pdf->Cell(40,7,'Rheumatic Fever',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-17'],1,0,'C');
	$pdf->Cell(40,7,'Other',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-18'],1,1,'C');


	$pdf->Cell(40,7,'Seizures',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-19'],1,0,'C');
	$pdf->Cell(40,7,'Bee Sting Allergy',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-20'],1,0,'C');
	$pdf->SetFont('Arial','b',9);
	$pdf->Cell(40,7,'None of the above',1,0,'L');
	$pdf->Cell(20,7,$_POST['check-21'],1,1,'C');


	
	$pdf->Ln(2);
	$pdf->SetFont('Arial','',12);
	$text =  "If you answered yes to any illness, please explain (triggers, medications needed during program hours, how long ago, how often, etc.): ".$_POST['illness'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);


	$pdf->AddPage();


	$pdf->SetFont('Arial','b',12);
	$text =  "3) Has your child ever had the following? If, please check the box and give date, and explain to the best of your knowledge.";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	$pdf->SetFont('Arial','',10);
	$pdf->Cell(20,7,'Yes',1,0,'C');
	$pdf->Cell(65,7,'',1,0,'C');
	$pdf->Cell(20,7,'date',1,0,'C');
	$pdf->Cell(65,7,'Comments',1,1,'C');




	$pdf->Cell(20,7,$_POST['check-22'],1,0,'L');
	$pdf->Cell(65,7,'Hospitalizations ',1,0,'L');
	$pdf->Cell(20,7,$_POST['date-1'],1,0,'L');
	$pdf->Cell(65,7,$_POST['date-1'],1,1,'L');


	$pdf->Cell(20,7,$_POST['check-23'],1,0,'L');
	$pdf->Cell(65,7,'Operations ',1,0,'L');
	$pdf->Cell(20,7,$_POST['date-1'],1,0,'L');
	$pdf->Cell(65,7,$_POST['comment-1'],1,1,'L');

	$pdf->Cell(20,7,$_POST['check-24'],1,0,'L');
	$pdf->Cell(65,7,'Serious Injuries ',1,0,'L');
	$pdf->Cell(20,7,$_POST['date-2'],1,0,'L');
	$pdf->Cell(65,7,$_POST['comment-2'],1,1,'L');

	$pdf->Cell(20,7,$_POST['check-25'],1,0,'L');
	$pdf->Cell(65,7,'Other Health Problems/Illness ',1,0,'L');
	$pdf->Cell(20,7,$_POST['date-3'],1,0,'L');
	$pdf->Cell(65,7,$_POST['comment-3'],1,1,'L');

	$pdf->Cell(20,7,$_POST['check-26'],1,0,'L');
	$pdf->Cell(65,7,'Allergies to Medication (i.e., penicillin) ',1,0,'L');
	$pdf->Cell(20,7,$_POST['date-4'],1,0,'L');
	$pdf->Cell(65,7,$_POST['comment-4'],1,1,'L');



	$pdf->Ln(3);
	$pdf->SetFont('Arial','b',12);
	$text =  "4) Dental Information.";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	$pdf->SetFont('Arial','',12);
	$pdf->Cell(20,5,$_POST['radio-9'],0,0,'L');
	$text =  "Does your child have dental insurance? Name of Insurance:".$_POST['dental-1'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

	$pdf->Cell(20,5,$_POST['radio-10'],0,0,'L');
	$text =  ",Does your child have an ongoing source of continuous and accessible dental care/dentist".$_POST['dental-2'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

	$pdf->Cell(20,5,$_POST['radio-11'],0,0,'L');
	$text =  "(Do you have a family dentist)?".$_POST['dental-3'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);


	$pdf->Cell(20,5,$_POST['radio-12'],0,0,'L');
	$text =  "Dentist Name/Practice:".$_POST['dental-4'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

	$pdf->Cell(20,5,$_POST['radio-13'],0,0,'L');
	$text =  "Dose your child have dental problems now?".$_POST['dental-5'];;
	$pdf->MultiCell(0,5,$text,0,1);





	$pdf->Ln(3);
	$pdf->SetFont('Arial','b',12);
	$text =  "5) Nutrition Screening";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	$pdf->SetFont('Arial','',12);
	$pdf->Cell(20,5,$_POST['radio-14'],0,0,'L');
	$text =  "Does your child eat a variety of foods, including fruits and vegetables?";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

	$pdf->Cell(20,5,$_POST['radio-15'],0,0,'L');
	$text =  "Does your child drink from a baby bottle now?";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

	$pdf->Cell(20,5,$_POST['radio-16'],0,0,'L');
	$text =  "Do you have any concerns about your child’s growth, nutrition or eating (picky eater, constipation, diarrhea)? if Yes, please explain: ".$_POST['nutrition-1'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);




	$pdf->Ln(3);
	$pdf->SetFont('Arial','b',12);
	$text =  "6) Food Substitution";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	$pdf->SetFont('Arial','',12);
	$pdf->Cell(20,5,$_POST['radio-17'],0,0,'L');
	$text =  "Is your child restricted from foods due to religious, medical, or personal reasons? if Yes, please explain: (What foods, type restrictions): ".$_POST['food-1'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

	$pdf->Cell(20,5,$_POST['radio-18'],0,0,'L');
	$text =  "Does your child have any food allergies or intolerances? if Yes, please explain: ".$_POST['food-2'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "What kind of reactions does your child have when your child eats the food in the above     questions? (please circle) Rash, Swelling, Diarrhea, Difficulty breathing, Life threatening,";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);


	$pdf->Cell(20,5,$_POST['radio-19'],0,0,'L');
	$text =  "Is your child on any special diet prescribed by doctor? if Yes, please explain: ".$_POST['food-3'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);


	
	
if($_POST['check-39'] == 'Yes'){
	$pdf->Ln(5);
	$pdf->SetFont('Arial','b',12);
	$text =  "7) Asthma";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	$pdf->SetFont('Arial','',12);
	$pdf->Cell(20,5,$_POST['radio-20'],0,0,'L');
	$text =  "1. Has your child ever been diagnosed by a medical professional as having asthma? (* If your answer is NO, please skip to #8)";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(8);


	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "a) Date of diagnosis:".$_POST['asthma-1'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "b) How many episodes per year?".$_POST['asthma-2'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);
	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "c) Is it seasonal? At what time of the year do the episodes most often occur?".$_POST['asthma-3'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "d) Is it well controlled? How?".$_POST['asthma-4'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "e) Asthma triggers".$_POST['asthma-5'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);




	$pdf->Cell(20,5,$_POST['radio-22'],0,0,'L');
	$text =  "2. Has your child experienced any of the following due to ASTHMA?".$_POST['asthma-6'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	$pdf->Cell(25,5,'',0,0,'L');
	$text =  "Treatment in the ER, number times:".$_POST['asthma-7'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(1);

	$pdf->Cell(25,5,'',0,0,'L');
	$text =  "Hospitalizations, number of times:";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(7);





	$pdf->Cell(20,5,$_POST['radio-23'],0,0,'L');
	$text =  "3. Have you ever given your child any medications for asthma? if Yes, please place check all that your child has used in the past two years.";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);



	$pdf->Cell(40,5,'',0,0,'L');

	$pdf->Cell(15,7,$_POST['check-27'],1,0,'L');
	$pdf->Cell(30,7,'Albuterol ',1,0,'L');
	$pdf->Cell(15,7,$_POST['check-28'],1,0,'L');
	$pdf->Cell(30,7,'Prelone ',1,0,'L');
	$pdf->Cell(15,7,$_POST['check-29'],1,0,'L');
	$pdf->Cell(30,7,'Pedia Pred ',1,1,'L');



	$pdf->Cell(40,5,'',0,0,'L');

	$pdf->Cell(15,7,$_POST['check-30'],1,0,'L');
	$pdf->Cell(30,7,'Tedral',1,0,'L');
	$pdf->Cell(15,7,$_POST['check-31'],1,0,'L');
	$pdf->Cell(30,7,'Quiboron',1,0,'L');
	$pdf->Cell(15,7,$_POST['check-32'],1,0,'L');
	$pdf->Cell(30,7,'Primatine Mist ',1,1,'L');




	$pdf->Cell(40,5,'',0,0,'L');

	$pdf->Cell(15,7,$_POST['check-33'],1,0,'L');
	$pdf->Cell(30,7,'Marx',1,0,'L');
	$pdf->Cell(15,7,$_POST['check-34'],1,0,'L');
	$pdf->Cell(30,7,'Ventolin',1,0,'L');
	$pdf->Cell(15,7,$_POST['check-35'],1,0,'L');
	$pdf->Cell(30,7,'Other:'.$_POST['asthma-other'],1,1,'L');



	$pdf->Cell(40,5,'',0,0,'L');

	$pdf->Cell(15,7,$_POST['check-36'],1,0,'L');
	$pdf->Cell(30,7,'Intal',1,0,'L');
	$pdf->Cell(15,7,$_POST['check-37'],1,0,'L');
	$pdf->Cell(30,7,'Proventil',1,0,'L');
	$pdf->Cell(15,7,$_POST['check-38'],1,0,'L');
	$pdf->Cell(30,7,'',1,1,'L');




	$pdf->Ln(5);
	$pdf->Cell(20,5,$_POST['radio-23'],0,0,'L');
	$text =  "4. Does your child use a Nebulizer of Inhaler? if Yes, how often?".$_POST['asthma-8'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);

}
if($_POST['check-39'] == 'No'){
    $pdf->Ln(5);
    $pdf->SetFont('Arial','b',12);
    $text =  "7) Asthma";
    $pdf->MultiCell(0,5,$text,0,1);
    $pdf->Ln(2);


    $pdf->SetFont('Arial','',12);
    $text =  "No, Has your child ever been diagnosed by a medical professional as having asthma?";
    $pdf->MultiCell(0,5,$text,0,1);
    $pdf->Ln(8);
}



//out of 7 sections
	$pdf->SetFont('Arial','b',12);
	$text =  "8) Medical Coverage";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	$pdf->SetFont('Arial','',12);
	$pdf->Cell(20,5,$_POST['radio-25'],0,0,'L');
	$text =  "1. Does your child have a family doctor? (Does your child receive medical services through an ongoing source of continuous, accessible Medical care?) if Yes, please answer the following: ";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(8);


	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "Doctor's Name: ".$_POST['medical-1'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "Address: ".$_POST['medical-2'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);
	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "Phone Number: ".$_POST['medical-3'];
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,$_POST['radio-26'],0,0,'L');
	$text =  "2. Does your child have health insurance?";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(4);

	$pdf->Cell(20,5,'',0,0,'L');
	$text =  "Name of Insurance:".$_POST['medical-4'];;
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);






	// $pdf->SetFont('Arial','',14);
	// $text =  "Parent Signature: ".$_POST['parent_signature']."  Date: ".$_POST['signature_date'];
	// $pdf->MultiCell(0,5,$text,0,1);
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


	$text =  "Title: ";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);
	$text =  "Health History Reviewed by (Staff Name): ";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);
	$text =  "Date: ";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(5);
	

	$text =  "Information/Forms Given/Follow - Up Notes:";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(25);


	$text =  "Received by: ";
	$pdf->Ln(2);
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Cell(60,5,'(Inlitial)','T',1,'C');
	$pdf->Ln(2);
    $text =  "Date: ";
	$pdf->MultiCell(0,5,$text,0,1);

	






     //$location = './save/pdf12/';


     //$name = $location.$_POST['child_Name'].".pdf";
     //$pdf->Output($name,'F');
     // $pdf->Output();

     // exit;





// $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Health and Nutrition History.pdf";


// $_SESSION['pdf-8-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_POST['child_Name'].' '.$_SESSION['zipcode']."_Health and Nutrition History.pdf";

//  $pdf->Output($name,'F');

// 	echo "ok";





	// $pdf->Output();




	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Health and Nutrition History.pdf";

	     $_SESSION['pdf-8-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Health and Nutrition History.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";








?>