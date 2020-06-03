<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>personal information</title>
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
  
         <div class="title">
           <div class="row">
             <div class="col-12 col-lg-2 text-center text-lg-left">
               <img src="img/index-logo.png" alt="" width="80">
             </div>
             <div class="col-12 col-lg-10 text-center">
               <div class="content">
                 <h1 class="font_bold">Beaufort Jasper EOC Head Start</h1>
                 <h1>Permission to Screen Assess</h1>
               </div>
             </div>
           </div>
         </div>







          <!--<div class="row">
            <div class="col-12 text-center">
              <h5>PERMISSION FOR BEHAVIORIAL, DEVELOPMENTAL AND SENSORY</h5>
              <h5>SCREENINGS AND DEVELOPMENTAL ASSESSMENT</h5>
            </div>
          </div>-->






          <div class="row ">
            <div class="col-lg-12 col-12 ">
             
              <div class="row">

                <div class="col-12 col-lg-4">
                  Child(s) Name: <br>
                  <input type="text" value="<?php echo $_SESSION['child_Name'] ?>" readonly  name="child_Name" class="form-control input-field-one" >
                </div>

                <div class="col-12 col-lg-4">
                  Date of Birth(s) <br>
                  <input type="text" value="<?php echo $_SESSION['date_of_birth'] ?>" readonly   name="date_of_birth" class="form-control input-field-one" >
             
                </div>


                <div class="col-12 col-lg-4">
                  Center's Name: <br>
                  <!--<input type="text" value="<?php echo $_SESSION['center_name'] ?>" readonly  name="center_name" class="form-control input-field-one" >-->
                  <!-- <input type="text" value=""   name="center_name" class="form-control input-field-one" > -->

                  <select name="center_name" class="form-control dummy_validation dummy_selectbox">
                      <option value="<?php echo $_SESSION['center'] ?>"><?php echo $_SESSION['center'] ?></option>
                      <option value="Davis ELC"> Davis ELC </option>
                      <option value="Beaufort ELC"> Beaufort ELC </option>
                      <option value="Shanklin"> Shanklin </option>
                      <option value="Leroy Gilliard"> Leroy Gilliard </option>
                      <option value="St Helena ELC"> St Helena ELC </option>
                      <option value="Sandalwood"> Sandalwood </option>
                      <option value="Ridgeland HS"> Ridgeland HS </option>
                      <option value="Hardeeville HS"> Hardeeville HS </option>
                      <option value="Robertville HS"> Robertville HS </option>
                  </select>
                
                </div>

              </div>
            
            </div>
          </div>


          <div class="row mt-5">
            <div class="col-12">
              <p>

                Children enrolled in the Head Start program are required to receive the following screenings within the first forty-five (45) days of enrollment.   <br><br>
                 
                Head Start programs are also required to provide a developmental assessment to all children at least three (3) times during the school term.   <br><br>  
                 
                We are requesting your permission to screen and assess your child using the following screening and assessment tools:  <br><br>
                 
                 
                <b> Developmental Indicators for the Assessment of Learning Fourth Edition (DIAL-4) </b> <br>
                 
                <b> Hearing and Vision Screenings </b><br>
                 
                <b> BRIGANCE Early Head Start Screen lll</b> <br>
                 
                <b> Teaching Strategies Gold (TSG) Developmental Assessment</b> <br>
                 
                <b> Mental Health Classroom Observations</b> <br>
                 
                 
                 <br><br>
                I give my permission for my child to receive the above screenings and assessments while enrolled in the Head Start Program.
              </p>
            </div>
          </div>


          <div class="row mt-3  ">
            <div class=" col-12 ">
             
              <div class="row">

                <div class="col-12 col-lg-6">
                  Parent Name:  <br>
                  <input type="text"  value="<?php echo $_SESSION['parent_name'] ?>" readonly name="parent_signature" class="form-control input-field-one" >
                </div>

                


                <div class="col-12 col-lg-6">
                  Date: <br>
                  <input type="text" value="<?php echo $_SESSION['today'] ?>" readonly  name="signature_data" class="form-control input-field-one" >
                </div>

              </div>
            
            </div>
          </div>







         

         



         <div class="row mt-5">
      
            <div class="col-12 col-lg-10 mt-5">
  						<div class="custom-control custom-checkbox mb-3">
  					      <input type="checkbox" class="custom-control-input " id="customCheckID" name="checkbox-1">
  					      <label id="confirm-check-1" class="custom-control-label" for="customCheckID">I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.</label>
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



    $("#submit").click(function(){
      var validate = validation();

      if(validate == true){

        var formData = {};
        var fields = $(".form-control");

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
            value = 'true';
          }
          formData[name] = value;
        }


        formData['name'] = $("#name").val();



        // console.log(formData);

        $.ajax({
                url: "pdf/permission-to-screen-assess.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "consent-for-focus-first.php";
                  }else{
                     window.location.href = "consent-for-focus-first.php";
                  }
            }

            });

        }
          else {
                validate.addClass('border');
                validate.focus();

                setTimeout(function () {
                    validate.removeClass('border')
                }, 3000);
        }


    })
  })


 </script>


</body>
</html>