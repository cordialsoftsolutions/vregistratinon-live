<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Verification of Responsible Receiver</title>
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
  
          <div class="row  py-3">
            <div class="col-12 col-lg-12 ">


              <div class="title">
                <div class="row">
                  <div class="col-12 col-lg-2 text-center text-lg-left">
                    <img src="img/index-logo.png" alt="" width="80">
                  </div>
                  <div class="col-12 col-lg-10 text-center">
                    <div class="content">
                      <h1 class="font_bold">Beaufort Jasper EOC Head Start</h1>
                      <h1>Verification of Responsible Receiver  </h1>
                    </div>
                  </div>
                </div>
              </div>
             
              <!-- <div class="header text-center border-bottom  border-dark">
                
                <p>
              Beaufort- Jasper EOC Head Start 
                </p>
               <h3>
                 VERIFICATION OF RESPONSIBLE RECEIVER 
               </h3>
              </div>
 -->


            </div>


            <div class="col-12 col-lg-12 ">
              <div class="header text-center border-bottom  border-dark">
                <p>
                  ACCORDING TO THE BJEOC HEAD START POLICY, CHILD MUST BE RELEASED TO ONLY INDIVIDUALS AUTHORIZED TO PICK THEM UP. ONLY PERSONS LISTED BELOW WILL BE PERMITTED
TO PICK UP YOUR CHILD. ALL PERSONS MUST HAVE AND SHOW THEIR PICTURE ID. MAKE SURE YOU LIST ALL ADULTS EVEN IF YOU RESIDE IN THE SAME HOUSEHOLD.  PERSONS MUST BE 18 YEARS OR OLDER 
                </p>
              </div>
            </div>
            
          </div>

          <div class="row">
            <div class="col-12">
              <h4>
                THE FOLLOWING ADULTS ARE AUTHORIZED TO PICK UP MY CHILD FROM SCHOOL 
              </h4>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-lg-8">
               <label for="">1. Parent/Guardian Name</label>
               <input  type="text" name="parent_name_1" class="form-control" readonly value="<?php echo $_SESSION['parent_name']; ?>" >
            </div>
            <div class="col-12 col-lg-4"></div>

            <div class="col-12 col-lg-4 mt-2">
              Mobile Number <br>
        
                  <input  class="phone-formate form-control " name="call_phone_1" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
    
            </div>


            <div class="col-12 col-lg-4 mt-2">
              Work Phone <br>
             
                   <input  class="phone-formate form-control " name="work_phone_1" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
    
            </div>

            <div class="col-12 col-lg-4 mt-2">
              Home Phone <br>
     
                   <input  class="phone-formate form-control " name="home_phone_1" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
    
            </div>


            <div class="col-12 col-lg-4 mt-2">
             Address <br>
              <input type="text" name="address_1" class="form-control">
            </div>

            <div class="col-12 col-lg-3 mt-2">
             City <br>
              <input type="text" name="city_1" class="form-control">
            </div>

            <div class="col-12 col-lg-3 mt-2">
             State <br>
              <!-- <input type="text" name="state_1" class="form-control"> -->
              
              <select name="state_1" class="form-control ">
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
                  <option value="SC">South Carolina (SC)</option>
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

            <div class="col-12 col-lg-2 mt-2">
             Zip <br>
              <input type="text" name="zip_1" class="form-control">
            </div>

          </div>

          <div class="row mt-4">
            <div class="col-12 col-lg-8">
               <label for="">2. Parent/Guardian Name</label>
               <input type="text" name="parent_name_2" class="form-control" >
            </div>
            <div class="col-12 col-lg-4"></div>

            <div class="col-12 col-lg-4 mt-2">
              Mobile Number <br>
             
                       <input  class="phone-formate form-control " name="call_phone_2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
    
            </div>


            <div class="col-12 col-lg-4 mt-2">
              Work Phone <br>
           
                      <input  class="phone-formate form-control " name="work_phone_2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
    
            </div>

            <div class="col-12 col-lg-4 mt-2">
              Home Phone <br>
              
            <input  class="phone-formate form-control " name="home_phone_2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
    
            </div>


            <div class="col-12 col-lg-4 mt-2">
             Address <br>
              <input type="text" name="address_2" class="form-control">
            </div>

            <div class="col-12 col-lg-3 mt-2">
             City <br>
              <input type="text" name="city_2" class="form-control">
            </div>

            <div class="col-12 col-lg-3 mt-2">
             State <br>
              <!-- <input type="text" name="state_2" class="form-control"> -->
              <select name="state_2" class="form-control ">
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
                  <option value="SC">South Carolina (SC)</option>
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

            <div class="col-12 col-lg-2 mt-2">
             Zip <br>
              <input type="text" name="zip_2" class="form-control">
            </div>


          </div>


          <div class="row mt-5">
            <div class="col-12">
              <h3>PERSON(S) OTHER THAN PARENT/GUARDIAN AUTHORIZED TO PICK UP CHILD</h3>
            </div>

            <div class="col-12 mt-4 table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name of Authorized Person</th>
                    <th scope="col">Phone (Cell/Home/Work)</th>
                    <th scope="col">Relationship to Child</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="form-control" name="tbl-r-1-1"></td>
                    <td>
                       <input  class="phone-formate form-control " name="tbl-r-1-2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
    </td>
                    <td><input type="text" class="form-control" name="tbl-r-1-3"></td>
                  </tr>

                  <tr>
                    <td><input type="text" class="form-control" name="tbl-r-2-1"></td>
                    <td>
                         <input  class="phone-formate form-control " name="tbl-r-2-2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
   
                      </td>
                    <td><input type="text" class="form-control" name="tbl-r-2-3"></td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control" name="tbl-r-3-1"></td>
                    <td>
                        <input  class="phone-formate form-control " name="tbl-r-3-2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
   
                      </td>
                    <td><input type="text" class="form-control" name="tbl-r-3-3"></td>
                  </tr>

                  <tr>
                    <td><input type="text" class="form-control" name="tbl-r-4-1"></td>
                    <td>
                       <input  class="phone-formate form-control " name="tbl-r-4-2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
   
                      </td>
                    <td><input type="text" class="form-control" name="tbl-r-4-3"></td>
                  </tr>

                  <tr>
                    <td><input type="text" class="form-control" name="tbl-r-5-1"></td>
                    <td>                    
                        <input  class="phone-formate form-control " name="tbl-r-5-2" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
   
                      </td>
                    <td><input type="text" class="form-control" name="tbl-r-5-3"></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>


          <div class="row mt-3">
           <!--  <div class="col-12 col-lg-6 ">
              Child Name:  <br>
              <input value="<?php echo $_SESSION['child_name']; ?>" type="text"  name="child_name" class=" form-control" >
            </div> -->


            <div class="col-12 col-lg-6 ">
              Family code word(S) <br>
              <input type="text"  name="famlily_code" class=" form-control" >
            </div>
          





           <div class="col-12">
             <p>
               I authorize BJEOC Head Start to release my child to any person listed above. I understand all “Authorized Pick-Up Person” must be at least 18 years old, will be asked to provide photo ID, and the family code word(s).  I agree that this authorization shall remain valid for the duration of my child’s enrollment in Head Start until changed in writing by completing the required form, in person, at my child’s Head Start Center. 
             </p>
           </div>

           
        </div>
          

        





          <div class="row mt-5">

            <div class="col-12 col-lg-12 ">
              Name of Child(ren)<br>
              <input value="<?php echo $_SESSION['child_Name']; ?>" type="text"  name="child_Name" readonly class=" form-control input-field-one" >
            </div>

             <div class="col-12 col-lg-6 ">
               Parent/Guardian Name:  <br>
               <input value="<?php echo $_SESSION['parent_name']; ?>" type="text"  readonly name="parent_signature" class=" form-control input-field-one" >
             </div>

             <div class="col-12 col-lg-6">
               Date:  <br>
               <input type="text"  name="date" class=" form-control input-field-one" value="<?php echo $_SESSION['today'];?>" readonly>
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
      var formData = {};



    $("#submit").click(function(){
        var validate = validation();
        
      if(validate == true){

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
          debugger;

        $.ajax({
                url: "pdf/responsibe-reciever-authorization-form-2019.php",
                type: "post",
                data: formData,
                success: function (response) {
                  if(response == 'ok'){
                    window.location.href = "parent-handbook-signoff.php";
                  }else{
                   window.location.href = "parent-handbook-signoff.php";
                  }
                }
            });



      }   else {
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