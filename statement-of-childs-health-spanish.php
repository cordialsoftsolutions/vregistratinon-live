<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Statement of Child's Health</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css">
   
<link href="css/jquery-ui.min.css" rel="stylesheet" />


     <style>
    .custom-checkbox .custom-control-label::before {
	    border: 1px solid black !important;
    }
	
    .custom-checkbox .required:before {
	    border: 1px solid #e60000 !important;
	    box-shadow: 0px 0px 8px red !important;
    }

</style>



</head>
<body>

  <div class="container my-5">
  

    <div class="row">

      <div class="col-12">
        <div class="cards p-3">
  
          <div class="row  py-3">
            <div class="col-12 col-lg-12">
              <div class="header text-center border-bottom  border-dark">
                  <h1 class="font_bold">Departamento de Servicios Sociales de Carolina del Sur  <br> Servicios de Regulación del Cuidado Infantil  </h1> 
                  <h1> EXPEDIENTE GENERAL Y DECLARACIÓN DE SALUD DEL NIÑO/A PARA SU INGRESO A UNA GUARDERÍA INFANTIL </h1>
              </div>
            </div>
          </div>

          <div class="row mt-3">
              <div class="col-12">
                <p>
                  Este formulario debe completarse para cada niño/a en el momento de la matrícula en una guardería infantil. Cuando haya cambios, debe ser actualizado según sea necesario y debe guardarse en los archivos del centro.

                </p>
              </div>
          </div>

          <div class="row mt-3">
            <div class="col-12">
              INFORMACIÓN GENERAL: (a completar por el padre/ madre o tutor) 
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-12 col-lg-6">
              Nombre del Centro:
              <input type="text" class="form-control" value="<?php echo $_SESSION['center'] ?>" readonly>
            </div>
            <div class="col-12 col-lg-6">
             Condado:
               <input type="text" class="form-control" style="display:none"  id="countryId" value="Beaufort or Jasper" placeholder="Beaufort or Jasper">
                <select name="center" class="form-control" id="centerId" >
                      <option value="Beaufort">Beaufort</option>
                      <option value="Jasper">Jasper</option>
                        
                      </select>

            </div>


            <div class="col-12 col-lg-6 mt-2">
              Dirección(Calle y número – no se permite usar la dirección de un apartado postal):
              <input type="text" class="form-control" readonly value="<?php echo $_SESSION['center'] ?>">
            </div>
            <div class="col-12 col-lg-6 mt-2">
            Ciudad, Estado, Código Postal 
              <input type="text" class="form-control">
            </div>

            
            <div class="col-12 col-lg-3 mt-2">
              Nombre del Niño/a:  <br>
              <input type="text" class="form-control" placeholder="Apellido">
            </div>

            <div class="col-12 col-lg-3 mt-2">
              <span style="opacity: 0">-</span> <br>
              <input type="text" class="form-control" placeholder="Nombre">
            </div>

            <div class="col-12 col-lg-3 mt-2">
              <span style="opacity: 0">-</span> <br>
              <input type="text" class="form-control" placeholder="Inicial del Segundo Nombre">
            </div>

            <div class="col-12 col-lg-3 mt-2">
              <span style="opacity: 0">-</span> <br>
              <input type="text" class="form-control" placeholder="Apodo">
            </div>


            <div class="col-12 col-lg-6 mt-2">
              Fecha de Nacimiento:  <br>
             
                <input type="text" name="input-5" class="form-control data-of-birth" readonly value="<?php  echo $_SESSION['date_of_birth'] ?>">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Fecha de Matrícula:  <br>
              <input type="text" class="form-control data-of-birth" >
            </div>


            <div class="col-12 col-lg-6 mt-2">
              Dirección Actual del Niño/a(Calle y Número)
              <input type="text" class="form-control" value="<?php echo $_SESSION['address'] ?>" readonly>
            </div>


            <div class="col-12 col-lg-6 mt-2">
              Ciudad, Estado, Código Postal 
              <?php 
                $city_state_zip = $_SESSION['city'].', '.$_SESSION['state'].', '.$_SESSION['zipcode'];
              ?>
              <input type="text" class="form-control" value="<?php echo $city_state_zip; ?>" readonly>
            </div>


            <div class="col-12 col-lg-12 mt-2">
              Nombre Completo del Padre/Madre o Tutor
              <input type="text" class="form-control" value="<?php echo $_SESSION['parent_name'] ?>" readonly>
            </div>

            <div class="col-12 col-lg-4 mt-2">
              Teléfono de la Casa 
             
                 <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX" readonly value="<?php echo $_SESSION['home'] ?>"  />
            </div>

            <div class="col-12 col-lg-4 mt-2">
              Teléfono del Trabajo
             <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  readonly value="<?php echo $_SESSION['mobile'] ?>" />
            </div>

            <div class="col-12 col-lg-4 mt-2">
              Otro Teléfono
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX" readonly value="<?php echo $_SESSION['work'] ?>"  />
            </div>

            <div class="col-12 col-lg-12 mt-2">
               Nombre Completo del Padre/Madre o Tutor 
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-4 mt-2">
               Teléfono de la Casa 
               <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 col-lg-4 mt-2">
               Teléfono del Trabajo
             <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 col-lg-4 mt-2">
              Otro Teléfono
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            
            <div class="col-12 my-3 mt-5">
              Es necesario que haya dos personas autorizadas para obtener tratamiento médico de emergencia para el niño.
            </div>


            <div class="col-12 mt-2">
              
               1. Persona responsable si el padre/madre o tutor no está disponible para obtener servicios médicos de emergencia:
              
            </div>

            <div class="col-12 col-lg-6 mt-1">
              <input type="text" class="form-control" placeholder="Nombre Completo ">
            </div>

            <div class="col-12 col-lg-6 mt-1">
              <input type="text" class="form-control" placeholder="Parentesco">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Dirección(Calle y Número) :
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Ciudad, Estado, Código Postal:
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Número(s) de Teléfono :
             <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Contraseña(s) de la Familia:
              <input type="text" class="form-control">
            </div>




            <div class="col-12 mt-3">
              
              2. Persona responsable si el padre/madre o tutor no está disponible para obtener servicios médicos de emergencia:

              
            </div>

            <div class="col-12 col-lg-6 mt-1">
              <input type="text" class="form-control" placeholder="Nombre Completo ">
            </div>

            <div class="col-12 col-lg-6 mt-1">
              <input type="text" class="form-control" placeholder="Parentesco">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Dirección(Número y Calle) :
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Ciudad, Estado, Código Postal:
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Número(s) de Teléfono:
               <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Contraseña(s) de la Familia:
              <input type="text" class="form-control">
            </div>

          </div>




          <div class="row mt-4">


              <div class="col-12">
                <div class="my-1" style="display: inline-block;">
                   <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                     <input style="display: inline-block;" type="checkbox" name="checkbox-1" class="custom-control-input" id="checkbox-1">
                     <label style="display: inline-block;" class="custom-control-label" for="checkbox-1"> Yes / No  &nbsp; &nbsp; &nbsp;¿Actualmente asiste el niño/a la escuela? (Un kinder para niños de 5 años hasta los 6 años)</label>
                   </div>
                 </div>
              </div>

              <div class="col-12 mt-2">
                Mi niño asistirá con regularidad a este centro DESDE las <input type="text">  de la mañana/tarde  HASTA las  <input type="text">de
              </div>

              <div class="col-12 mt-3">
               Si el niño no va a asistir con regularidad, anote las horas de cuidado:  DESDE las  <input type="text">  de la mañana/tarde HASTA las  <input type="text"> de la mañana/tarde 
              </div>

              <div class="col-12 mt-3">
                Marque todos los días en que el niño asistirá con regularidad a este centro: &nbsp; &nbsp;

                <div class="my-1" style="display: inline-block;">
                   <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                     <input style="display: inline-block;" type="checkbox" name="checkbox-2" class="custom-control-input" id="checkbox-2">
                     <label style="display: inline-block;" class="custom-control-label" for="checkbox-2"> Lun   </label>
                   </div>
                 </div>

                 &nbsp; &nbsp; 
                 <div class="my-1" style="display: inline-block;">
                    <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                      <input style="display: inline-block;" type="checkbox" name="checkbox-3" class="custom-control-input" id="checkbox-3">
                      <label style="display: inline-block;" class="custom-control-label" for="checkbox-3"> Mar  </label>
                    </div>
                  </div>

                  &nbsp; &nbsp; 
                  <div class="my-1" style="display: inline-block;">
                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                       <input style="display: inline-block;" type="checkbox" name="checkbox-4" class="custom-control-input" id="checkbox-4">
                       <label style="display: inline-block;" class="custom-control-label" for="checkbox-4"> Mier   </label>
                     </div>
                   </div>

                   &nbsp; &nbsp; 
                   <div class="my-1" style="display: inline-block;">
                      <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                        <input style="display: inline-block;" type="checkbox" name="checkbox-5" class="custom-control-input" id="checkbox-5">
                        <label style="display: inline-block;" class="custom-control-label" for="checkbox-5"> Jue   </label>
                      </div>
                    </div>

                    &nbsp; &nbsp; 
                    <div class="my-1" style="display: inline-block;">
                       <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                         <input style="display: inline-block;" type="checkbox" name="checkbox-6" class="custom-control-input" id="checkbox-6">
                         <label style="display: inline-block;" class="custom-control-label" for="checkbox-6"> Vire   </label>
                       </div>
                     </div>

                     &nbsp; &nbsp; 
                     <div class="my-1" style="display: inline-block;">
                        <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                          <input style="display: inline-block;" type="checkbox" name="checkbox-7" class="custom-control-input" id="checkbox-7">
                          <label style="display: inline-block;" class="custom-control-label" for="checkbox-7"> Sab   </label>
                        </div>
                      </div>

                      &nbsp; &nbsp; 
                      <div class="my-1" style="display: inline-block;">
                         <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                           <input style="display: inline-block;" type="checkbox" name="checkbox-8" class="custom-control-input" id="checkbox-8">
                           <label style="display: inline-block;" class="custom-control-label" for="checkbox-8"> Dom   </label>
                         </div>
                       </div>


              </div>


              <div class="col-12 mt-3">
                Marque todas las comidas que el niño va a recibir diariamente: &nbsp; &nbsp;

                <div class="my-1" style="display: inline-block;">
                   <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                     <input style="display: inline-block;" type="checkbox" name="checkbox-9" class="custom-control-input" id="checkbox-9">
                     <label style="display: inline-block;" class="custom-control-label" for="checkbox-9">  No se ofrecen comidas    </label>
                   </div>
                 </div>

                 &nbsp; &nbsp; 
                 <div class="my-1" style="display: inline-block;">
                    <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                      <input style="display: inline-block;" type="checkbox" name="checkbox-10" class="custom-control-input" id="checkbox-10">
                      <label style="display: inline-block;" class="custom-control-label" for="checkbox-10"> Desayuno   </label>
                    </div>
                  </div>

                  &nbsp; &nbsp; 
                  <div class="my-1" style="display: inline-block;">
                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                       <input style="display: inline-block;" type="checkbox" name="checkbox-11" class="custom-control-input" id="checkbox-11">
                       <label style="display: inline-block;" class="custom-control-label" for="checkbox-11">  Merienda a Media Mañana     </label>
                     </div>
                   </div>

                   &nbsp; &nbsp; 
                   <div class="my-1" style="display: inline-block;">
                      <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                        <input style="display: inline-block;" type="checkbox" name="checkbox-12" class="custom-control-input" id="checkbox-12">
                        <label style="display: inline-block;" class="custom-control-label" for="checkbox-12">   Almuerzo    </label>
                      </div>
                    </div>

                    &nbsp; &nbsp; 
                    <div class="my-1" style="display: inline-block;">
                       <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                         <input style="display: inline-block;" type="checkbox" name="checkbox-13" class="custom-control-input" id="checkbox-13">
                         <label style="display: inline-block;" class="custom-control-label" for="checkbox-13"> Merienda de la Tarde    </label>
                       </div>
                     </div>

                     &nbsp; &nbsp; 
                     <div class="my-1" style="display: inline-block;">
                        <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                          <input style="display: inline-block;" type="checkbox" name="checkbox-14" class="custom-control-input" id="checkbox-14">
                          <label style="display: inline-block;" class="custom-control-label" for="checkbox-14"> Cena     </label>
                        </div>
                      </div>

                      &nbsp; &nbsp; 
                      <div class="my-1" style="display: inline-block;">
                         <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                           <input style="display: inline-block;" type="checkbox" name="checkbox-15" class="custom-control-input" id="checkbox-15">
                           <label style="display: inline-block;" class="custom-control-label" for="checkbox-15"> Merienda Después de la Cena    </label>
                         </div>
                       </div>


              </div>
              
          </div>

          <div class="row mt-5">
            <div class="col-12">
              INFORMACIÓN DE SALUD: (a completar por el padre/madre o tutor) 
            </div>

            <div class="col-12 mt-2">
              Médico Familiar o Recurso de Salud
              <input type="text" class="form-control" placeholder="Nombre">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              Calle y Número
              <input type="text" class="form-control">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              Ciudad, Estado, Código Postal 
              <input type="text" class="form-control">
            </div>            

            <div class="col-12 mt-2 col-lg-4">
              Nº de Teléfono
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>


            <div class="col-12 mt-4">
              Proveedor de Servicios Médicos de Emergencia
              <input type="text" class="form-control" placeholder="Nombre del Centro de Servicios Médicos de Emergencia">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              Calle y Número
              <input type="text" class="form-control">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              Ciudad, Estado, Código Postal 
              <input type="text" class="form-control">
            </div>            

            <div class="col-12 mt-2 col-lg-4">
              Nº de Teléfono
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 mt-4">
              Proveedor de Cuidado Dental: 
              <input type="text" class="form-control" placeholder="Nombre">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              Calle y Número
              <input type="text" class="form-control">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              Ciudad, Estado, Código Postal
              <input type="text" class="form-control">
            </div>            

            <div class="col-12 mt-2 col-lg-4">
              Nº de Teléfono
             <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 mt-4">
              Proveedor de Seguro Médico: 
              <input type="text" class="form-control" placeholder="Full Name">
            </div>



            <div class="col-12 mt-4 col-lg-6">
              Certificado de Inmunizaciones: 
              &nbsp; &nbsp; 
              <div class="my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-16" class="custom-control-input" id="checkbox-16">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-16"> Sí  / No   </label>
                 </div>
               </div>

               

                &nbsp; &nbsp; 
                <div class="my-1" style="display: inline-block;">
                   <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                     <input style="display: inline-block;" type="checkbox" name="checkbox-18" class="custom-control-input" id="checkbox-18">
                     <label style="display: inline-block;" class="custom-control-label" for="checkbox-18"> N/A    </label>
                   </div>
                 </div>

            </div>
            
            <div class="col-12 col-lg-6 mt-4">
              <input type="text" class="form-control" placeholder="Explique, por favor">
            </div>

          </div>

          <div class="row mt-5">
            <div class="col-12">
              Mi hijo tiene las siguientes condiciones médicas tales como alergias, asma, diabetes, epilepsia, etc. y/o toma con regularidad los siguientes medicamentos.
            </div>

              
            <div class="col-12 mt-4">
              Comentarios Adicionales
              <input type="text" class="form-control">
            </div>

            <div class="col-12 mt-4">
              Yo certifico que según mi leal saber y entender:
              <input type="text" class="form-control" placeholder="Nombre del Niño/a" value="<?php echo $_SESSION['child_Name'] ?>" readonly>
            </div>


            <div class="col-12 mt-4">
              goza de buena salud mental y física y es capaz de participar en el programa de cuidado infantil en
:
              <input type="text" class="form-control" placeholder="Nombre de la Guardería Infantil" value="<?php echo $_SESSION['center'] ?>" readonly>
            </div>

          </div>



          <div class="row mt-5">
              <div class="col-12 col-lg-6">
                Firma:
                <input readonly value="<?php echo $_SESSION['parent_name'];?>" type="text" class="form-control" placeholder="Padre/Madre o Tutor">
              </div>
              <div class="col-12 col-lg-6">
                Fecha:
                <input readonly value="<?php echo $_SESSION['today'];?>"  type="text" class="form-control" placeholder="">
              </div>


              <!--<div class="col-12 col-lg-6 mt-2">
                Firma:
                <input readonly value="<?php echo $_SESSION['parent_name'];?>" type="text" class="form-control" placeholder="Director/operador o Empleado Designado">
              </div>
              <div class="col-12 col-lg-6 mt-2">
                Fecha:
                <input  readonly value="<?php echo $_SESSION['today'];?>" type="text" class="form-control" placeholder="">
              </div>-->


          </div>






         <div class="row mt-5">
      
            <div class="col-12 col-lg-10 mt-5 ">
              <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input " id="StatementCustomCheckID" name="checkbox-19">
                  <label id="confirm-check-1" class="custom-control-label" for="StatementCustomCheckID">I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.</label>
                </div>
            </div>
               
          <div class="col-12 col-lg-10 mt-5">
              <div class="custom-controls col-sm-4" style=" text-align: center;">
                  <label class="signature-cls" style="display:none" id="lblParentName"></label>
                  <div style="margin-top: -20px;">----------------------------</div>
                  <div style="margin-top: -5px;">Parent Signature</div>
                </div>
          </div>
                
        </div>

         <div class="row mt-5">
              <div class="text-right col-lg-12" style="padding-bottom:10px">
                  <span style="color:red"><b>Please do not click the BACK button on your browser.</b></span>
               </div>
               <div class="text-right col-lg-12">
                 <button  id="submit" class="button input-btn">Next</button>
               </div>
           </div>
     
        </div>
      </div>
    </div>
  </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/jquery-ui.min.js"></script>
    <script src="js/custom-valiation.js"></script>

<script >




 



  $(document).ready(function(){


    // set name 


   var text =  $("input[type=text]");

   for(var i = 0; i<text.length; i++){
      $(text[i]).attr('name','field-'+(i+1));
   }


   $("#centerId").change(function () {
         
        $('#countryId').val($("#centerId").val());


    });

    $("#submit").click(function(){
      var validate = validation();

    //  if(validate == true){

        var formData = {};
        var fields = $("input[type=text]");

        for(var i = 0; i< fields.length; i++){
          var name = $(fields[i]).attr('name');
          var value = $(fields[i]).val();
          formData[name] = value;
        }

        var checkbox = $(".custom-control-input");
        for(var i = 0; i< checkbox.length; i++){
          var name = $(checkbox[i]).attr('name');
          var value = $(checkbox[i]).prop("checked");
          if(value){
            value = 'Yes';
          }else{
            value = 'No';
          }
          formData[name] = value;
        }

    
        // console.log(formData);
          var isTrueRedirect = false;
        $.ajax({
                url: "pdf/statement-of-childs-health-spanish.php",
                type: "post",
                data: formData,
                success: function (response) {
                    if (response == 'ok') {
                       isTrueRedirect = true;
                    window.location.href = "determination-of-child-health-status-source.php";
                    } else {
                         isTrueRedirect = true;
                    window.location.href = "determination-of-child-health-status-source.php";
                  }
                }
            });

          
          if (isTrueRedirect == true) {

            window.location.href = "determination-of-child-health-status-source.php";
        }
      



    })





  })



    </script>


</body>
</html>