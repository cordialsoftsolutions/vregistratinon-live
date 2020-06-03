<?php 
session_start();
// var_dump($_SESSION);exit;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Corporal Punishment, Child Abuse and Isolation Policy</title>
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
                      <h1>Corporal Punishment, Child Abuse and Isolation Policy</h1>
                    </div>
                  </div>
                </div>
              </div>


             <div class="row mt-5 ">

              

                <div class="col-lg-6 col-12 ">
                   Child(s) Name: <br>
                  <input type="text"  name="child_Name" class=" form-control input-field-one"  readonly value="<?php echo $_SESSION['child_Name'];?>" >
                </div>


                <div class="col-lg-6 col-12 ">
                   Center:  <br>
               
                    <select name="center"   class="form-control dummy_validation dummy_selectbox">
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

              <div class="row mt-3 justify-content-center">
                <div class=" col-12">
                  <p>
                    Corporal punishment is never used at a Head Start Center (inside or outside) or on a Head Start bus by parent, staff or anyone who comes in contact with the children.
                  </p>


                  <p>
                    <b>The policy states that a parent or staff will not: </b>
                  </p>

                  <ol>
      
                    <li> Use physical force, such as spanking, slapping, pulling of hair, shoving, pinching, or boxing, as a discipline measure on Head Start property or at a Head Start function.</li> 
                    <li>Isolate a child from normal classroom activities as punishment.</li>
                    <li> Confine the child to the classroom when the other children go to play or restrict the child from any meal with his/her classmates.</li>
                    

                  </ol>
                  
                  </div>
                </div>

            </div>

         <div class="row mt-3">

               <div class="col-12  ">
                 

                  <p>I have read the policy forbidding the use of corporal punishment and isolation in the Beaufort-Jasper EOC
                  Head Start Program.  I understand that if I am found guilty of administering corporal punishment to any child
                  on a Head Start function, a child abuse report will be made with Child Protective
Services.</p>




               </div>

           

          </div>

         <div class="row mt-5">
      
            <div class="col-12 col-lg-6 ">
                <div class="row mt-2">
                 <div class="col-12">Parent Name:</div>
                 <div class="col-12">
                   <input type="text" name="parent_name" class="form-control" readonly value="<?php echo $_SESSION['parent_name'];?>">
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

          

          <div class="col-12  mt-5 ">
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


        <div class="col-12  mt-5 ">
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



         console.log(formData);

        $.ajax({
                url: "pdf/corporal-punishment-childabuse-policy.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                  
                    
                     window.location.href = "consent-for-services-dental-physical.php";
                  }else{
                    window.location.href = "consent-for-services-dental-physical.php";
                  }
                }
            });

         

      }     else {
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