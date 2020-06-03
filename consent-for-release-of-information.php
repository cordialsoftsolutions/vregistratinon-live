<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Consent to release of information</title>
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
                      <h1>Consent to Release of Information</h1>
                    </div>
                  </div>
                </div>
              </div>



              <div class="row mt-3 mb-5">
                

                <div class="col-lg-12 col-12 text-center">
                  <h4 class="  pb-2">Parental Consent to Release and Receive Information </h4>
                </div>

              

            
                  
              </div>

              <div class="row mt-3">
                <div class="col-lg-12">
                  <p class="d-inline">
                    I <input type="text" name="name" class="d-inline" style="background-color: #e9ecef; opacity: 1;" readonly value="<?php echo $_SESSION['parent_name'];?>">   


                    <div class="col-auto my-1 d-inline">
                      <div class="custom-control custom-checkbox mr-sm-2 d-inline">
                        <input type="checkbox" name="checkbox-1" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing"> parent</label>
                      </div>
                    </div>

                    <div class="col-auto my-1 d-inline">
                      <div class="custom-control custom-checkbox mr-sm-2 d-inline">
                        <input type="checkbox" name="checkbox-2" class="custom-control-input" id="customControlAutosizing-2">
                        <label class="custom-control-label" for="customControlAutosizing-2"> legal guardian </label>
                      </div>
                    </div>


                    <div class="col-auto my-1 d-inline">
                      <div class="custom-control custom-checkbox mr-sm-2 d-inline">
                        <input type="checkbox" name="checkbox-3" class="custom-control-input" id="customControlAutosizing-3">
                        <label class="custom-control-label" for="customControlAutosizing-3"> primary caretaker</label>
                      </div>
                    </div>


         
                          give permission to release or receive all personally identifiable information indicated below in reference to my child, <input value="<?php echo $_SESSION['child_Name'] ?>" readonly placeholder="Child Name" type="text" name="child_Name" class="d-inline" style="background-color: #e9ecef; opacity: 1;"> born <input type="text" placeholder="Born" readonly name="date_of_birth" value="<?php echo $_SESSION['date_of_birth'];?>" style="background-color: #e9ecef; opacity: 1;"  class="d-inline" >  to the organizations and/or individuals listed below.

                    <br>
                    <br>
                    <br>
                    This consent gives Beaufort-Jasper EOC Head Start permission to release the following records regarding my child to the Beaufort and/ or Jasper County School District, and, gives permission to the Beaufort and/ or Jasper County School District to release the following records regarding my child through the third grade to  Beaufort-Jasper EOC Head Start
                

                  </p>
                  </div>
                </div>


              

                <div class="col-lg-11 offset-lg-1">
                    
                    <h5>Release or Receipt of information between</h5>


                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-4" class="custom-control-input" id="customControlAutosizing-4">
                      <label class="custom-control-label" for="customControlAutosizing-4"> Baby Net (Children birth to 3 years old)</label>
                    </div>
                  </div>


                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-5" class="custom-control-input" id="customControlAutosizing-5">
                      <label class="custom-control-label" for="customControlAutosizing-5"> Department of Social Services</label>
                    </div>
                  </div>

                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-6" class="custom-control-input" id="customControlAutosizing-6">
                      <label class="custom-control-label" for="customControlAutosizing-6"> Early Interventionist</label>
                    </div>
                  </div>

                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-7" class="custom-control-input" id="customControlAutosizing-7">
                      <label class="custom-control-label" for="customControlAutosizing-7"> Pediatrician or other physician(s): <input type="text" name="Pediatrician" ></label>
                    </div>
                  </div>

                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-8" class="custom-control-input" id="customControlAutosizing-8">
                      <label class="custom-control-label" for="customControlAutosizing-8"> Other:</label>
                    </div>
                    <input  type="text" name="other" class="form-control"> 
                  </div>

       

                </div>


                <div class="col-12 col-lg-11 offset-lg-1 mt-5">

                  
                  <h5>Release or Receipt of information between</h5>
                  



                  <div class="row">
                    <div class="col-12 col-lg-6">
                      
                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-9" class="custom-control-input" id="customControlAutosizing-9">
                            <label class="custom-control-label" for="customControlAutosizing-9"> Educational and/or Developmental Screenings Results</label>
                          </div>
                        </div>


                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-10" class="custom-control-input" id="customControlAutosizing-10">
                            <label class="custom-control-label" for="customControlAutosizing-10"> Educational Assessment Scores</label>
                          </div>
                        </div>

                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-11" class="custom-control-input" id="customControlAutosizing-11">
                            <label class="custom-control-label" for="customControlAutosizing-11"> Hearing/Vision Screenings and/or Results</label>
                          </div>
                        </div>

                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-12" class="custom-control-input" id="customControlAutosizing-12">
                            <label class="custom-control-label" for="customControlAutosizing-12"> Medical Records</label>
                          </div>
                        </div>



                    </div>
                    <div class="col-12 col-lg-6">
                      
                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-13" class="custom-control-input" id="customControlAutosizing-13">
                            <label class="custom-control-label" for="customControlAutosizing-13"> Evaluation Results</label>
                          </div>
                        </div>

                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-14" class="custom-control-input" id="customControlAutosizing-14">
                            <label class="custom-control-label" for="customControlAutosizing-14"> IEP/IFSP</label>
                          </div>
                        </div>

                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-15" class="custom-control-input" id="customControlAutosizing-15">
                            <label class="custom-control-label" for="customControlAutosizing-15"> Certificate of Immunization</label>
                          </div>
                        </div>

                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-16" class="custom-control-input" id="customControlAutosizing-16">
                            <label class="custom-control-label" for="customControlAutosizing-16"> Copy of Birth Certificate</label>
                          </div>
                        </div>

                        <div class="col-auto my-1">
                          <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="checkbox-17" class="custom-control-input" id="customControlAutosizing-17">
                            <label class="custom-control-label" for="customControlAutosizing-17"> Other:</label>
                          </div>
                          <input type="text" name="other-2"  class="form-control" >
                        </div>

                        



                    </div>
                  </div>

         





                </div>



              </div>

         <div class="row mt-5">

            
            <div class="col-12">
              <p>
                The information being released or received will assist the organizations listed in gathering information for school enrollment and/or transition, record keeping, and data collection purposes for continuous program improvement.
              </p>
            </div>
             

            <div class="col-lg-6">
               Parent Name: <br>
               <input type="text" readonly  name="parent_signature" class="form-control input-field-one" value="<?php echo $_SESSION['parent_name'];?>">
             </div>

             <div class="col-lg-6 ">
               Date:<br>
               <input type="text" value="<?php echo $_SESSION['today'];?>" readonly  name="date" class=" form-control input-field-one" >
             </div>


             <div class="col-12 mt-3">
               <p class=" p-3" style="border: 1px solid #333; background: #c1c1c1;">
                 I understand that I have the right to INSPECT, COPY, and CHALLENGE the content of the records for which I am authorizing release. I understand this consent may be revoked in writing by me at anytime, except to the extent that the information has already been used. I understand that until this revocation is made, this consent shall
remain in effect and the records will continue to be provided for the
specific purpose described above.

               </p>
             </div>


         </div>

         <div class="row mt-5">
               

          

          <div class="col-12 col-lg-12 mt-5">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input " id="customCheckID" name="checkbox-18">
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

<script>



  $(document).ready(function(){

  

    $("#submit").click(function(){
      var validate = validation();

      if(validate == true){

        var formData = {};
        var fields = $("input[type=text]");

        for(var i = 0; i< fields.length; i++){
          var name = $(fields[i]).attr('name');
          var value = $(fields[i]).val();
          formData[name] = value;
        }

        var checkbox = $(".custom-control-input");
         var relation = '';
        for(var i = 0; i< checkbox.length; i++){
          var name = $(checkbox[i]).attr('name');
          var value = $(checkbox[i]).prop("checked");


          
         
          if(value){
            value = 'true';

            if(name == 'checkbox-1'){
             
              relation = relation +'Parent, ';
            }


            if(name == 'checkbox-2'){
              
              relation = relation+'Legal guardian, ';
            }

            if(name == 'checkbox-3'){
          
              relation = relation+'primary caretaker';
            }

             formData['relation'] = relation;
             
          }

          formData[name] = value;

        }




       // console.log(formData);


        $.ajax({
                url: "pdf/consent-for-release-of-information.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "permission-to-screen-assess.php";
                  }else{
                     window.location.href = "permission-to-screen-assess.php";
                  }
                }
            });



      }else{
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