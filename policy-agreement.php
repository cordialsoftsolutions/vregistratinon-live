<?php
session_start();
// var_dump($_SESSION);exit;
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Policy Agreement</title>
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
                      <h1>Policy Agreement</h1>
                    </div>
                  </div>
                </div>
              </div>



             
              <div class="row mt-5 ">

                <div class="col-lg-6 col-12 ">
                   Child(s) Name: <br>
                  <input type="text"  name="child_Name" readonly class=" form-control input-field-one" value="<?php echo $_SESSION['child_Name'];?>" >
                </div>
                  

                  

                <div class="col-lg-6 col-12 ">
                   Center:  <br>
                       <select name="center" class="form-control dummy_validation" disabled>
                          <option value="<?php echo $_SESSION['center']; ?>"><?php echo $_SESSION['center'];?></option>
                      </select>
                </div>
              </div>

              <div class="row mt-3 justify-content-center">
                <div class=" col-12">
                  <p>
                     I have received the Beaufort Jasper EOC Head Start Handbook. The policies listed below have been explained to me by a Head Start staff personnel.
                  </p>

                  <ul>
      
                    <li>Discipline</li> 
                    <li>Field Trips </li>
                    <li>Administering Medication </li>
                    <li>Drop-off and Pick-up</li> 
                    <li>Transportation</li>  
                    <li>Child Abuse</li> 
                    <li>Attendance </li>

                  </ul>
                  
                  </div>
                </div>

            </div>

         <div class="row mt-3">

               <div class="col-12 col-lg-10 ">
                 <h5>Parental Agreement</h5>
               </div>

               <div class="col-12 col-lg-10 ">
                 <span>I agree: </span><br>

                  <ul>

                  <li>That my child will be in regular attendance at his/her assigned Head Start Center.</li> 

                    <li>To call the center when my child will be absent.</li> 

                    <li>To take and meet my child at the assigned bus stop and/or to designate a responsible receiver (an adult) to fulfill this responsibility freeing Head Start from any and all responsibility after my child gets off the bus. </li>

                    <li>If I provide transportation, I agree to be at the center on time to drop-off and  pick-up my child.</li> 

                    <!--<li>To update all forms whenever changes occur and immediately notify the center of change of address, telephone number(s) and responsible receiver.</li>-->
                    <!--<li>To update all forms whenever
changes occur and immediately notify the center of change of address,
telephone number.</li>-->

                      <li>
                          To update all forms whenever changes occur and immediately notify the center of any changes of address or telephone number.
                      </li>
                </ul>

              </div>

          </div>

         <div class="row mt-5">
      
            <div class="col-12 col-lg-6 ">
                <div class="row mt-2">
                 <div class="col-12">Parent’s Name:</div>
                 <div class="col-12">
                   <input type="text" name="parent_name" readonly class="form-control" value="<?php echo $_SESSION['parent_name'];?>" >
                 </div>
               </div>
            </div>


            <div class="col-12 col-lg-6">
                <div class="row mt-2">
                 <div class="col-12">Date:</div>
                 <div class="col-12">
                   <input type="text" name="date" class="form-control" readonly value="<?php echo $_SESSION['today'];?>">
                 </div>
               </div>
            </div>

          

          <div class="col-12 col-lg-10 mt-5 ">
						<div class="custom-control custom-checkbox mb-3">
					      <input type="checkbox" class="custom-control-input " id="customCheckID" name="checkbox-1">
					      <label id="confirm-check-1" class="custom-control-label" for="customCheckID">I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.</label>
					    </div>
			    </div>
             

                <!--<div class="col-12 col-lg-6 mt-5">
                      <div class="row mt-2">
                       <div class="col-12">Singature</div>
                       <div class="col-12">
                         <input type="text" name="singature" class="form-control">
                       </div>
                     </div>
                </div>-->


             <div class="col-12 col-lg-10 mt-5 ">
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



        // console.log(formData);

        $.ajax({
                url: "pdf/policy-agreement.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                   // window.location.href = "pdf-3.php";
                   window.location.href = "corporal-punishment-childabuse-policy.php";                     
                  }else{
                    window.location.href = "corporal-punishment-childabuse-policy.php"; 
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