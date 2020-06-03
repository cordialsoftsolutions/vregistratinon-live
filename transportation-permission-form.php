<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Transportation Permission Agreement </title>
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
                  <h1> Transportation Permission Agreement <br> </h1>
                <!--(PRIVATE TRANSPORTATION ONLY)   -->
                </div>
              </div>
            </div>
          </div>

  

          <div class="row mt-5 ">
             <div class="col-12 col-lg-6">
               Child Name:  <br>
               <input value="<?php echo $_SESSION['child_Name']; ?>" readonly type="text" readonly  name="child_Name" class=" form-control" >
             </div>


             <div class="col-12 col-lg-6">
              Center:  <br>
                   <!-- <select name="center" class="form-control dummy_validation">
                        <option value=""></option>
                        <option value="CenterOne">center 1</option>
                        <option value="CenterTwo">center 2</option>
                      </select> -->


                      <select readonly name="center" class="form-control dummy_validation dummy_selectbox">
                          <option value="<?php echo $_SESSION['center'] ?>"><?php echo $_SESSION['center'] ?></option>
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

             <div class="col-12 col-lg-6">
              Parent name:  <br>
               <input type="text"  name="parent_name" class=" form-control" readonly  value="<?php echo $_SESSION['parent_name']; ?>">
             </div>


          </div>


          <div class="row mt-3">
            <div class="col-12 col-lg-12">
           
                

                <p>
                  
                  I give Beaufort-Jasper EOC Head Start permission to transport my child to the Center,  to the Responsible Receiver, home, on field trips, and any other away from the center activities/services. <br><br>
                   
                  I will be at the bus stop to put my child on the bus in the morning and to receive him/her from the bus in the afternoon. I understand I am responsible for giving a written and  signed notice to the bus driver prior to changing the following: 
                </p>


             
                <ul class="mt-5">
                  
                  <li> Responsible Receiver(s) </li>
                  <li> Pick-up/Drop-off point </li>
                  <li> Updates to Parent/Guardian contact information</li>
                </ul>


                <p>
                  I understand the responsible receiver must be an adult, have picture identification and know the family password/code. I agree to attend Safety Education Training session for parents within the first thirty days of school.
                </p>

                <p>
                  Pedestrian Safety <br> Bus Evacuation <br> Bus Safety
                </p>

                <p>
                  A Head Start Representative has explained to me the following penalties for not being at home or to the bus stop to receive my child: 
                </p>


                  



                <div class="row">
                  <div class="col-4 col-lg-2">
                    <b>1st Offense </b>
                  </div>
                  <div class=" col-8 col-lg-10">
                   A parent conference will be scheduled. 
                  </div>



                  <div class="col-4 col-lg-2  mt-3">
                    <b>2nd Offense </b>
                  </div>
                  <div class=" col-8 col-lg-10 mt-3">
                   A multi-team conference will be scheduled.(Family Service Department and Transportation Specialist) . 
                  </div>


                  <div class="col-4 col-lg-2 mt-3">
                    <b>3rd Offense </b>
                  </div>
                  <div class=" col-8 col-lg-10 mt-3">
                  The Sheriff or Police Department will be called to     Pick–up your child from the Central Office.                                                                    A child abuse and neglect report will be submitted to                                                                    the Child Protective Services at Department of Social Services. 
                  </div>


                </div>
             
      



            </div>
            
          </div>

        
          <div class="row mt-3">
            <div class="col-12 col-lg-6">
            Parent’s Name<br>
              <input type="text"  readonly name="parent_s_name" class=" form-control" value="<?php echo $_SESSION['parent_name']; ?>" >
            </div>
            <div class="col-12 col-lg-6">
             Date  <br>
              <input type="text" readonly  value="<?php echo $_SESSION['today']; ?>" name="parent_date" class=" form-control" >
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










 



  $(document).ready(function(){

    // ============= validation fucntoin========== 
 



    $("#submit").click(function(){
      var validate = validation();

      if(validate){

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



        //console.log(formData);

        $.ajax({
                url: "pdf/transportation-permission-form.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "responsibe-reciever-authorization-form-2019.php";
                  }else{
                      window.location.href = "responsibe-reciever-authorization-form-2019.php";
                  }
                }
            });
          
        //  parent-handbook-signoff

      }




    })


      


  })



    </script>


</body>
</html>
