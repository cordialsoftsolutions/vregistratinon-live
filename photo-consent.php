<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Photo Consent Form</title>
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
                  <h1>Photo Consent Form </h1>
                </div>
              </div>
            </div>
          </div>
          
  
          <!-- <div class="row border-bottom  border-dark py-3">
            

            <div class="col-12 col-lg-12">
              <div class="header text-center">
                <img src="img/pdf-13/logo-13.jpg" alt=""><br>
                <h4>
              Beaufort Jasper EOC Head Start
                </h4>

               <p>
                 1905 Duke Street, Suite 250 <br> Beaufort, SC 29902 <br> Phone: (843)255-7233 Fax: (843) 255-7225
               </p>
              </div>
            </div>
            
          </div> -->

          <div class="row mt-5 ">
             <div class="col-12 col-lg-12">

                  <h4>
                    Photo Consent Form 
                  </h4>


                <p>
                  We take photographs (and may take videos) of your child during the school year to attach to your child’s school record to use for identification purposes and at times to display inside our school building. <br/><br />  Ocassionally, we may use these photographs or video images for recruitment activites, BJEOC Head Start website, or, to provide information on Head Start Start Initiatives. Your child’s name will not be used in any photo caption or text. <br> Please review and select an option below:
                </p>
             </div>
          </div>


          <div class="row">
            <div class="col-12 col-lg-6 ">
              Child Name:  <br>
              <input value="<?php echo $_SESSION['child_Name']; ?>" type="text"  readonly  name="child_Name" class=" form-control" >
            </div>


            <div class="col-12 col-lg-6 ">
              Parent Name:   <br>
              <input value="<?php echo $_SESSION['parent_name']; ?>" type="text" readonly  name="parent_name" class=" form-control" >
            </div>
          </div>

          <div class="row mt-5">

            <div class="col-12">
              <div class="col-auto my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-1" class="custom-control-input" id="checkbox-1">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-1"> I give permission to BJEOC Head Start to take photos of my child for school records for identification purposes and to ensure saftey.  </label>
                 </div>
               </div>
            </div>


            <div class="col-12 mt-4">
              <div class="col-auto my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-2" class="custom-control-input" id="checkbox-2">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-2">  I give permission to BJEOC Head Start to take photos of my child during classroom activities, field trips, and events held at the center for display in the classroom and at times display in the school building. </label>
                 </div>
               </div>
            </div>



            <div class="col-12 mt-4">
              <div class="col-auto my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-3" class="custom-control-input dummy_MessageCheckBox" id="checkbox-3">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-3">  I give permission to BJEOC Head Start to use these photographs or video images for recruitment activities, BJEOC Head Start website, and to provide information on BJEOC Head Start Initiatives.</label>
                 </div>
               </div>
            </div>


            <div class="col-12 mt-4">
              <div class="col-auto my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-4" class="custom-control-input dummy_MessageCheckBox" id="checkbox-4">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-4">  I  do not give BJEOC Head Start permisison use these photographs or video images for recruitment activities, BJEOC Head Start website, and to provide information on BJEOC Head Start Initiatives. </label>
                 </div>
               </div>
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
            value = 'Yes';
          }else{
            value = 'No';
          }
          formData[name] = value;
        }



        // console.log(formData);

        $.ajax({
                url: "pdf/photo-consent.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "telehealth-consent-form.php";
                  }else{
                   window.location.href = "telehealth-consent-form.php";
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