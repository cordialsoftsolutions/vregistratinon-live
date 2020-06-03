<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Determination of Child’s Health Status and Source</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css">
   
<link href="css/jquery-ui.min.css" rel="stylesheet" />

<style>
  .required-yes-no::before{
    border: 1px solid red !important;
  }
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
                  <h1>Determination of Child’s Health Status and Source</h1>
                </div>
              </div>
            </div>
          </div>
          
  
<!--           <div class="row border-bottom  border-dark py-3">
              

            <div class="col-12 col-lg-12">
              <div class="header text-center">
                <img src="img/pdf-13/logo-13.jpg" alt=""><br>
                <h4>
               BEAUFORT JASPER EOC HEAD START   <br>       
                POST OFFICE BOX 2296 - 1905 DUKE STREET SUITE 250 <br> 
                BEAUFORT, SOUTH CAROLINA 29901 <br> 
                TELEPHONE (843) 255-7237/FAX (843) 255-7225 <br>  
                Determination of Child’s Health Status and Source <br>
                </h4>
              </div>
            </div>
            
          </div> -->

          <div class="row mt-5 ">
             <div class="col-12 col-lg-6">
               Child Name:  <br>
               <input value="<?php  echo $_SESSION['child_Name']; ?>" readonly type="text"  name="child_Name" class=" form-control" >
             </div>
          </div>

          <div class="row mt-3 ">
             <div class="col-12">
               Does the child have a doctor or clinic? &nbsp;&nbsp;
                
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="radio-1" name="checkbox-1" class="custom-control-input">
                  <label class="custom-control-label" for="radio-1">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="radio-2" name="checkbox-1" class="custom-control-input">
                  <label class="custom-control-label" for="radio-2">No</label>
                </div>


                <!-- <div class="col-auto my-1" style="display: inline-block;">
                  <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                    <input style="display: inline-block;" type="checkbox" name="checkbox-1" class="custom-control-input" id="checkbox-1">
                    <label style="display: inline-block;" class="custom-control-label" for="checkbox-1">Yes / No</label>
                  </div>
                </div>  -->


             </div>
          </div>

          <div class="row mt-3">
            <div class="col-12 col-lg-6">
             Name of Physician:  <br>
              <input type="text"  name="physician_name" class=" form-control" >
            </div>
            <div class="col-12 col-lg-6">
             Address:  <br>
              <input type="text"  name="physician_address" class=" form-control" >
            </div>

            <div class="col-12 col-lg-6">
             Phone:  <br>
     
           <input  class="phone-formate form-control " name="physician_phone" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
              
            </div>

            <div class="col-12 col-lg-6">
             Last Date of Exam:  <br>
              <input type="text"  name="physician_date" class=" form-control data-of-birth" >
            </div>
          </div>

          

          <div class="row mt-3 ">
             <div class="col-12">
               Does the child have a dentist? &nbsp;&nbsp;

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="radio-3" name="checkbox-2" class="custom-control-input">
                <label class="custom-control-label" for="radio-3">Yes</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="radio-4" name="checkbox-2" class="custom-control-input">
                <label class="custom-control-label" for="radio-4">No</label>
              </div>

               <!-- <div class="col-auto my-1" style="display: inline-block;">
                  <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                    <input style="display: inline-block;" type="checkbox" name="checkbox-2" class="custom-control-input" id="checkbox-2">
                    <label style="display: inline-block;" class="custom-control-label" for="checkbox-2">Yes / No</label>
                  </div>
                </div>  --> 
             </div>
          </div>

          <div class="row mt-3">
            <div class="col-12 col-lg-6">
             Name of Dentist :  <br>
              <input type="text"  name="dentist_name" class=" form-control" >
            </div>
            <div class="col-12 col-lg-6">
             Address:  <br>
              <input type="text"  name="dentist_address" class=" form-control" >
            </div>

            <div class="col-12 col-lg-6">
             Phone:  <br>
              
                 <input  class="phone-formate form-control " name="dentist_phone" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
          
            </div>

            <div class="col-12 col-lg-6">
             Last Date of Exam:  <br>
              <input type="text"  name="dentist_date" class=" form-control data-of-birth" >
            </div>
          </div>


          <div class="row mt-3">
            <div class="col-12 col-lg-4">
             Health Insurance/Medicaid #   <br>
              <input type="text"  name="Health_Insurance" class=" form-control" >
            </div>

            <div class="col-12 col-lg-4">
             Private Insurance  #   <br>
              <input type="text"  name="Private_Insurance" class=" form-control" >
            </div>

            <div class="col-12 col-lg-4">
             Other Insurance/Medicaid #   <br>
              <input type="text"  name="Other_Insurance" class=" form-control" >
            </div>


          </div>



       







          <div class="row mt-5">

             <div class="col-12 col-lg-5 ">
               Parent Name:  <br>
               <input value="<?php echo $_SESSION['parent_name']; ?>" readonly type="text"  name="parent_signature" class=" form-control input-field-one" >
             </div>

             <div class="col-12 col-lg-5">
               Date:  <br>
               <input type="text"  value="<?php echo $_SESSION['today'];?>"  readonly name="date" class=" form-control input-field-one" >
             </div>

          </div>



         <div class="row mt-5">
      
            <div class="col-12 col-lg-10 mt-5 ">
              <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input " id="customCheckID" name="checkbox-3">
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










 
  var formData = {};

  $(document).ready(function(){






    $("input[type=radio]").click(function(){

      var this_name =  $(this).attr('name');
      var all_radio = $("input[name='"+this_name+"']");

      for(var i=0; i<2;i++){
        var label =  $(all_radio[i]).siblings('label');
        label.removeClass('required-yes-no');
      }

    })



    $("#submit").click(function(){
      var validate = validation();

      if(validate == true){



// ===== radio validation ===============
        var radioBoxs = $("input[type=radio]");
        var radioValidate = true;
        for(var i=0;i<radioBoxs.length;i++){
           var yes_val = $(radioBoxs[i]).prop("checked");
           var no_val = $(radioBoxs[i+1]).prop("checked");
           var r_name = $(radioBoxs[i]).attr('name');

           if(yes_val){
            formData[r_name] = 'Yes';
           }else if(no_val){
            formData[r_name] = 'No';
           }else{

            radioValidate = false;
            var label = $(radioBoxs[i]).siblings('label');
            label.addClass("required-yes-no");
           
            var label = $(radioBoxs[i+1]).siblings('label');
            label.addClass("required-yes-no");
            $(radioBoxs[i]).focus();
            break;
           }
           i++;
          }
// =========== end radio validation ==========  




        
        var fields = $(".form-control");
        for(var i = 0; i< fields.length; i++){
          var name = $(fields[i]).attr('name');
          var value = $(fields[i]).val();
          formData[name] = value;
        }

        // console.log(formData);

        if(radioValidate){
          $.ajax({
                  url: "pdf/determination-of-child-health-status-source.php",
                  type: "post",
                  data: formData,
                  success: function (response) {
                    if(response == 'ok'){
                      window.location.href = "infant-statement-2018.php";
                    }else{
                      window.location.href = "infant-statement-2018.php";
                    }
                  }
              });
        }else {
                validate.addClass('border');
                validate.focus();

                setTimeout(function () {
                    validate.removeClass('border')
                }, 3000);
        }
       



      }
    })
  })

     

    </script>


</body>
</html>