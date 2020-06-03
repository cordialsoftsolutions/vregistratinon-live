<?php 
	session_start();
	require('fpdf.php');





	$pdf = new FPDF('p','mm','A4');

	$pdf->AddPage();


	

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(0,3,'Departamento de Servicios Sociales de Carolina del Sur',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,4,'Servicios de Regulación del Cuidado Infantil',0,1,'C');
	$pdf->Ln(1);

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(0,5,"EXPEDIENTE GENERAL Y DECLARACIÓN DE SALUD DEL NIÑO/A PARA SU",0,1,'C');
	$pdf->Ln(1);

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(0,5,"INGRESO A UNA GUARDERÍA INFANTIL",0,1,'C');
	$pdf->Ln(5);



	$pdf->SetFont('Arial','b',11);
	$text =  "Este formulario debe completarse para cada niño/a en el momento de la matrícula en una guardería infantil. Cuando haya cambios, debe ser actualizado según sea necesario y debe guardarse en los archivos del centro";
	$pdf->MultiCell(0,4,$text,0,1);



	$_SESSION['facility'] = $_POST['field-1'];
	$_SESSION['county'] = $_POST['field-2'];

	$_SESSION['child_last']  = $_POST['field-5'];
	$_SESSION['child_first'] = $_POST['field-6'];
	$_SESSION['child_midde'] = $_POST['field-7'];
	$_SESSION['child_nick']  = $_POST['field-8'];





	$pdf->Ln(5);
	$pdf->SetFont('Arial','',12);
	$text =  "INFORMACIÓN GENERAL: (a completar por el padre/ madre o tutor)";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(2);
	$text =  "Nombre del Centro: ".$_POST['field-1']." ".$_POST['field-2'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(2);

	$text =  "Dirección: ";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) Calle y número – no se permite usar la dirección de un apartado posta: ".$_POST['field-3'];
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) Ciudad, Estado, Código Postal: ".$_POST['field-4'];
	$pdf->MultiCell(0,5,$text,0,1);



	$text =  "Nombre del Niño/a:";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) Apellido : ".$_POST['field-5'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) Nombre :".$_POST['field-6'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "C) Inicial del Segundo Nombre : ".$_POST['field-7'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) Apodo : ".$_POST['field-8'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(1);
	$text =  "Fecha de Nacimiento: ".$_POST['field-9'] ." Fecha de Matrícula: ".$_POST['field-10'];
	$pdf->MultiCell(0,5,$text,0,1);





	$pdf->Ln(2);
	$text =  "Dirección Actual del Niño/a: ";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) Calle y Número: ".$_POST['field-11'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) Ciudad, Estado, Código Postal: ".$_POST['field-12'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(2);
	$text =  "Nombre Completo del Padre/Madre o Tutor: ".$_POST['field-13'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$text =  "Teléfono de la Casa: ".$_POST['field-14']." Work Phone: ".$_POST['field-15']." Other Phone: ".$_POST['field-16'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(2);
	$text =  "Nombre Completo del Padre/Madre o Tutor: ".$_POST['field-17'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$text =  "Teléfono de la Casa: ".$_POST['field-18']." Work Phone:".$_POST['field-19']." Other Phone: ".$_POST['field-20'];
	$pdf->MultiCell(0,5,$text,0,1);










    $pdf->Ln(4);
	$pdf->SetFont('Arial','b',10);
	
	$text =  "Es necesario que haya dos personas autorizadas para obtener tratamiento médico de emergencia para el niño.";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->SetFont('Arial','',12);
	$pdf->Ln(1);
	$text =  "1.Persona responsable si el padre/madre o tutor no está disponible para obtener servicios médicos de emergencia:";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "a) Nombre Completo: ".$_POST['field-21'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "b) Parentesco: ".$_POST['field-22'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "C) Calle y Número: ".$_POST['field-23'];
	$pdf->MultiCell(0,5,$text,0,1);	


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "D) Ciudad, Estado, Código Postal: ".$_POST['field-24'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "E) Número(s) de Teléfono: ".$_POST['field-25'];
	$pdf->MultiCell(0,5,$text,0,1);	


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$text =  "F) Contraseña(s) de la Familia:  ".$_POST['field-26'];
	$pdf->MultiCell(0,5,$text,0,1);


		$pdf->SetFont('Arial','',12);
		$pdf->Ln(1);
		$text =  "1.Persona responsable si el padre/madre o tutor no está disponible para obtener servicios médicos de emergencia:";
		$pdf->MultiCell(0,5,$text,0,1);


		$pdf->Ln(1);
		$pdf->Cell(20,5,'',0,0);
		$text =  "a) Nombre Completo: ".$_POST['field-27'];
		$pdf->MultiCell(0,5,$text,0,1);

		$pdf->Ln(1);
		$pdf->Cell(20,5,'',0,0);
		$text =  "b) Parentesco: ".$_POST['field-28'];
		$pdf->MultiCell(0,5,$text,0,1);

		$pdf->Ln(1);
		$pdf->Cell(20,5,'',0,0);
		$text =  "C) Calle y Número: ".$_POST['field-29'];
		$pdf->MultiCell(0,5,$text,0,1);	


		$pdf->Ln(1);
		$pdf->Cell(20,5,'',0,0);
		$text =  "D) Ciudad, Estado, Código Postal: ".$_POST['field-30'];
		$pdf->MultiCell(0,5,$text,0,1);


		$pdf->Ln(1);
		$pdf->Cell(20,5,'',0,0);
		$text =  "E) Número(s) de Teléfono: ".$_POST['field-31'];
		$pdf->MultiCell(0,5,$text,0,1);	


		$pdf->Ln(1);
		$pdf->Cell(20,5,'',0,0);
		$text =  "F) Contraseña(s) de la Familia:  ".$_POST['field-32'];
		$pdf->MultiCell(0,5,$text,0,1);


	







	$pdf->Ln(2);
	$text =  "¿Actualmente asiste el niño/a la escuela? (Un kinder para niños de 5 años hasta los 6 años): ".$_POST['checkbox-1'];
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(2);
	$text =  "Mi niño asistirá con regularidad a este centro DESDE las ".$_POST['field-33']." de la mañana/tarde  HASTA las ".$_POST['field-34']." de la mañana/tarde ";
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Ln(2);
	$text =  "Si el niño no va a asistir con regularidad, anote las horas de cuidado:  DESDE las ".$_POST['field-35']." de la mañana/tarde HASTA las ".$_POST['field-36']." de la mañana/tarde";
	$pdf->MultiCell(0,5,$text,0,1);



	$pdf->Ln(2);
	$text =  "Marque todos los días en que el niño asistirá con regularidad a este centro:";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);


	if($_POST['checkbox-2'] == 'Yes'){
		$pdf->Cell(20,5,'',0,0,'');
		$pdf->Cell(10,5,'Lun',0,0);
	}
	
	if($_POST['checkbox-3'] == 'Yes'){	
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Mar',0,0);
	}
	if($_POST['checkbox-4'] == 'Yes'){

		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Mier',0,0);
	}
	
	if($_POST['checkbox-5'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Jue',0,0);
	}
	
	if($_POST['checkbox-6'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Vier',0,0);
	}
	
	if($_POST['checkbox-7'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Sab',0,0);
	}

	if($_POST['checkbox-8'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Dom',0,1);
	}
	$pdf->Ln(4);






	$pdf->Ln(2);
	$text =  "Marque todas las comidas que el niño va a recibir diariamente:";
	$pdf->MultiCell(0,5,$text,0,1);
	$pdf->Ln(2);
	



	if($_POST['checkbox-9'] == 'Yes'){
		$pdf->Cell(20,5,'',0,0);
		$pdf->Cell(30,5,'Desayuno',0,0);
	}
	

	if($_POST['checkbox-10'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(20,5,'Merienda a Media Mañana ',0,0);
	}
	

	if($_POST['checkbox-11'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(25,5,'Almuerzo',0,0);
	}
	

	if($_POST['checkbox-12'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(15,5,'Merienda de la Tarde',0,1);
	}
	

	if($_POST['checkbox-13'] == 'Yes'){
		$pdf->Ln(1);
		$pdf->Cell(20,5,'',0,0);
		$pdf->Cell(30,5,'Afternoon Snack',0,0);
	}
	
	if($_POST['checkbox-14'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Cena ',0,0);

	}
	

	if($_POST['checkbox-15'] == 'Yes'){
		$pdf->Cell(10,5,'',0,0);
		$pdf->Cell(10,5,'Merienda Después de la Cena ',0,1);
	}





	$pdf->Ln(5);
	$text =  "INFORMACIÓN DE SALUD: (a completar por el padre/madre o tutor):";
	$pdf->MultiCell(0,5,$text,0,1);

	$pdf->Ln(1);
	$text =  "Médico Familiar o Recurso de Salud: ".$_POST['field-37'];
	$pdf->MultiCell(0,5,$text,0,1);


	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Calle y Número: '.$_POST['field-38'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Ciudad, Estado, Código Postal: '.$_POST['field-39'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Nº de Teléfono: '.$_POST['field-40'],0,1);



	$pdf->Ln(2);
	$pdf->Cell(0,5,'Proveedor de Servicios Médicos de Emergencia',0,1);


	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Nombre del Centro de Servicios Médicos de Emergencia: '.$_POST['field-41'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Calle y Número: '.$_POST['field-42'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Ciudad, Estado, Código Posta: '.$_POST['field-43'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Nº de Teléfono: '.$_POST['field-44'],0,1);





	$pdf->Ln(2);
	$pdf->Cell(0,5,'Proveedor de Cuidado Dental',0,1);


	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Nombre: '.$_POST['field-45'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Calle y Número:'.$_POST['field-46'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Ciudad, Estado, Código Postal: '.$_POST['field-47'],0,1);

	$pdf->Cell(20,5,'',0,0);
	$pdf->Cell(0,5,'Nº de Teléfono: '.$_POST['field-48'],0,1);



	$pdf->Ln(2);
	$pdf->Cell(0,5,'Proveedor de Seguro Médico '.$_POST['field-49'],0,1);




	if($_POST['checkbox-18'] == 'Yes'){

		$pdf->Ln(2);
		$pdf->Cell(0,5,'Certificado de Inmunizaciones: N/A',0,1);
		

		$pdf->Ln(1);
		$pdf->Cell(0,5,'Explique, por favor: '.$_POST['field-50'],0,1);
	}else{
		$pdf->Ln(2);
		$pdf->Cell(0,5,'Certificado de Inmunizaciones: '.$_POST['checkbox-16'],0,1);
	}




	



	$pdf->Ln(5);
	$pdf->MultiCell(0,5,'Mi hijo tiene las siguientes condiciones médicas tales como alergias, asma, diabetes, epilepsia, etc. y/o toma con regularidad los siguientes medicamentos',0,1);




	$pdf->MultiCell(0,5,'Comentarios Adicionales: '.$_POST['field-51'],0,1);


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$pdf->MultiCell(0,5,'Yo certifico que según mi leal saber y entender: '.$_POST['field-52'],0,1);


	$pdf->Ln(1);
	$pdf->Cell(20,5,'',0,0);
	$pdf->MultiCell(0,5,'goza de buena salud mental y física y es capaz de participar en el programa de cuidado infantil en: '.$_POST['field-53'],0,1);




	$pdf->Ln(7);



	
	// $pdf->Cell(130,5,'Firma: '.$_POST['field-54'],0,0);
	// $pdf->Cell(50,5,'Fecha: '.$_POST['field-55'],0,1);
	// $pdf->Cell(130,7,'Padre/Madre o Tutor','T',0,'C');

	// $pdf->Ln(7);



	// $pdf->Cell(130,5,'Firma: '.$_POST['field-56'],0,0);
	// $pdf->Cell(50,5,'Fecha: '.$_POST['field-57'],0,1);
	// $pdf->Cell(130,5,'Director/operador o Empleado Designado','T',0,'C');



	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$pdf->Cell(100,5,$_POST['field-54'],0,0,'C');

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->SetFont('Arial','',12);
	$signature_date = $_POST['field-55'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(100,5,"Padre/Madre o Tutor",'T',0,'C');  // Parent signature

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->Cell(50,5,'Fecha','T',0,'C');  // Date


    $pdf->Ln(10);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(15,10,'Yes',0,0,'L');
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,10,', I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.',0,1,'C');

	$pdf->Ln(10);



	$pdf->addFont('BITCBLKAD','','BITCBLKAD.php');
	$pdf->SetFont('BITCBLKAD','',16);
	$pdf->Cell(100,5,$_POST['field-56'],0,0,'C');

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->SetFont('Arial','',12);
	$signature_date = $_POST['field-57'];
	$pdf->Cell(50,5,$signature_date,0,1,'C');
	


	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(100,5,"Director/operador o Empleado Designado",'T',0,'C');  // Parent signature

	$pdf->Cell(20,5,'',0,0,'C');

	$pdf->Cell(50,5,'Fecha','T',0,'C');  // Date







	$pdf->Ln(18);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(110,5,'DSS Form 2900 SPA (JUL 10):',0,0);
	$pdf->Cell(50,5,'PAGE 2: ',0,1);
	
	

 //$location = './save/pdf12/';


 //   $name = $location.$_POST['field-6'].".pdf";
 //   $pdf->Output($name,'F');
 //   $pdf->Output();
 //       echo "ok";

 //   exit();

 
// 	  $path = getcwd(); // /home/user/public_html/test/test.php.   
// $path = substr($path, 0, strpos($path, "public_html"));
// $root = $path . "public_html/";
// $SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; // This will output /home/user/public_html/
// $name = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health Spanish.pdf";
// //$AnotherName = $SavePath.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health Spanish Copy.pdf";

// $_SESSION['pdf-17-path'] =  $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].' '.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health Spanish.pdf";

// $pdf->Output($name,'F');
// //$pdf->Output($AnotherName,'F');




// 	echo "ok";



	

	function full_path_and_save_path($save_path){

	     $name = $save_path.$_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health Spanish.pdf";

	     $_SESSION['pdf-17-path'] = $_SESSION['getGUID'].'_'.$_SESSION['childernFrom'].'_'.$_SESSION['center'].'_'.$_SESSION['child_Name'].' '.$_SESSION['zipcode']."_Statement of Childs Health Spanish.pdf";

	     return $name;
	}


	include('save_path.php');

	$save_path = getSavePath();

	$name = full_path_and_save_path($save_path);

	$pdf->Output($name,'F');

	echo "ok";


	


?>