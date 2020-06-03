<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Telehealth Consent</title>
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
                  <h1>Telehealth Consent </h1>
                </div>
              </div>
            </div>
          </div>
  
          <!-- <div class="row border-bottom  border-dark py-3">
            

            <div class="col-12 col-lg-12">
              <div class="header text-center">
                
                <h4>
              Beaufort Jasper EOC Head Start and Early Head Start 
                </h4>
               <h5>
                 Telehealth Consent 
               </h5>
              </div>
            </div>
            
          </div> -->


          <div class="row mt-3">
            <div class="col-12 col-lg-6 ">
              Child Name:  <br>
              <input value="<?php echo $_SESSION['child_Name']; ?>" readonly type="text"  name="child_Name" class=" form-control" >
            </div>


            <div class="col-12 col-lg-6 ">
              D.O.B:   <br>
              <input value="<?php echo $_SESSION['date_of_birth']; ?>" type="text"  readonly name="date_of_birth" class=" form-control" >
            </div>
          





           <div class="col-12">
             <p>
               Before any student is seen at the School-Based Telehealth Site ("Telehealth Clinic"), a signed consent from must be on file. In addition to the consent on file, the parent/guardian will be contacted before each visit to receive verbal consent for the child to be seen. Please check the appropriate box below regarding verbal consent. 
             </p>
           </div>


           <div class="col-12 mt-3">
             <div class="col-auto my-1" >
                <div class="custom-control custom-checkbox mr-sm-2" >
                  <input  type="checkbox" name="checkbox-1" class="custom-control-input dummy_permissioncheckBox" id="checkbox-1">
                  <label  class="custom-control-label" for="checkbox-1">I give permission for my child to be seen at the Telehealth Site if verbal consent from parent/guardian is not received. (Unable to answer phone, phone number disconnected, etc.) </label>
                </div>
              </div>
           </div>


           <div class="col-12 mt-3">
             <div class="col-auto my-1" >
                <div class="custom-control custom-checkbox mr-sm-2" >
                  <input  type="checkbox" name="checkbox-2" class="custom-control-input dummy_permissioncheckBox" id="checkbox-2">
                  <label  class="custom-control-label" for="checkbox-2">I DO NOT give permission for my child to be seen at the Telehealth Site if verbal consent from parent/guardian is not received. I understand that if I cannot be reached, my child will not be seen at the Telehealth Site.</label>
                </div>
              </div>
           </div>



           <div class="col-12 mt-5">
             <p>
               All’s Children Pediatrics may, depending on the diagnosis, prescribe medication to students seen at the Telehealth Site. In the event that the Telehealth Site physician prescribes medication, they will make every effort to contact the student's primary care provider (identified in the Enrollment Packet). Such a contact requires the consent of the student's parent or guardian. Please check the appropriate box below regarding contacting your child's primary care provider.  
               
             </p>
           </div>


           <div class="col-12 mt-3">
             <div class="col-auto my-1" >
                <div class="custom-control custom-checkbox mr-sm-2" >
                  <input  type="checkbox" name="checkbox-3" class="custom-control-input dummy_ConcentCheckBox" id="checkbox-3">
                  <label  class="custom-control-label" for="checkbox-3">I consent to the Telehealth Site notifying my child's primary care provider (identified in Enrollment Packet) that the Telehealth Site provider has issued a prescription for my child</label>
                </div>
              </div>
           </div>


           <div class="col-12 mt-3">
             <div class="col-auto my-1" >
                <div class="custom-control custom-checkbox mr-sm-2" >
                  <input  type="checkbox" name="checkbox-4" class="custom-control-input dummy_ConcentCheckBox" id="checkbox-4">
                  <label  class="custom-control-label" for="checkbox-4">I DO NOT consent to the Telehealth Site notifying my child's primary care provider (identified in the Enrollment Packet) that the Telehealth Site provider has issued a prescription for my child.</label>
                </div>
              </div>
           </div>

          </div>

          <div class="row mt-5">
            <div class="col-12">
              <p>I, the undersigned,</p>

              <ul>
                <li>Give permission and consent for my child to have be seen by a licensed health care provider through and by the Telehealth Site. I have received information on and understand the nature of the treatment provided at the Telehealth Site, the way it is provided, and the details and limitations of this form and style of treatment.</li>


                <li>Understand that this consent form is valid for as long as the student is enrolled at Beaufort Jasper EOC Head Start and Early Head Start and that I may revoke this consent at any time by providing notice to Shyrell Daniels, Health Manger (843-466-3564).</li>

                <li> Understand that this consent constitutes the establishment of a Physician-Patient relationship between my child and any Physician, employed by All’s Children Pediatrics, who examines my child through the Telehealth Site for any and all encounters as long as the student is enrolled in Beaufort Jasper EOC Head Start and Early Head Start and that I may revoke this consent at any time by providing notice to Shyrell Daniels (843-466-3564. </li>

                <li>
                  Give permission for the Physician, the school designated staff, and your child’s primary health care provider to speak with and share medical information about your child’s health issue on an as needed basis, with the understanding that this information will be treated in a confidential way.
                </li>

                
               

               <li>Give permission for All’s Children Pediatrics to receive information from the school about my child’s health history.</li>

               <li>Understand that All’s Children Pediatrics will document each encounter with my child in a medical record maintained by All’s Children Pediatrics and not Beaufort Jasper EOC Head Start and Early Head Start. </li>

               <li>Acknowledge that I have been offered a copy of the Notice of Privacy Practices, which addresses the ways in which All’s Children Pediatrics maintains, uses and discloses my child's protected health information.</li> 

               <li>Understand that I will be contacted after my child is seen to discuss my child's diagnosis, treatment options and any need to seek in person care.</li>

               <li>Understand that I will receive a visit summary for my child's encounter, either in writing or over the phone, which will include any instructions for follow-up care and any prescriptions issued for my child.</li>  

              </ul>
            </div>
          </div>


          <div class="row mt-5">
            <div class="col-12">
              <b>As Parent/Guardian of the above student, I:</b>

              <ul>
               

               <li>Authorize the release of any information necessary to process insurance claims for payment of benefits to All’s Children Pediatrics. </li>

               <li>Authorize payment of benefits to All’s Children Pediatrics for services rendered.</li>

               <li>Have provided details of all insurance policies that cover my child. </li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <p>
                I have had the opportunity to read this form and the information provided. All my questions have been answered to my satisfaction.
              </p>
            </div>
          </div>






          <div class="row mt-5">

            <!--<div class="col-12 col-lg-6 ">
              Parent/Guardian name (Please Print): <br>
              <input value="<?php echo $_SESSION['parent_name']; ?>" readonly type="text"  name="parent_name" class=" form-control input-field-one" >
            </div>

             <div class="col-12 col-lg-6 ">
               Parent/Guardian Signature:  <br>
               <input value="<?php echo $_SESSION['parent_name']; ?>" readonly type="text"  name="parent_signature" class=" form-control input-field-one" >
             </div>-->

            <div class="col-12 col-lg-6 ">
               Parent Name:  <br>
               <input value="<?php echo $_SESSION['parent_name']; ?>" readonly type="text"  name="parent_signature" class=" form-control input-field-one" >
             </div>
             <div class="col-12 col-lg-6">
               Date:  <br>
               <input type="text" value="<?php echo $_SESSION['today']; ?>" readonly  name="date" class=" form-control input-field-one" >
             </div>

          </div>



         <div class="row mt-5">
      
            <div class="col-12 col-lg-10 mt-5 ">
              <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input " id="customCheckID" name="checkbox-5">
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
                 <button  id="submit" class="button input-btn" style="background:green">Submit Registration</button>
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


        $('.dummy_permissioncheckBox').click(function() {
           $('.dummy_permissioncheckBox').not(this).prop('checked', false);
        });

           $('.dummy_ConcentCheckBox').click(function() {
           $('.dummy_ConcentCheckBox').not(this).prop('checked', false);
        });



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
            if (value) {
                value = 'Yes';
            }
          //}else{
          //  value = 'No';
          //}
          formData[name] = value;
        }



         // console.log(formData);
         

        $.ajax({
                url: "pdf/telehealth-consent-form.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                   // window.location.href = "https://thebjeoc.org/";
                    window.location.href = "thank-you.php";
                  }else{
                      window.location.href = "thank-you.php";
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