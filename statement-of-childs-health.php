<?php 
session_start();

// var_dump($_SESSION);
// exit;

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Statement of Child's Health</title>
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
            <div class="col-12 col-lg-12">
              <div class="header text-center border-bottom  border-dark">
                  <h1 class="font_bold">South Carolina Department of Social Services <br> Child Care Regulatory Services </h1> 
                  <h1> General Record and Statement of Child's Health for Admission to Child Care Facility </h1>
              </div>
            </div>
          </div>

          

          <div class="row mt-3">
              <div class="col-12">
                <p>
                  This form is to be completed for each child at the time of enrollment in the child care facility, updated as needed when changes occur, and maintained on file at the facility
                </p>
              </div>
          </div>

          <div class="row mt-3">
            <div class="col-12">
              GENERAL INFORMATION: (to be completed by Parent or Guardian)
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-12 col-lg-6">
              Name of Facility:
              <input type="text" class="form-control" value="<?php echo $_SESSION['center'] ?>" readonly  id="nameOfFacilityId">
            </div>
            <div class="col-12 col-lg-6">
             County:
                <input type="text" class="form-control" style="display:none"  id="countryId">
                <select name="center" class="form-control" id="centerId">
                       <option value="Beaufort">Beaufort</option>
                      <option value="Jasper">Jasper</option>
                      </select>

            </div>





               <?php 
                $city_state_zip = $_SESSION['city'].', '.$_SESSION['state'].', '.$_SESSION['zipcode'];
              ?>


            <div class="col-12 col-lg-6 mt-2">
              Address:
              <!--Address(Street Address - no Post Office Boxes):-->
              <input type="text" class="form-control"  value="<?php echo $_SESSION['address'] ?>" readonly id="nameOfFacilityAddressId">
            </div>
            <div class="col-12 col-lg-6 mt-2">
            City, State, Zip Code:
              <input  type="text" class="form-control"  value="<?php echo $city_state_zip?>" readonly id="nameOfFacilityCityStateZipCodeId">
            </div>

            <div class="col-12 col-lg-3 mt-2">
              Child Name:  <br>
              <input type="text" class="form-control"  placeholder="Last Name" readonly value="<?php echo $_SESSION['child_last_name'] ?>">
            </div>

            <div class="col-12 col-lg-3 mt-2">
              <span style="opacity: 0">-</span> <br>
              <input type="text" class="form-control" placeholder="First Name"  readonly value="<?php echo $_SESSION['child_first_name'] ?>">
            </div>

            <div class="col-12 col-lg-3 mt-2">
              <span style="opacity: 0">-</span> <br>
              <input type="text" class="form-control" placeholder="Middle Initial"  readonly value="<?php echo $_SESSION['child_middle_name'] ?>">
            </div>

            <div class="col-12 col-lg-3 mt-2">
              <span style="opacity: 0">-</span> <br>
              <input type="text" class="form-control" placeholder="Nick Name">
            </div>


            <!--<div class="col-12 col-lg-6 mt-2">
              Date of Birth:  <br>
              <input type="text" class="form-control" >
            </div>-->


            <div class="col-12 col-lg-6 mt-2">
               Date of birth <br>
              <input type="text" name="input-5" class="form-control data-of-birth" readonly value="<?php  echo $_SESSION['date_of_birth'] ?>">
              <!-- <input type="text" name="input-5" class="form-control " readonly value="<?php  echo $_SESSION['date_of_birth'] ?>"> -->
            </div>


            <div class="col-12 col-lg-6 mt-2">
              Enrollment Date:  <br>
              <input type="text" class="form-control data-of-birth" readonly>
            </div>


            <div class="col-12 col-lg-6 mt-2">
              Child's Current Home Address
              <!--Child's Current Home Address(Street Address )-->
              <input readonly type="text" class="form-control" value="<?php echo $_SESSION['address'] ?>">
            </div>


            <div class="col-12 col-lg-6 mt-2">
              
             
               City, State, Zip Code:
              <input readonly type="text" class="form-control" value="<?php echo $city_state_zip; ?>">
            </div>


            <div class="col-12 col-lg-12 mt-2">
               Parent/Guardian's Full Name 
              <input type="text" class="form-control" value="<?php echo $_SESSION['parent_name'] ?>" readonly >
            </div>

         

            <div class="col-12 col-lg-4 mt-2">
               Primary Phone
             <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  value="<?php echo $_SESSION['mobile'] ?>" />
            </div>

                 <div class="col-12 col-lg-4 mt-2">
               Home Phone 
             
                 <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"   value="<?php echo $_SESSION['home'] ?>"/>
    
            </div>

            <div class="col-12 col-lg-4 mt-2">
              Work Phone
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"   value="<?php echo $_SESSION['work'] ?>" />
            </div>

            <div class="col-12 col-lg-12 mt-2">
               Parent/Guardian's Full Name 
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-4 mt-2">
               Home Phone 
            <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 col-lg-4 mt-2">
               Primary Phone
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 col-lg-4 mt-2">
              Work Phone
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            
            <div class="col-12 my-3 mt-5">
              You must have two individuals who have the authority to obtain emergency medical treatment for the child.
            </div>
             
            <div class="col-12 mt-2">
              
                1. Person responsible if parent/guardian unavailable for emergency medical services:
              
            </div>

            <div class="col-12 col-lg-6 mt-1">
              <input type="text" class="form-control" placeholder="Full Name">
            </div>

            <div class="col-12 col-lg-6 mt-1">
              <input type="text" class="form-control" placeholder="Relationship">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Address(Street Address) :
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
            City, State, Zip Code:
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Telephone Number(s) :
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Family Code Word(s):
              <input type="text" class="form-control">
            </div>




            <div class="col-12 mt-3">
              
               2. Person responsible if parent/guardian unavailable for emergency medical services:
              
            </div>

            <div class="col-12 col-lg-6 mt-1">
              <input type="text" class="form-control" placeholder="Full Name">
            </div>

            <div class="col-12 col-lg-6 mt-1">
              <input type="text" class="form-control" placeholder="Relationship">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Address(Street Address) :
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              City, State, Zip Code:
              <input type="text" class="form-control">
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Telephone Number(s) :
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 col-lg-6 mt-2">
              Family Code Word(s):
              <input type="text" class="form-control">
            </div>

          </div>




          <div class="row mt-4">


              <div class="col-12">
                <div class="my-1" style="display: inline-block;">
                   <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                     <input style="display: inline-block;" type="checkbox" name="checkbox-1" class="custom-control-input" id="checkbox-1">
                     <label style="display: inline-block;" class="custom-control-label" for="checkbox-1"> Yes / No  &nbsp; &nbsp; &nbsp;Is Child currently enrolled in school? (5K up to 6 years old)</label>
                   </div>
                 </div>
              </div>

              <div class="col-12 mt-2">
                My Child will regularly attend this facility FROM <input type="text" value="7 am"> am/pm TO <input type="text" value="2:45 pm"> am/pm 
              </div>

              <div class="col-12 mt-3">
                If Child is a drop-in, indicate hours of care: FROM <input type="text" > am/pm TO <input type="text"> am/pm 
              </div>

              <div class="col-12 mt-3">
                Check all days Child will regularly attend this facility: &nbsp; &nbsp;

                <div class="my-1" style="display: inline-block;">
                   <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                     <input style="display: inline-block;" type="checkbox" name="checkbox-2" class="custom-control-input" id="checkbox-2" onclick="return false;" checked>
                     <label style="display: inline-block;" class="custom-control-label" for="checkbox-2"> Mon  </label>
                   </div>
                 </div>

                 &nbsp; &nbsp; 
                 <div class="my-1" style="display: inline-block;">
                    <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                      <input style="display: inline-block;" type="checkbox" name="checkbox-3" class="custom-control-input" id="checkbox-3"  onclick="return false;" checked>
                      <label style="display: inline-block;" class="custom-control-label" for="checkbox-3" > Tue  </label>
                    </div>
                  </div>

                  &nbsp; &nbsp; 
                  <div class="my-1" style="display: inline-block;">
                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                       <input style="display: inline-block;" type="checkbox" name="checkbox-4" class="custom-control-input" id="checkbox-4" onclick="return false;" checked>
                       <label style="display: inline-block;" class="custom-control-label" for="checkbox-4"> Wed   </label>
                     </div>
                   </div>

                   &nbsp; &nbsp; 
                   <div class="my-1" style="display: inline-block;">
                      <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                        <input style="display: inline-block;" type="checkbox" name="checkbox-5" class="custom-control-input" id="checkbox-5" onclick="return false;" checked>
                        <label style="display: inline-block;" class="custom-control-label" for="checkbox-5"> Thurs   </label>
                      </div>
                    </div>

                    &nbsp; &nbsp; 
                    <div class="my-1" style="display: inline-block;">
                       <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                         <input style="display: inline-block;" type="checkbox" name="checkbox-6" class="custom-control-input" id="checkbox-6" onclick="return false;" checked>
                         <label style="display: inline-block;" class="custom-control-label" for="checkbox-6"> Fri   </label>
                       </div>
                     </div>

                     &nbsp; &nbsp; 
                     <div class="my-1" style="display: inline-block;">
                        <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                          <input style="display: inline-block;" type="checkbox" name="checkbox-7" class="custom-control-input" id="checkbox-7">
                          <label style="display: inline-block;" class="custom-control-label" for="checkbox-7"> Sat   </label>
                        </div>
                      </div>

                      &nbsp; &nbsp; 
                      <div class="my-1" style="display: inline-block;">
                         <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                           <input style="display: inline-block;" type="checkbox" name="checkbox-8" class="custom-control-input" id="checkbox-8">
                           <label style="display: inline-block;" class="custom-control-label" for="checkbox-8"> Sun   </label>
                         </div>
                       </div>


              </div>


              <div class="col-12 mt-3">
                Check all meals Child will receive daily: &nbsp; &nbsp;

                <div class="my-1" style="display: inline-block;">
                   <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                     <input style="display: inline-block;" type="checkbox" name="checkbox-9" class="custom-control-input" id="checkbox-9">
                     <label style="display: inline-block;" class="custom-control-label" for="checkbox-9">  Meals are not offered   </label>
                   </div>
                 </div>

                 &nbsp; &nbsp; 
                 <div class="my-1" style="display: inline-block;">
                    <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                      <input style="display: inline-block;" type="checkbox" name="checkbox-10" class="custom-control-input" id="checkbox-10" onclick="return false;" checked>
                      <label style="display: inline-block;" class="custom-control-label" for="checkbox-10"> Breakfast   </label>
                    </div>
                  </div>

                  &nbsp; &nbsp; 
                  <div class="my-1" style="display: inline-block;">
                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                       <input style="display: inline-block;" type="checkbox" name="checkbox-11" class="custom-control-input" id="checkbox-11" onclick="return false;" checked>
                       <label style="display: inline-block;" class="custom-control-label" for="checkbox-11">  Morning Snack    </label>
                     </div>
                   </div>

                   &nbsp; &nbsp; 
                   <div class="my-1" style="display: inline-block;">
                      <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                        <input style="display: inline-block;" type="checkbox" name="checkbox-12" class="custom-control-input" id="checkbox-12" onclick="return false;" checked>
                        <label style="display: inline-block;" class="custom-control-label" for="checkbox-12">  Lunch    </label>
                      </div>
                    </div>

                    &nbsp; &nbsp; 
                    <div class="my-1" style="display: inline-block;">
                       <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                         <input style="display: inline-block;" type="checkbox" name="checkbox-13" class="custom-control-input" id="checkbox-13" onclick="return false;" checked>
                         <label style="display: inline-block;" class="custom-control-label" for="checkbox-13"> Afternoon Snack    </label>
                       </div>
                     </div>

                     &nbsp; &nbsp; 
                     <div class="my-1" style="display: inline-block;">
                        <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                          <input style="display: inline-block;" type="checkbox" name="checkbox-14" class="custom-control-input" id="checkbox-14">
                          <label style="display: inline-block;" class="custom-control-label" for="checkbox-14"> Dinner    </label>
                        </div>
                      </div>

                      &nbsp; &nbsp; 
                      <div class="my-1" style="display: inline-block;">
                         <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                           <input style="display: inline-block;" type="checkbox" name="checkbox-15" class="custom-control-input" id="checkbox-15">
                           <label style="display: inline-block;" class="custom-control-label" for="checkbox-15"> Evening Snack    </label>
                         </div>
                       </div>


              </div>
              
          </div>

          <div class="row mt-5">
            <div class="col-12">
              HEALTH INFORMATION: (to be completed by Parent or Guardian)
            </div>

            <div class="col-12 mt-2">
              Family Physician or Health Resource
              <input type="text" class="form-control" placeholder="Full Name">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              Street Address
              <input type="text" class="form-control">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              City, State, Zip Code:
              <input type="text" class="form-control">
            </div>            

            <div class="col-12 mt-2 col-lg-4">
              Telephone 
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>


            <div class="col-12 mt-4">
              Emergency Care Provider
              <!--<input type="text" class="form-control" placeholder="Full Name">-->

                 <input value="Full Name" type="text" class="form-control" style="display:none"  id="EmergencyCareProviderInputId">
                <select name="center" class="form-control" id="EmergencyCareProviderSelectedId">
                      <option value=""></option>  
                      <option value="Naval Hospital Beaufort">Naval Hospital Beaufort</option>
                      <option value="Beaufort Memorial Hospital">Beaufort Memorial Hospital</option>
                      <option value="Coastal Carolina Hospital">Coastal Carolina Hospital</option>
                      <option value="Hilton Head Hospital">Hilton Head Hospital</option>
                      <option value="MUSC">MUSC</option>
                      <option value="Memorial Health University Medical Center">Memorial Health University Medical Center</option>
                      <option value="Candler Hospital">Candler Hospital</option>
                      <option value="Coastal Carolina Hospital">Coastal Carolina Hospital</option>

                 </select>


            </div>

            <div class="col-12 mt-2 col-lg-4">
              Street Address
              <input type="text" class="form-control" id="emergencyStreetAddress" readonly>
            </div>

            <div class="col-12 mt-2 col-lg-4">
             City, State, Zip Code:
              <input type="text" class="form-control" id="emergencyCityStateZipCode" readonly>
            </div>            

            <div class="col-12 mt-2 col-lg-4">
              Telephone 
             <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  id="emergencyTelepphone" readonly/>
            </div>

            <div class="col-12 mt-4">
              Dental Care Provider: 
              <input type="text" class="form-control" placeholder="Full Name">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              Street Address
              <input type="text" class="form-control">
            </div>

            <div class="col-12 mt-2 col-lg-4">
              City, State, Zip Code:
              <input type="text" class="form-control">
            </div>            

            <div class="col-12 mt-2 col-lg-4">
              Telephone 
              <input  class="phone-formate form-control " type="text" maxlength="14" placeholder="(XXX) XXX-XXXX"  />
            </div>

            <div class="col-12 mt-4">
              Health Insurance Provider: 
              <input type="text" class="form-control" placeholder="Full Name">
            </div>



            <div class="col-12 mt-4 col-lg-6">
              Certifcate of immunzation: 
              &nbsp; &nbsp; 
              <div class="my-1" style="display: inline-block;">
                 <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                   <input style="display: inline-block;" type="checkbox" name="checkbox-16" class="custom-control-input" id="checkbox-16" onclick="return false;" checked>
                   <label style="display: inline-block;" class="custom-control-label" for="checkbox-16"> Yes / No   </label>
                 </div>
               </div>

               

                &nbsp; &nbsp; 
                <div class="my-1" style="display: inline-block;">
                   <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                     <input style="display: inline-block;" type="checkbox" name="checkbox-18" class="custom-control-input" id="checkbox-18" onclick="return false;">
                     <label style="display: inline-block;" class="custom-control-label" for="checkbox-18"> N/A    </label>
                   </div>
                 </div>

            </div>
            
            <div class="col-12 col-lg-6 mt-4">
              <input type="text" class="form-control" placeholder="Please Explain">
            </div>

          </div>

          <div class="row mt-5">
            <div class="col-12">
              My child has the following health conditions such as allergies, asthma, diabetes, epliepsy, etc. and
or take the following medications on a regular basis.
            </div>

              
            <div class="col-12 mt-4">
              Additional Comments
              <input type="text" class="form-control">
            </div>

            <div class="col-12 mt-4">
              I certify to the best of my knowledge:
              <input type="text" class="form-control" placeholder="Child's name" value="<?php echo $_SESSION['child_Name'] ?>" readonly>
            </div>


            <div class="col-12 mt-4">
              is in good mental and physical health and able to participate in the child care program at:
              <input type="text" class="form-control" placeholder="Name of the child care facility" value="<?php echo $_SESSION['center'] ?>" readonly>
            </div>

          </div>



          <div class="row mt-5">
              <div class="col-12 col-lg-6">
                  Parent Name:
                <input name="parent_name" readonly value="<?php echo $_SESSION['parent_name'];?>" type="text" class="form-control" placeholder="Parent or guardian">
              </div>
              <div class="col-12 col-lg-6">
                Date:
                <input readonly value="<?php echo $_SESSION['today'];?>"type="text" class="form-control" placeholder="Parent or guardian">
              </div>



          </div>



         <div class="row mt-5">
      
            <div class="col-12 col-lg-10 mt-5 ">
              <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input " id="StatementCustomCheckID">
                  <label id="confirm-check-1" class="custom-control-label" for="StatementCustomCheckID">I confirm that I have read and understand this form. By checking this box, I am electronically signing this form.</label>
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


    // set name 


   var text =  $("input[type=text]");

   for(var i = 0; i<text.length; i++){
      $(text[i]).attr('name','field-'+(i+1));
   }



      $("#centerId").change(function () {
         
        $('#countryId').val($("#centerId").val());
      });


     

      var getNameOfFacilitySelectedITem = $("#nameOfFacilityId").val();

      if (getNameOfFacilitySelectedITem == "Davis ELC") {
          $("#nameOfFacilityAddressId").val('364 Keans Neck Rd');
          $("#nameOfFacilityCityStateZipCodeId").val('Seabrook, SC 29940');
        //  $("#nameOfFacilityPhoneId").val('(843) 466-3600');       
      }
      if (getNameOfFacilitySelectedITem == "Beaufort ELC") {
          
        $("#nameOfFacilityAddressId").val('1800 Prince St');
        $("#nameOfFacilityCityStateZipCodeId").val('Beaufort, SC 29902');
      //  $("#nameOfFacilityPhoneId").val('(843) 322-2600'); 

      }
      if (getNameOfFacilitySelectedITem == "Shanklin") {
          $("#nameOfFacilityAddressId").val('121 Morrall Dr');
          $("#nameOfFacilityCityStateZipCodeId").val('Beaufort, SC 29906');
         // $("#nameOfFacilityPhoneId").val('(843) 466-3400'); 
      }
      if (getNameOfFacilitySelectedITem == "Leroy Gilliard") {
          $("#nameOfFacilityAddressId").val('1410 Tailbird Road');
          $("#nameOfFacilityCityStateZipCodeId").val('Beaufort, SC  29902');
          //$("#nameOfFacilityPhoneId").val('(843) 524-5100');//Beaufort County
      }
      if (getNameOfFacilitySelectedITem == "Ridgeland HS") {
            $("#nameOfFacilityAddressId").val('250 Jaguar Trail #103');
          $("#nameOfFacilityCityStateZipCodeId").val('Ridgeland, SC 29936');
          //$("#nameOfFacilityPhoneId").val('(843) 489-8845'); 
      }
      if (getNameOfFacilitySelectedITem == "Hardeeville HS") {
              $("#nameOfFacilityAddressId").val('150 Hurricane Alley');
          $("#nameOfFacilityCityStateZipCodeId").val('Hardeeville, SC 29927');
        //  $("#nameOfFacilityPhoneId").val('(843) 310-1888'); 
      }
      if (getNameOfFacilitySelectedITem == "Sandalwood") {
              $("#nameOfFacilityAddressId").val('143 Sandalwood Terrace');
          $("#nameOfFacilityCityStateZipCodeId").val('Hilton Head SC 29926');
        //  $("#nameOfFacilityPhoneId").val('(843) 681-6617'); 

      }   if (getNameOfFacilitySelectedITem == "St Helena ELC") {
              $("#nameOfFacilityAddressId").val('1031 Sea Island Pkwy');
          $("#nameOfFacilityCityStateZipCodeId").val('St Helena Island, SC 29920');
        //  $("#nameOfFacilityPhoneId").val('(843) 838-6900'); 

      }
         if (getNameOfFacilitySelectedITem == "Robertville HS") {
              $("#nameOfFacilityAddressId").val('9731 Cotton Hill Rd');
          $("#nameOfFacilityCityStateZipCodeId").val('Pineland, SC 29934');
         // $("#nameOfFacilityPhoneId").val('(843) 726-5636'); 

      }
        





      $("#EmergencyCareProviderSelectedId").change(function () {
         
          var selectedValue = $(this).children("option:selected").val();
       
          if (selectedValue == "Naval Hospital Beaufort") {
              $("#emergencyCityStateZipCode").val('Beaufort, SC 29902');
              $("#emergencyTelepphone").val('(843) 228-5600');
              $("#emergencyStreetAddress").val('1 Pinckney Blvd');
          }
          if (selectedValue == "Beaufort Memorial Hospital") {
              $("#emergencyCityStateZipCode").val('Beaufort, SC 29902');
              $("#emergencyTelepphone").val('(843) 522-5200');
              $("#emergencyStreetAddress").val('955 Ribaut Rd');
          }
          if (selectedValue == "Coastal Carolina Hospital") {
              $("#emergencyCityStateZipCode").val('Hardeeville, SC 29927');
              $("#emergencyTelepphone").val('(843) 784-8000');
                $("#emergencyStreetAddress").val('1000 Medical Center Dr');
          }
          if (selectedValue == "Hilton Head Hospital") {
              $("#emergencyCityStateZipCode").val('Hilton Head, SC 29926');
              $("#emergencyTelepphone").val('(843) 681-6122');
              $("#emergencyStreetAddress").val('25 Hospital Center Blvd');
          }
          if (selectedValue == "MUSC") {
              $("#emergencyCityStateZipCode").val('Charleston, SC 29425');
              $("#emergencyTelepphone").val('(843) 792-1414');
               $("#emergencyStreetAddress").val('171 Ashley Ave');
          }
          if (selectedValue == "Memorial Health University Medical Center") {
              $("#emergencyCityStateZipCode").val('Savannah, GA 31404');
              $("#emergencyTelepphone").val('(912) 350-8000');
              $("#emergencyStreetAddress").val('4700 Waters Ave');
          }
          if (selectedValue == "Candler Hospital") {
              $("#emergencyCityStateZipCode").val('Savannah, GA 31405');
              $("#emergencyTelepphone").val('(912) 819-6000');
              $("#emergencyStreetAddress").val('5353 Reynolds St');
          }

          if (selectedValue == "Coastal Carolina Hospital") {
              $("#emergencyCityStateZipCode").val('Hardeeville, SC 29927');
              $("#emergencyTelepphone").val('(843) 784-8000');
              $("#emergencyStreetAddress").val('1000 Medical Center Dr');
          }
         

        });

      









    $("#submit").click(function(){
        var validate = validation();
        
        //if (validate ) {
           
        var formData = {};
        var fields = $("input[type=text]");

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


        var isTrueRedirect = false;

        $.ajax({
                url: "pdf/statement-of-childs-health.php",
                type: "post",
                data: formData,
                success: function (response) {
                    if (response == 'ok') {
                        isTrueRedirect = true;
                    window.location.href = "determination-of-child-health-status-source.php";
                    } else {
                        isTrueRedirect = true;
                     window.location.href = "determination-of-child-health-status-source.php";
                  }
                }
            });
      
      //else {
      //          //validate.addClass('border');
      //          //validate.focus();

      //          //setTimeout(function () {
      //          //    validate.removeClass('border')
      //    //}, 3000);

      //  }

       
        if (isTrueRedirect == true) {

            window.location.href = "determination-of-child-health-status-source.php";
        }

    })
  })



    </script>


</body>
</html>