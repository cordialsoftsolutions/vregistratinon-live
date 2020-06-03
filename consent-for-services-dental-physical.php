<?php 
session_start();
// var_dump($_SESSION);exit;

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Consent for dental and physical services</title>
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
                 <h1>Consent for dental and physical services</h1>
               </div>
             </div>
           </div>
         </div>


          <div class="row">
            <div class="col-12 text-center py-2">
              <h3>CONSENT TO RECEIVE MEDICAL AND/OR DENTAL EXAMINATION </h3>
            </div>
          </div>


          <div class="row">
            <div class="col-12">
              <p style="font-size: 17px;">
                I, &nbsp; <input type="text" id="parent_name" class="form-controls" readonly value="<?php echo $_SESSION['parent_name'];?>" style="    background-color: #e9ecef;
    opacity: 1;"> ,&nbsp; hereby give my consent for the child listed below to receive a medical and/or dental examination.  I understand that these services are deemed necessary or advisable by Beaufort-Jasper EOC Head Start program and services will be conducted by a trained Head Start Staff or medical and dental provider contracted through Beaufort-Jasper EOC Head Start.  I understand that I will be notified of my child’s test results, if additional treatment is needed. <br><br>
                Medical Examination (includes but not limited to: height, weight, blood pressure, hematocrit, lead, hearing, vision and additional screening if necessary)  <br><br>
                Dental Examination (includes prophy and fluoride treatment)
              </p>
            </div>
          </div>
                
          <div class="row my-4">
            <div class="col-12">
              <h4>This consent is valid for one year after the date signed.</h4>
            </div>
          </div>


          <div class="row">
            <div class="col-12 col-lg-4 mb-2">
              Child's Name:
              <input type="text" readonly name="child_name" value="<?php echo $_SESSION['child_Name'] ?>" class="form-control">
            </div>
            <div class="col-12 col-lg-4 mb-2">
              Center's Name: <br>
                    
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
            <div class="col-12 col-lg-4 mb-2">
              Date of Birth:
               <input type="text"  name="date_of_birth" class="form-control data-of-birth dummy_validation">
               
            </div>
            <div class="col-12 col-lg-4 mb-2">
              Parent Name:
              <input type="text"  value="<?php echo $_SESSION['parent_name'] ?>" readonly name="parent_signature" class="form-control input-field-one" >
            </div>
            <div class="col-12 col-lg-4 mb-2">
              Relationship to child:
              <input type="text" name="relation" class="form-control dummy_validation">
            </div>
            <div class="col-12 col-lg-4 mb-2">
              Date Signed:
             <input type="text" value="<?php echo $_SESSION['today'] ?>" readonly  name="signature_data" class="form-control input-field-one" >
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


        formData['parent_name'] = $("#parent_name").val();



        console.log(formData);

        $.ajax({
                url: "pdf/consent-for-services-dental-physical.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "emergency-treatment.php";
                  }else{
                     window.location.href = "emergency-treatment.php";
                  }
            }

            });

        }
          else {
                $(validate).addClass('border');
                $(validate).focus();

                setTimeout(function () {
                    $(validate).removeClass('border')
                }, 3000);
        }


    })
  })


 </script>


</body>
</html>