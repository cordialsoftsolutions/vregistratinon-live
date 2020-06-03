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
                  <h1>Parent Communication Consent Form</h1>
                </div>
              </div>
            </div>
          </div>


          <div class="row mt-5 ">
            <div class="col-12  ">
              <p>
                 <b class="border-bottom border-dark">Text Messaging Consent</b>
              </p>
            </div>
            
          </div>

          <div class="row  justify-content-center">
            <div class=" col-12 ">
              <p>
                 There may be times throughout the year that Head Start would like to send a brief text message to parents (ex. event reminds, center information, family service information, etc.). Since text messaging is not free,</p><p> parents who want to receive texts must complete the information below giving permission.
              </p>
              
            </div>
          </div>


          <div class="row   ">
            <div class=" col-12 ">
             
               <div class="col-auto my-1">
                 <div class="custom-control custom-checkbox mr-sm-2">
                   <input type="checkbox" name="checkbox-1" class="custom-control-input dummy_MessageCheckBox" id="customControlAutosizing">
                   <label class="custom-control-label" for="customControlAutosizing">Yes, I want to receive text messages from my child's Head Start center at the following cell phone.</label>
                 </div>
               </div>
            
            </div>
          </div>




          <div class="row mt-4">

             <div class="col-12 col-lg-6 ">
               Cell Phone:  <br>
              
               <input  class="phone-formate form-control dummy_validation" name="call_number_1" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />

             </div>

             <div class="col-12 col-lg-6">
               Relationship to child:  <br>
               <input type="text"  name="relation_1" class=" form-control dummy_validation" >
             </div>

          </div>

          <div class="row    mt-2">
            <div class=" col-12 ">
             
               <div class="col-auto my-1">
                 <div class="custom-control custom-checkbox mr-sm-2">
                   <input type="checkbox" name="checkbox-2" class="custom-control-input dummy_MessageCheckBox" id="customControlAutosizing-2">
                   <label class="custom-control-label" for="customControlAutosizing-2">No, I do not want to receive text messages at this time.</label>
                 </div>
               </div>
            
            </div>
          </div>


          <div class="row mt-4">

             <div class="col-12 col-lg-6 ">
              Child(s) Name:  <br>
               <input type="text"  name="child_Name" class=" form-control input-field-one" readonly value="<?php echo $_SESSION['child_Name'];?>">
             
             
             
             
             </div>

          
          </div>

          <div class="row mt-1">

             <div class="col-12 col-lg-6 ">
               Parent Name:  <br>
               <input type="text"  name="parent_signature" class=" form-control input-field-one" readonly value="<?php echo $_SESSION['parent_name'];?>">
             </div>

             <div class="col-12 col-lg-6">
               Date:  <br>
               <input type="text"  name="date" class=" form-control input-field-one" readonly value="<?php echo $_SESSION['today'];?>">
             </div>

          </div>






          <div class="row mt-5 ">
            <div class="col-12  ">
              <p>
                 <b class="border-bottom border-dark">Email Consent </b>
              </p>
            </div>
            
          </div>

          <div class="row  justify-content-center">
            <div class=" col-12 ">
              <p>
                There may be times throughout the year that Head Start would like to email parents (i.e. event reminders, center information, family service information, etc.).  E-mail communication is another possible way for parents to communicate with your child's Head Start center. Although e-mail is a valuable tool, it is important to remember that it is not always a completely secure and confidential method of communication.  If you would like to receive communication through email, please complete the information below giving permission.

              </p>
              
            </div>
          </div>




          <div class="row   ">
            <div class=" col-12 ">
             
               <div class="col-auto my-1">
                 <div class="custom-control custom-checkbox mr-sm-2">
                   <input type="checkbox" name="checkbox-3" class="custom-control-input dummy_MessageEmailCheckBox" id="customControlAutosizing-3">
                   <label class="custom-control-label" for="customControlAutosizing-3">Yes, I want to receive emails from my child's Head Start center at the following email address. </label>
                 </div>
               </div>
            
            </div>
          </div>


        
          <div class="row mt-4">

             <div class="col-12 col-lg-6 ">
               <!--Cell number:  <br>
            
              <input  class="phone-formate form-control " name="call_number_2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />-->
           
                    <div class="col-12">Email Address:</div>
                    <div class="col-12">
                      <input type="text" name="email-address" class="form-control dummy_email_validation">
                    </div>
                  
             </div>

             <div class="col-12 col-lg-6">
               Relationship to child:  <br>
               <input type="text"  name="relation_2" class=" form-control input-field-one" >
             </div>

          </div>



          <div class="row    mt-2">
            <div class=" col-12 ">
             
               <div class="col-auto my-1">
                 <div class="custom-control custom-checkbox mr-sm-2">
                   <input type="checkbox" name="checkbox-4" class="custom-control-input dummy_MessageEmailCheckBox" id="customControlAutosizing-4">
                   <label class="custom-control-label" for="customControlAutosizing-4">No, I do not want to receive email at this time.</label>
                 </div>
               </div>
            
            </div>
          </div>


          <div class="row mt-4">

             <div class="col-12 col-lg-6 ">
              Child(s) Name:  <br>
               <input type="text"  name="child_name_2" class=" form-control input-field-one" readonly value="<?php echo $_SESSION['child_Name'];?>">
             </div>

          
          </div>

          <div class="row mt-1">

             <div class="col-12 col-lg-6 ">
               Parent Name:  <br>
               <input type="text"  name="parent_signature_2" class=" form-control input-field-one" readonly value="<?php echo $_SESSION['parent_name'];?>">
             </div>

             <div class="col-12 col-lg-6">
               Date:  <br>
               <input type="text"  name="date_2" class=" form-control input-field-one" readonly value="<?php echo $_SESSION['today'];?>" >
             </div>

          </div>





         <div class="row mt-5">
      
            <div class="col-12  mt-5 ">
  						<div class="custom-control custom-checkbox mb-3">
  					      <input type="checkbox" class="custom-control-input " id="customCheckID" name="checkbox-5">
  					      <label id="confirm-check-1" class="custom-control-label" for="customCheckID">I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.</label>
  					    </div>
  			    </div>
               
          <div class="col-12  mt-5 ">
  						<div class="custom-controls col-sm-4" style=" text-align: center;">
  					      <label class="signature-cls" style="display:none" id="lblParentName"></label>
  					      <div style="margin-top: -20px;">----------------------------</div>
  					      <div style="margin-top: -5px;">Parent Signature</div>
  					    </div>
  			  </div>
                
        </div>

         <div class="row col-12 col-lg-12 mt-5">
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
<script src="js/custom-valiation.js"></script>
 

<script >










 



    $(document).ready(function () {

             $('.dummy_MessageCheckBox').click(function() {
           $('.dummy_MessageCheckBox').not(this).prop('checked', false);
             });


      $('.dummy_MessageEmailCheckBox').click(function() {
           $('.dummy_MessageEmailCheckBox').not(this).prop('checked', false);
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
          if(value){
            value = 'true';
          }
          formData[name] = value;
        }



        console.log(formData);

        $.ajax({
                url: "pdf/consent-for-communication.php",
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
            


      }  else {
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