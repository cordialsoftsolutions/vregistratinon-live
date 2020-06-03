<?php 
session_start();
// var_dump($_SESSION);exit;

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Emergency Medical Treatment</title>
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
                  <h1>Emergency Medical Treatment</h1>
                </div>
              </div>
            </div>
          </div>

         

          <div class="row  justify-content-center mt-4">
            <div class=" col-12 ">
              <p>
                 <!--I, <input id="name" placeholder="Name" type="text" name="name" style="background: transparent;border:0px !important; border-bottom: 1px solid #8cccff !important;"> hereby give my consent for emergency medical/dental treatment of the child listed below by any licensed physician or dentist while under the care of Beaufort-Jasper EOC Head Start and for transportation of the child to and from the source of emergency treatment. <br><br>-->
                 I, <input style="width:200px; background-color: #e9ecef; opacity: 1;" id="name" placeholder="Name" type="text" name="name" class="form-controls" readonly value="<?php echo $_SESSION['parent_name'];?>">, hereby give my consent for emergency medical/dental treatment of the child listed below by any licensed physician or dentist while under the care of Beaufort-Jasper EOC Head Start and for transportation of the child to and from the source of emergency treatment. <br><br>
                  
                 This care may include examinations and any test which, in the opinion of the physician, are deemed necessary or advisable. 
                  <br><br>
                 This does not include the right to perform surgical operations without further consent, except in the case of an emergency after an effort has been made to contact  me, and I am not available.
              </p>
              
            </div>
          </div>




          <div class="row">
            <div class=" col-12 ">
             
              <div class="row">

                <div class="col-sm-4">
                  Child(s) Name:<br>
                  <input type="text"  readonly value="<?php echo $_SESSION['child_Name'];?>" name="child_Name" class="form-control input-field-one" >
                </div>

                <div class="col-sm-4">
                  Date of Birth: <br>
                  <input type="text" readonly value="<?php echo $_SESSION['date_of_birth'];?>" name="date_of_birth" class="form-control data-of-birth">
                </div>


                <div class="col-sm-4">
                  Center's Name:<br>
                  <!-- <input type="text"  name="center_name" class="form-control input-field-one" > -->

                  <select readonly name="center_name" class=" form-control dummy_validation dummy_selectbox">
                      <option value="<?php echo $_SESSION['center']; ?>"><?php echo $_SESSION['center']; ?></option>
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


          <div class="row mt-3   ">
            <div class=" col-12 ">
             
              <div class="row">

                <div class="col-sm-4">
                  Parent Name:  <br>
                  <input type="text" readonly  name="parent_signature" class="form-control input-field-one" value="<?php echo $_SESSION['parent_name'];?>">
                </div>

                <div class="col-sm-4">
                  Relationship to Child:  <br>
                  <input type="text" readonly name="relation" class="form-control input-field-one" value="<?php echo $_SESSION['Relationship-to-child'];?>">
                </div>


                <div class="col-sm-4">
                  Date: <br>
                  <input type="text" value="<?php echo $_SESSION['today'];?>" readonly  name="date" class="form-control input-field-one" >
                </div>

              </div>
            
            </div>
          </div>







          <div class="row mt-4">

             <div class="col-12  ">
                <p>THIS FORM MUST BE UPDATED YEARLY AND IS ONLY VALID FOR THE CURRENT SCHOOL YEAR. </p>
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
 
<script src="js/jquery-ui.min.js"></script>
    <script src="js/custom-valiation.js"></script>
    

<script >




  $(document).ready(function(){


    $("#submit").click(function(){
      var validate = validation();

      if(validate== true){

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
                url: "pdf/emergency-treatment.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "mental-health-consultation-consent-form.php";
                  }else{
                    window.location.href = "mental-health-consultation-consent-form.php";
                  }
                }
            });



      }   else {
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