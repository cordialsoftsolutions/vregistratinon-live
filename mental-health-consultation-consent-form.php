<?php 
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mental Health Consultation</title>
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

    	.custom-checkbox .required:before{
		border: 1px solid #e60000 !important;
		    box-shadow: 0px 0px 8px red;
	}
    .signature-cls{
	font-size: 24px;
    font-family: Blackadder ITC;
    padding-left: 5px;
}
</style>


</head>
<body>

  <div class="container my-5">
  

    <div class="row">

      <div class="col-12">
        <div class="cards p-3">
          
            <!-- personal info start -->
         <div class="section-one">
              

              <div class="title">
                <div class="row">
                  <div class="col-12 col-lg-2 text-center text-lg-left">
                    <img src="img/index-logo.png" alt="" width="80">
                  </div>
                  <div class="col-12 col-lg-10 text-center">
                    <div class="content">
                      <h1 class="font_bold">Beaufort Jasper EOC Head Start</h1>
                      <h1>Mental Health Consultation</h1>
                    </div>
                  </div>
                </div>
              </div>


              

              <div class="row mt-3">
                

                <div class="col-lg-12 col-12 text-center">
                  <h4 class="border-bottom border-dark d-inline  py-2">Parent Consent for Mental Health Consultation </h4>
                </div>

              

            
                  
              </div>

              <div class="row mt-3">
                <div class="col-lg-12">
                  <p>
                    Beaufort Jasper EOC Head Start promotes the development of healthy, happy, and wholesome children who are able to to adjust well to life changes and to be socially competent children and
adults. Head Start provides a mental health program that meets the needs of children and families served.

                    <br>
                    <br>
                    <br>
                    BJEOC Head Start provides Mental Health Consultation services which include: 
                    <br>

                    -Classroom Observations

                    <br>

                    -Support for classroom management & positive learning environments
                    <br>
                    <br>
                    <br>
                    <br>

                      Your consent for Mental Health Consultation allows the program to provide the best services to support social and emotional development. Please sign and return to your child’s Head Start center.

                  </p>
                  </div>
                </div>


              



                <div class="col-lg-12">
                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-1" class="custom-control-input dummy_MessageCheckBox" id="customControlAutosizing">
                      <label id="label-confirm-check"  class="custom-control-label required-lebel" for="customControlAutosizing"> I give consent for Mental Health Consultation services.</label>
                    </div>
                  </div>
                </div>


                <div class="col-lg-12">
                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-2" class="custom-control-input dummy_MessageCheckBox" id="customControlAutosizing-2">
                      <label id="label-confirm-check-1" class="custom-control-label required-lebel" for="customControlAutosizing-2"> I do not give consent for Mental Health Consultation services.</label>
                    </div>
                  </div>
                </div>



              </div>

         <div class="row mt-5">

                
             <div class="col-lg-4 ">
               Child(s) Name:<br>
               <input type="text" value="<?php echo $_SESSION['child_Name'];?>"  readonly  name="child_Name" class=" form-control input-field-one" >
             </div>

            <div class="col-lg-4">
               Parent Name: <br>
               <input type="text"  name="parent_signature"  readonly class="form-control input-field-one" id="" value="<?php echo $_SESSION['parent_name'];?>">
             </div>

             <div class="col-lg-4">
                Date: <br>
                <input type="text"  name="date"  readonly class="form-control input-field-one" id="" value="<?php echo $_SESSION['today'];?>">
              </div>


         </div>

         <div class="row mt-5">
               

          

          <div class="col-12 col-lg-12 mt-5">
						<div class="custom-control custom-checkbox mb-3">
					      <input type="checkbox" class="custom-control-input " id="customCheckID" name="checkbox-4">
					      <label id="confirm-check-1" class="custom-control-label" for="customCheckID">I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.</label>
					    </div>
			    </div>
             


               <div class="col-12 col-lg-12 mt-5">
						<div class="custom-controls col-sm-4" style=" text-align: center;">
					      <label class="signature-cls" style="display:none" id="lblParentName"></label>
					      <div style="margin-top: -20px;">----------------------------</div>
					      <div style="margin-top: -5px;">Parent Signature</div>
					    </div>
			  </div>

                <!--<div class="col-12 col-lg-6 mt-5">
                      <div class="row mt-2">
                       <div class="col-12">Date</div>
                       <div class="col-12">
                         <input type="text" name="signature_date" class="form-control">
                       </div>
                     </div>
                </div>-->
                

           </div>

         <div class="row  mt-5">
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

       $('.dummy_MessageCheckBox').click(function() {
           $('.dummy_MessageCheckBox').not(this).prop('checked', false);
        });


      $("#customControlAutosizing").click(function () {
         if ($(this).prop("checked") == true) {
             $("#label-confirm-check").removeClass("required");
              $("#label-confirm-check-1").removeClass("required");
            
         }
        
      });

      $("#customControlAutosizing-2").click(function () {
         if ($(this).prop("checked") == true) {
             $("#label-confirm-check-1").removeClass("required");
             $("#label-confirm-check").removeClass("required");
         }
         
      });



      $("#submit").click(function () {

        var checkbox_checked = false;
        var check_1 = $("#customControlAutosizing");
  		 	var check_2 = $("#customControlAutosizing-2");

  		 	if(check_1.prop("checked") == false &&  check_2.prop("checked") == false){
  		 		$(".required-lebel").addClass("required");
          checkbox_checked = false;
          check_1.focus();

          //alert("ok")
  			
  		 	}else{
  		 		$(".required-lebel").removeClass("required");
          checkbox_checked = true;

  				
        }



      var validate = validation();

      if(validate == true && checkbox_checked == true){

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




        // console.log(formData);


        $.ajax({
                url: "pdf/mental-health-consultation-consent-form.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "consent-for-release-of-information.php";
                  }else{
                     window.location.href = "consent-for-release-of-information.php";
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