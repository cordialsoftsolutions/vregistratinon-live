<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TRANSPORTATION AGREEMENT</title>
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
                  <h1> Transportation Agreement <br> 
                (Private Transportation Only)  </h1>
                </div>
              </div>
            </div>
          </div>



<!-- 
          <div class="row border-bottom  border-dark py-3">
            <div class="col-12 col-lg-12">
              <div class="header text-center">
               
                <h4>
               BEAUFORT JASPER EOC HEAD START   <br>       
                TRANSPORTATION AGREEMENT <br> 
                (PRIVATE TRANSPORTATION ONLY)  
                </h4>
              </div>
            </div>
            
          </div> -->

          <div class="row mt-5 ">
             <div class="col-12 col-lg-6">
               Child Name:  <br>
               <input value="<?php echo $_SESSION['child_Name']; ?>" readonly type="text"  name="child_Name" class=" form-control" >
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
               <input type="text" readonly name="parent_name" class=" readonly form-control" value="<?php echo $_SESSION['parent_name']; ?>">
             </div>



          </div>


          <div class="row mt-3">
            <div class="col-12 col-lg-12">
             <!-- Name of Physician:  <br>
              <input type="text"  name="physician_name" class=" form-control" > -->



              <span>
                <b>I will transport my child to <input type="text" style="    background-color: #e9ecef;
    opacity: 1;" name="transport" class="" readonly value="<?php echo $_SESSION['center'];?>"	 > Head Start Center on a daily basis  and I agree to the conditions stated below: </b>
              </span>


              <ul class="mt-3">
                <li>     Arrival time should be between 7:15 AM and 7:45 AM. </li>
                  <li> My child will be in regular attendance at the Center. </li>
                   <li> When my child will be absent, I will call the Center by 8:15 AM. </li>
                  <li> I understand that I or the authorized person must sign my child in and out each day upon his/her arrival to or departure from the center. </li>
                    <li> I will stop by the office, pick up a pass, and sign in before taking the child to his/her assigned class. </li>
                     <li> When arriving at the Center with my child and the teacher states he/she cannot receive the child because he/she appears to be ill, I will take my child back home without an argument.</li>
                      <li> I further understand that my child will not be released to anyone other than the person(s) who I have authorized in writing to receive my child. </li>



                <li class="mt-3">

                  <b> I or authorized responsible person will pick up my child each day by: </b><br>

                  2:30 at Beaufort  2:45 PM at Sandalwood                       <br> 2:30 PM at Davis (Pre-school & Early Head)  <br> 2:45 P.M. Leroy H. Gilliard                         <br> 2:45 PM for Robertville (EHS)       <br> 2:30 PM at Robertville (Pre-school)                            <br> 2:30 PM Ridgeland (Must pick child up in Car Riders Line)               <br> 2:30 PM Hardeeville (Must pick child up in Car Riders Line)  <br> 2:30 PM St. Helena EHS 
                    

                </li>

                <li class="mt-3">
                  <b>I will notify Head Start in writing of any changes such as:</b><br>

                  1. Change of address <!--and telephone number--> 
                  <br>2. Change of responsible receiver 
                  <br>3.   Medical condition         
                  <br>4.  Change of custody, restraining orders, etc.  
                </li>



              </ul>



            </div>
            
          </div>

          

          <div class="row mt-3 ">
             <div class="col-12">
              <b>I understand the following actions will be implemented if I am late to pick-up my child from his/her Center: </b>

              <ul>
                
                 <li>The Center staff will call the responsible receiver to pick the child up.  </li> 
                 <li> If the child is still at the Center 15 minutes after the designated time, the Center staff will call the Central Office and an Administrative staff may contact the Sheriff’s Department.   </li>
              </ul>
                
             </div>
          </div>

          <div class="row mt-3">
            <div class="col-12 col-lg-6">
            Parent’s Name<br>
              <input type="text" value="<?php echo $_SESSION['parent_name']; ?>" readonly  name="parent_name" class=" form-control" >
            </div>
            <div class="col-12 col-lg-6">
             Date  <br>
              <input type="text" value="<?php echo $_SESSION['today']; ?>"  readonly  name="parent_signature_date" class=" form-control" >
            </div>

            <!--<div class="col-12 col-lg-6">
             Signature Head Start Representative    <br>
              <input type="text"  name="head_name" class=" form-control" >
            </div>-->

            <!--<div class="col-12 col-lg-6">
            Date  <br>
              <input type="text" value="<?php echo $_SESSION['today']; ?>"  readonly  name="head_signature_date" class=" form-control" >
            </div>-->
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

    // ============= validation fucntoin========== 
 

    $("#submit").click(function(){
      var validate = validation();

      if(validate){

        
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



        console.log(formData);

        $.ajax({
                url: "pdf/transportation-agreement.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                   // window.location.href = "pdf-16.php";
                    window.location.href = "transportation-permission-form.php";
                  }else{
                    window.location.href = "transportation-permission-form.php";
                  }
                }
            });

          

      }




    })





  })



    </script>


</body>
</html>