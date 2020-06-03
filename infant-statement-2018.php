<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>INFANT STATEMENT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css">
   
  <link href="css/jquery-ui.min.css" rel="stylesheet" />



  <style>
    .required-yes-no::before{
      border: 1px solid red !important;
    }
    .explain .required{
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
                  <h1>South Carolina Department of Social Services <br> Infant Statement </h1>
                </div>
              </div>
            </div>
          </div>

<!-- 
          <div class="row border-bottom  border-dark py-3">
            

            <div class="col-12 col-lg-12">
              <div class="header text-center">
               <p>
                 South Carolina Department of Social Services 
               </p>
                
                <h4>
              INFANT STATEMENT 
                </h4>

              </div>
            </div>
            
          </div> -->


            <div class="row my-4">
                    <div class="col-12">
                      Is your child infant? 
              <div class="custom-control custom-radio custom-control-inline">
                  <input data-infant="no" type="radio" id="radio-2" name="checkbox-Infant" class="custom-control-input">
                  <label class="custom-control-label" for="radio-2">No</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                  <input data-infant="yes" type="radio" id="radio-1" name="checkbox-Infant" class="custom-control-input">
                  <label class="custom-control-label" for="radio-1">Yes</label>
                </div>

               


               </div>
           </div>


     <div class="dummy_section_display">
          
          <div class="row mt-5">
            <div class="col-12 col-lg-4">
              From:  Child Care Center/Provider:
            </div>
            <div class="col-12 col-lg-8">
              <input type="text" name="input-1" class="form-control">
            </div>


            <div class="col-12 col-lg-4 mt-2">
              Sponsoring Organization:
            </div>
            <div class="col-12 col-lg-8 mt-2">
              <input type="text" name="input-2" class="form-control">
            </div>
          </div>



          <div class="row mt-4">
             <div class="col-12 col-lg-12">

                
                <p>
                  To: Parent/Guardian of Infant(s) in Child Care<br><br>
                  
                  I am required by the Child and Adult Day Care Food Program to offer a CACFP meal to all enrolled infants in my care. A CACFP meal includes iron fortified infant cereal and baby food when appropriate for the child’s age, at no additional charge
                  <br>
                  <br>


                  I am required to offer an infant formula, which meets program requirements to all enrolled infants in my care. The formula that I am providing is iron fortified <input type="text" name="input-3" style="width: 40%;"> . There will be no additional charge to you, if you would like your infant to receive the formula and/or age appropriate food that I am offering.

                  <br>
                  <br>

                  I understand that not all infants need the same formula, and that the formula served to your infant should be the one recommended by your physician. If you choose, you may continue to provide your infant’s formula or other food items. 



                </p>
             </div>
          </div>



          <div class="row mt-4">
            <div class="col-12">
              Parent/Guardian, please check the following statement that applies to you. Then sign and date below
            </div>

            <div class="col-12 col-lg-6 mt-2">
               Name of Infant <br>
              <input type="text" name="input-4" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
               Date of birth <br>
              <input type="text" name="input-5" class="form-control data-of-birth"  readonly value="<?php echo $_SESSION['date_of_birth'] ?>">
            </div>


          </div>


          

          <div class="row mt-5">

            <div class="col-12">
              <div class="col-auto my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-1" class="custom-control-input" id="checkbox-1">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-1"> I would like the child care provider to serve my infant the iron fortified infant formula listed above. When my child is developmentally ready, I understand that besides the formula, the caregiver will offer my infant other food items, approved by the CACFP meal pattern guidelines, at no additional charge to me.</label>
                 </div>
               </div>
            </div>


            <div class="col-12 mt-4">
              <div class="col-auto my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-2" class="custom-control-input" id="checkbox-2">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-2">   I will supply the breast milk/infant formula to the child care provider to serve to my infant. The name of the formula I will provide is: <input type="text" name="input-6">. I understand that the caregiver will offer other food items, approved by the CACFP meal pattern guidelines, to my child when developmentally ready.  </label>
                 </div>
               </div>
            </div>



            <div class="col-12 mt-4">
              <div class="col-auto my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-3" class="custom-control-input" id="checkbox-3">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-3">   I will supply the breast milk on site or express. I understand that the caregiver will offer other food items, approved by the CACFP meal pattern guidelines, to my child to my child when developmentally ready.</label>
                 </div>
               </div>
            </div>


            <div class="col-12 mt-4">
              <div class="col-auto my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-4" class="custom-control-input" id="checkbox-4">
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-4"> I will provide breast milk/infant formula and all other meal items to my child care provider to serve to my infant. The name of the formula I will provide is. <input type="text" name="provide"> </label>

                 </div>
               </div>
            </div>




          </div>


          <div class="row my-3">
            <div class="col-12 text-center">
                <p>Note: You will need to provide a medical statement for exempt formulas such as Nutramigen, NeoSure or Alimentum. </p>
            </div>
            <div class="col-12">
              If there are any changes from your above selection, a new form is required.
            </div>
          </div>

</div>



          <div class="row mt-3">

             <div class="col-12 col-lg-6 ">
               Parent Name:  <br>
               <input value="<?php echo $_SESSION['parent_name']; ?>" type="text"   readonly name="input-7" class=" form-control input-field-one" >
             </div>

             <div class="col-12 col-lg-6">
               Date:  <br>
               <input type="text" value="<?php echo $_SESSION['today']; ?>"  readonly  name="input-8" class=" form-control input-field-one" >
             </div>


             <!--<div class="col-12 col-lg-6  mt-2">
               Signature of Provider:  <br>
               <input type="text"  name="input-9" class=" form-control input-field-one" >
             </div>

             <div class="col-12 col-lg-6 mt-2">
               Date:  <br>
               <input type="text" value="<?php echo $_SESSION['today']; ?>"  readonly name="input-10" class=" form-control input-field-one" >
             </div>-->

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



        // ============= validation fucntoin========== 
  


    $("#submit").click(function(){
      var validate = validation();

      if(validate == true){



          
// ===== radio validation ===============
        var radioBoxs = $("input[type=radio]");
        var radioValidate = true;
          for (var i = 0; i < radioBoxs.length; i++){
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
            return false;
           }
              i++;
             
          }

          
// =========== end radio validation ==========  

          
          if (radioValidate != false) {

            
              var fields = $("input[type=text]");

              for (var i = 0; i < fields.length; i++) {
                  var name = $(fields[i]).attr('name');
                  var value = $(fields[i]).val();
                  formData[name] = value;
              }

              var checkbox = $(".custom-control-input");
              for (var i = 0; i < checkbox.length; i++) {
                  var name = $(checkbox[i]).attr('name');
                  var value = $(checkbox[i]).prop("checked");
                  if (value) {
                      value = 'Yes';
                  } else {
                      value = 'No';
                  }
                  formData[name] = value;
              }



              // console.log(formData);

              $.ajax({
                  url: "pdf/infant-statement-2018.php",
                  type: "post",
                  data: formData,
                  success: function (response) {
                      if (response == 'ok') {
                          window.location.href = "transportation-agreement.php";
                      } else {
                          window.location.href = "transportation-agreement.php";
                      }
                  }
              });

          }

      }

    })     


    
   
      $('[data-infant="yes"]').click(function () {
          $(".dummy_section_display").show();
         

      });

      $('[data-infant="no"]').click(function () {
          $(".dummy_section_display").hide();
         
      });
       
    






  })



 </script>


</body>
</html>

