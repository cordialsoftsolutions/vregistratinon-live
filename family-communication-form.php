<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Family communication form</title>
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
                    <h1 >Family Communication Form</h1>
                  </div>
                </div>
              </div>
            </div>

              <div class="row">
                <div class="col-12 col-lg-8">
                 
                </div>
                <div class="col-12 col-lg-4">
                  <!--<input type="date"  class="form-control" name="date">-->
                       <input id="today-date" required type="text"  onchange="handler(event)" placeholder="MM-DD-YY"  class="form-control input-field date bg-white"  name="today" value="" >
               
                </div>
              </div>

              <div class="row mt-3">

                <div class="col-lg-4 mb-2">
                  Child(s) First Name:<br>
                  <input type="text"  name="child_first_name" class=" form-control dummy_validation" placeholder="Child First Name">
                </div>

                <div class="col-lg-4 mb-2">
                  Child(s) Middle Name:<br>
                  <input type="text"  name="child_middle_name" class=" form-control " placeholder="Child Middle Name">
                </div>

                <div class="col-lg-4 mb-2">
                 Child(s) Last Name:<br>
                  <input type="text"  name="child_last_name" class=" form-control dummy_validation" placeholder="Child Last Name">
                </div>



                <div class="col-lg-4 mb-2">
                  Parent(s) First Name:<br>
                  <input type="text"  name="parent_first_name" class=" form-control dummy_validation dummy_parent_name"  placeholder="Parent First Name">
                </div>

                <div class="col-lg-4 mb-2">
                  Parent(s) Middle Name:<br>
                  <input type="text"  name="parent_middle_name" class=" form-control " placeholder="Parent Middle Name" >
                </div>

                <div class="col-lg-4 mb-2">
                  Parent(s) Last Name:<br>
                  <input type="text"  name="parent_last_name" class=" form-control dummy_validation dummy_parent_name"  placeholder="Parent Last Name" >
                </div>


               


               

               <div class="col-lg-4">
                  Primary Phone:<br>
                  <!--<input type="text"  name="mobile" class="form-control dummy_validation">-->
                  <input  class="phone-formate form-control dummy_validation" name="mobile" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
                </div>

                   <div class="col-lg-4">
                  Home Phone:<br>
                  <input  class="phone-formate form-control " name="home" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
              
                </div>

                <div class="col-lg-4">
                  Work Phone:<br>
                 <input  class="phone-formate form-control " name="work" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
              
                </div>


               


              <div class="col-lg-4 mb-2" style="padding-top:8px;">
                  Center: <br>

                  <!--HS-->

                  <?php 
                  if($_SESSION['childernFrom'] == "HS")
                  {
                     echo '<select name="center" class="form-control dummy_validation">
                       <option value=""></option>
                       <option value="Davis ELC"> Davis ELC </option>
                       <option value="Beaufort ELC"> Beaufort ELC </option>
                       <option value="Shanklin"> Shanklin </option>
                       <option value="St Helena ELC"> St Helena ELC </option>
                       <option value="Sandalwood"> Sandalwood </option>
                       <option value="Ridgeland HS"> Ridgeland HS </option>
                       <option value="Hardeeville HS"> Hardeeville HS </option>
                       </select>';
                     }
                     else{
                        echo '<select name="center" class="form-control dummy_validation">
                           <option value=""></option>
                           <option value="Davis ELC"> Davis ELC </option>
                           <option value="St Helena ELC"> St Helena ELC </option>
                           <option value="Shanklin"> Leroy Gilliard </option>
                           <option value="Robertville HS"> Robertville HS </option>
                        </select>';
                    }
                     ?>

                </div>



                        




                  
              </div>

              <div class="row mt-3">
                <div class="col-lg-12">
                  <p>
                      <b>Text Messaging Consent</b>
                      <br> There may be times throughout the year that Head Start would like to send a brief text message to parents (i.e. event reminders, center
                      information, family service information, etc.). Since text messaging is not free; parents who want to receive texts must complete the
                      information below giving permission.
                  </p>
                  
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-1" class="custom-control-input dummy_MessageCheckBox" id="customControlAutosizing">
                      <label class="custom-control-label" for="customControlAutosizing">Yes, I want to receive text messages from my child's Head Start center to the mobile number indicated above.</label>
                    </div>
                  </div>
                </div>


                <div class="col-lg-12">
                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" name="checkbox-2" class="custom-control-input dummy_MessageCheckBox" id="customControlAutosizing-2">
                      <label class="custom-control-label" for="customControlAutosizing-2">No, I do not want to receive text messages at this time.</label>
                    </div>
                  </div>
                </div>



              </div>

         <div class="row mt-3">

                <div class="col-lg-6">
                   <div class="row mt-2">
                    <div class="col-12">Address:</div>
                    <div class="col-12">
                      <input type="text" name="address" class="form-control dummy_validation">
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-12">City:</div>
                    <div class="col-12">
                      <input type="text" name="city" class="form-control dummy_validation">
                    </div>
                  </div>


                  <div class="row mt-2">
                    <div class="col-12">State:</div>
                    <div class="col-12">
                      <!--<input type="text" name="state" class="form-control dummy_validation">-->
                      <select name="p_state" class="form-control dummy_validation" disabled>
                          <option value=""></option>
                          <option value="AL">Alabama (AL)</option>
                          <option value="AK">Alaska (AK)</option>
                          <option value="AZ">Arizona (AZ)</option>
                          <option value="AR">Arkansas (AR)</option>
                          <option value="CA">California (CA)</option>
                          <option value="CO">Colorado (CO)</option>
                          <option value="CT">Connecticut (CT)</option>
                          <option value="DE">Delaware (DE)</option>
                          <option value="DC">District Of Columbia (DC)</option>
                          <option value="FL">Florida (FL)</option>
                          <option value="GA">Georgia (GA)</option>
                          <option value="HI">Hawaii (HI)</option>
                          <option value="ID">Idaho (ID)</option>
                          <option value="IL">Illinois (IL)</option>
                          <option value="IN">Indiana (IN)</option>
                          <option value="IA">Iowa (IA)</option>
                          <option value="KS">Kansas (KS)</option>
                          <option value="KY">Kentucky (KY)</option>
                          <option value="LA">Louisiana (LA)</option>
                          <option value="ME">Maine (ME)</option>
                          <option value="MD">Maryland (MD)</option>
                          <option value="MA">Massachusetts (MA)</option>
                          <option value="MI">Michigan (MI)</option>
                          <option value="MN">Minnesota (MN)</option>
                          <option value="MS">Mississippi (MS)</option>
                          <option value="MO">Missouri (MO)</option>
                          <option value="MT">Montana (MT)</option>
                          <option value="NE">Nebraska (NE)</option>
                          <option value="NV">Nevada (NV)</option>
                          <option value="NH">New Hampshire (NH)</option>
                          <option value="NJ">New Jersey (NJ)</option>
                          <option value="NM">New Mexico (NM)</option>
                          <option value="NY">New York (NY)</option>
                          <option value="NC">North Carolina (NC)</option>
                          <option value="ND">North Dakota (ND)</option>
                          <option value="OH">Ohio (OH)</option>
                          <option value="OK">Oklahoma (OK)</option>
                          <option value="OR">Oregon (OR)</option>
                          <option value="PA">Pennsylvania (PA)</option>
                          <option value="RI">Rhode Island (RI)</option>
                          <option value="SC" selected >South Carolina (SC)</option>
                          <option value="SD">South Dakota (SD)</option>
                          <option value="TN">Tennessee (TN)</option>
                          <option value="TX">Texas (TX)</option>
                          <option value="UT">Utah (UT)</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WA">Washington</option>
                          <option value="WV">West Virginia</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                      </select>
                    </div>
                  </div>

                 <div class="row mt-2">
                    <div class="col-12">Zip Code:</div>
                    <div class="col-12">
                      <input type="text" name="zipcode" maxlength="10" class="form-control dummy_validation" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    </div>
                  </div>




                </div>


                <div class="col-lg-6">
                   <div class="row mt-2">
                    <div class="col-12">Email Address:</div>
                    <div class="col-12">
                      <input type="text" name="email-address" class="form-control dummy_email_validation">
                    </div>
                  </div>

                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox"  name="checkbox-3" class="custom-control-input" id="customControlAutosizing-3">
                      <label class="custom-control-label" for="customControlAutosizing-3">Yes, I want to receive emails from my child's Head Start center. I have provided the email address above.</label>
                    </div>
                  </div>

                </div>


           </div>

         <div class="row mt-5">
               <div class="col-12">
                   <div class="text-center">
                       <h5>Emergency Contact Information:</h5>
                   </div>
               </div>


                <br>
                <br>


                <div class="col-12 col-lg-4">
                     <div class="row mt-2">
                      <div class="col-12">Name:</div>
                      <div class="col-12">
                        <input type="text" name="name_1" class="form-control">
                      </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                      <div class="row mt-2">
                       <div class="col-12">Relationship:</div>
                       <div class="col-12">
                         <input type="text" name="relation_1" class="form-control">
                       </div>
                     </div>
                </div>


                <div class="col-12 col-lg-4">
                      <div class="row mt-2">
                       <div class="col-12">Phone #:</div>
                       <div class="col-12">
                         <!--<input type="text" name="phone_1" class="form-control">-->
                            <input  class="phone-formate form-control" name="phone_1" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX" />
                       </div>
                     </div>
                </div>


                <div class="col-12 col-lg-4">
                     <div class="row mt-2">
                      <div class="col-12">Name:</div>
                      <div class="col-12">
                        <input type="text" name="name_2" class="form-control">
                      </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                      <div class="row mt-2">
                       <div class="col-12">Relationship:</div>
                       <div class="col-12">
                         <input type="text" name="relation_2" class="form-control">
                       </div>
                     </div>
                </div>


                <div class="col-12 col-lg-4">
                      <div class="row mt-2">
                       <div class="col-12">Phone #:</div>
                       <div class="col-12">
                         <!--<input type="text" name="phone_2" class="form-control">-->
                            <input  class="phone-formate form-control" name="phone_2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX" />
                       </div>
                     </div>
                </div>

                <div class="col-12 col-lg-4">
                     <div class="row mt-2">
                      <div class="col-12">Name:</div>
                      <div class="col-12">
                        <input type="text" name="name_3" class="form-control">
                      </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                      <div class="row mt-2">
                       <div class="col-12">Relationship:</div>
                       <div class="col-12">
                         <input type="text" name="relation_3" class="form-control">
                       </div>
                     </div>
                </div>


                <div class="col-12 col-lg-4">
                      <div class="row mt-2">
                       <div class="col-12">Phone #:</div>
                       <div class="col-12">
                         <!--<input type="text" name="phone_3" class="form-control">-->
                           <input  class="phone-formate form-control" name="phone_3" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX" />
                       </div>
                     </div>
                </div>

          

               	<div class="col-12 col-lg-12 mt-5">
						<div class="custom-control custom-checkbox mb-3">
					      <input type="checkbox" class="custom-control-input" id="customCheckID" name="checkbox-4">
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

         <div class="row col-12 col-lg-12 mt-5">
              <div class="text-right col-lg-12" style="padding-bottom:10px">
                  <span style="color:red"><b>Please do not click the BACK button on your browser.</b></span>
               </div>
                  <div class="text-right col-lg-12">
                   
                 <button  id="submit" value="submit" name="submit" class="button input-btn">Next</button>
                  
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





    $(document).ready(function () {

          $('.dummy_MessageCheckBox').click(function() {
           $('.dummy_MessageCheckBox').not(this).prop('checked', false);
        });


     var date = new Date();
      date.setDate(date.getDate());
      var today_date =   ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date.getDate()).slice(-2) + '-' + date.getFullYear();

      $('#today-date').datepicker({ 
           dateFormat: 'mm-dd-yy',
           maxDate: new Date(today_date),
           minDate: new Date(today_date)

      }).datepicker("setDate", new Date());




        //mobile validation

        //end mobile valdiation

   



 $("#submit").click(function () {



     var validate = validation();

     debugger;
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
                url: "pdf/family-communication-form.php",
                type: "post",
                data: formData,
            success: function (response) {
        
                  if(response == 'ok'){
                  //  window.location.href = "pdf-2.php";
                    window.location.href = "policy-agreement.php";
                  }else{
                    //alert("something wrong");
                      window.location.href = "policy-agreement.php";
                  }
                }
            });
        }

      else {
          // if ($("#AppliactinoStartCustomCheckID").prop("checked") == true) {
                 $(validate).addClass('border');
                 $(validate).focus();

                setTimeout(function () {
                    $(validate).removeClass('border')
                }, 3000);
         // }

              
        }
    })
  })

  



    
$("#customCheckID").click(function () {

    var getParentName = "";

    var fields = $(".dummy_parent_name");
    for (var i = 0; i < fields.length; i++) {
        var name = $(fields[i]).attr('name');

        if (name == "parent_first_name" || name == "parent_last_name") {
            getParentName += $(fields[i]).val() + " ";
        }
    }


    if ($(this).prop("checked") == true) {
        $("#confirm-check-1").removeClass("required");
        $(".signature-cls").show();
        $("#lblParentName").html(getParentName);

    }
    else {
        $(".signature-cls").hide();

    }
})
    
  


    
    </script>


</body>
</html>