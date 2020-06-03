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

          <!-- <div class="title">
             <div class="row">
               <div class="col-12 col-lg-2 text-center text-lg-left">
                 <img src="img/index-logo.png" alt="" width="80">
               </div>
               <div class="col-12 col-lg-10 text-center">
                 <div class="content">
                   <h1>Beaufort Jasper EOC Head Start</h1>
                   <h2>Free vision screening</h2>
                 </div>
               </div>
             </div>
           </div> -->

           <div class="row  py-3">
             <div class="col-12 text-center">
               <img src="img/pdf-10/logo-10-1.jpg" alt="">
             </div>
             
           </div>

          

          <div class="row  mt-4">
            <div class="col-lg-12 col-12 ">


              <h3 class="text-center mb-5">FREE VISION SCREENING </h3>
              <p>
                 A free FocusFirst vision screening is being offered at your childcare center.  <br>
                  
                 FocusFirst has screened more than 400,000 children since 2006. Of those screened, over 40,000 were suffering from undetected vision problems. <br>
                  
                 Undetected vision problems can lead to difficulty in the classroom, slow social development, and, in some cases, permanent blindness. <br>
                  
                 A FocusFirst vision screening can help to ensure that your child has a healthy start to life.  <br>



                 - The screening is high-tech and non-invasive; we simply take a photograph of your child’s eyes with a digital camera.<br>

                 - If a potential vision problem is detected, you will have access to free or low-cost eye care.<br>

                - If your child already wears glasses, the screening will confirm that the glasses are the correct prescription. <br><br>
                  
                 If your child is found to have a potential vision problem, he or she will be referred to our partner organization Sight Savers America. They will contact you to provide information about your child's vision assessment and will assist all families needing information on local eye care resources. For children from low income families, Sight Savers America will coordinate free comprehensive eye care services. <br>
                  
                 Please fill out the attached form completely and return it to your childcare director. <br>
                  
                 For more information, call (864) 412-5489. <br><br>
                  
                 <b>Note:</b> This program is based on a screening process, it is not diagnostic. Screening is intended to identify children with a wide range of eye problems who should seek the services of an eye-care professional for examination and diagnosis. As with any screening process, there is no assurance that all problems will be detected. Eye problems not detected by this screening process include diseases affecting the retina and optic nerve, glaucoma, certain forms of astigmatism and color blindness. No screening process, including that of FocusFirst, is a substitute for a full examination by a qualified eye-care professional. 
              </p>
              
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h3>Child Screening Form </h3>
              <small>(Please fill out this form completely. We will only contact you if your child has a potential vision problem.) </small>

              <h6>Child Information </h6>
            </div>

            <div class="col-12 col-lg-6">
              <label for="">First Name:</label>
              <input type="text" class="form-control" name="first_name" readonly value="<?php echo $_SESSION['child_first_name']; ?>"> 

              <label for="">Last Name:</label>
              <input type="text" class="form-control" name="last_name" readonly value="<?php echo $_SESSION['child_last_name']; ?>">

              <!-- <label for="">Teacher</label>
              <input type="text" class="form-control" name="teacher"> -->

            </div>

            <div class="col-12 col-lg-4">
              <label for="">Date of birth:</label>
              <input class="form-control data-of-birth" readonly value="<?php echo $_SESSION['date_of_birth'] ?>" type="text" name="date_of_birth"> 

              <label for="">Gender:</label>
              <select class="form-control" name="gender" id="">
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>

          </div>



          <div class="row mt-5">
            <div class="col-12">
              <h5>Parent / Guardian Information</h5>
            </div>

            <div class="col-12 col-lg-6">
              <h6>Primary Contact </h6>
              <label for="">Name:</label>
              <input type="text" name="parent_name_1" class="form-control" value="<?php echo $_SESSION['parent_name'] ?>" >
              <label for="">Relationship to Child:</label> 
              <input type="text" name="relation_1" class ="form-control" value="<?php echo $_SESSION['Relationship-to-child'] ?>">

              <label for="">Home Phone:</label>
              <input  class="phone-formate form-control " name="home_phone_1" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  value="<?php echo $_SESSION['home'] ?>"  />
            

              <label for="">Primary Number:</label> 
              <input  class="phone-formate form-control " name="call_phone_1" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX" value="<?php echo $_SESSION['mobile'] ?>"  />
            


              <label for="">Work phone:</label> 
              <input  class="phone-formate form-control " name="workphone_1" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX" value="<?php echo $_SESSION['work'] ?>"  />
            

              <label for="">Address:</label> 
              <input type="text" name="address_1" class ="form-control" value="<?php echo $_SESSION['address'] ?>" >

              <label for="">City, State, Zip Code:</label> 
              <input type="text" name="city_state_zip_1" class ="form-control"  value="<?php echo $_SESSION['cityStateZipcodeParent'] ?>">

              <label for="">Email Address:</label> 
              <input type="text" name="emal_1" class ="form-control dummy_email_validation required_email" value="<?php echo $_SESSION['email-address'] ?>"  >
            </div>




            <div class="col-12 col-lg-6">
              <h6>Secondary Contact </h6>
              <label for="">Name:</label>
              <input type="text" name="parent_name_2" class="form-control">
              <label for="">Relationship to Child:</label> 
              <input type="text" name="relation_1" class ="form-control">

              <label for="">Home Phone:</label> 
              <input  class="phone-formate form-control " name="home_phone_2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            

              <label for="">Primary Number:</label> 
              <input  class="phone-formate form-control " name="call_phone_2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
              
              <label for="">Work phone:</label> 
              <input  class="phone-formate form-control " name="workphone_2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            

              <label for="">Address:</label> 
              <input type="text" name="address_2" class ="form-control">

              <label for="">City, State, Zip Code:</label> 
              <input type="text" name="city_state_zip_2" class ="form-control">

              <label for="">Email Address:</label> 
              <input type="text" name="emal_2" class ="form-control dummy_email_validation">
            </div>


          </div>

          <div class="row my-5">
            <div class="col-12">
              <h5>FocusFirst Screening Result (to be completed by FocusFirst screener) </h5>
            </div>
            <div class="col-12 col-lg-6">
              <p>
                Screening Complete / Passed <br>
                Complete Eye Exam Recommended / Failed <br>
                Absent 
              </p>
            </div>


            <div class="col-12 col-lg-6">
              <p>
               
                Parent Declined Vision Screening  <br>
               No Result 
               
              </p>
            </div>


          </div>

          <div class="row">
            <div class="col-12">
              <p>
                
                  <b>Only complete this portion if you DO NOT want your child screened for vision problems:</b> <br>
                 Please write “NO” in the box and sign below if you DO NOT want your child to receive a free, non-invasive vision screening.
              </p>
            </div>
          </div>

           <div class="row mt-5">

             <div class="col-12 col-lg-6 ">
               Parent Name:  <br>
               <input value="<?php echo $_SESSION['parent_name']; ?>" readonly type="text"  name="parent_signature" class=" form-control input-field-one" >
             </div>

             <div class="col-12 col-lg-6">
               Date:  <br>
               <input type="text" value="<?php echo $_SESSION['today'];?>" readonly  name="date" class=" form-control input-field-one" >
             </div>

          </div>



         



         <div class="row mt-5">
      
            <div class="col-12 col-lg-10 mt-5">
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



        console.log(formData);

        $.ajax({
                url: "pdf/consent-for-focus-first.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "health-and-nutrition-history.php";
                  }else{
                     window.location.href = "health-and-nutrition-history.php";
                  }
                }
            });



      } else {
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