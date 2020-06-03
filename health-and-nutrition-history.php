<?php 
session_start();
// var_dump($_SESSION);exit;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Health History/Nutrition Assessment</title>
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
                       <h1>Beaufort Jasper EOC Head Start</h1>
                       <h2>Health History/Nutrition Assessment</h2>
                     </div>
                   </div>
                 </div>
               </div>


              <div class="row mt-3">
              
                <div class="col-12 col-lg-6">
                  <label for="">Child(s) Name</label>
                  <input type="text"  readonly name="child_Name" class="form-control" value="<?php echo $_SESSION['child_Name'];?>">
                </div>


                <div class="col-12 col-lg-6">
                  <label for="">Date of Birth:</label>
                  <!--<input type="text" name="date_of_birth" class="form-control" value="<?php echo $_SESSION['date_of_birth'];?>">-->
                     <input type="text" readonly  name="date_of_birth" class="form-control" value="<?php echo $_SESSION['date_of_birth'];?>">
                </div>

                <div class="col-12 col-lg-6">
                  <label for="">Parent/Guardian:</label>
                  <input type="text"  readonly name="parent_name" class="form-control" value="<?php echo $_SESSION['parent_name'];?>">
                </div>

                <div class="col-12 col-lg-6">
                  <label for="">Parent/Guardian phone #:</label>
                    <input class="phone-formate form-control" name="parent_phone" type="text" maxlength="14" placeholder="(XXX) XXX-XXXX" readonly value="<?php echo $_SESSION['mobile'];?>">
                </div>


              </div>

              <div class="row mt-3">
                <div class="col-lg-12">
                    <h5>1) Medical History</h5>
                    
                      <p class="text-center">How much did your child weigh at birth? <input type="text" id="lbsId" name="lbs" class="dummy_validation"> Lbs. <input type="text" name="oz"> oz.</p>

                      
                        <div class="row">
                          <div class="col-3 col-lg-2">


                            <!-- <div class="col-auto my-1" style="display: inline-block;">
                              <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                              </div>
                            </div> -->

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">No</label>
                            </div>


                          </div>
                          <div class="col-9 col-lg-10 explain">
                            Has anyone in your family ever had any serious illness or medical conditions? (i.e. heart disease, cancer, tuberculosis, asthma, mental illness, etc.) if Yes, please explain. 
                            <input type="text" class="form-control" name="explain-1">
                          </div>
                        </div>




                        <div class="row py-2">
                          <div class="col-3 col-lg-2">


                            <!-- <div class="col-auto my-1" style="display: inline-block;">
                              <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                              </div>
                            </div> -->

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">No</label>
                            </div>



                          </div>
                          <div class="col-9 col-lg-10 explain">
                            Were there any problems with your child immediately after birth? if Yes, please explain.
                            <input type="text" class="form-control" name="explain-2">
                          </div>
                        </div>




                        <div class="row py-2">
                          <div class="col-3 col-lg-2">

                            <!-- <div class="col-auto my-1" style="display: inline-block;">
                              <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                              </div>
                            </div> -->

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">No</label>
                            </div>


                          </div>
                          <div class="col-9 col-lg-10 explain">
                            Is your child taking any medications every day? if Yes, please explain.
                            <input type="text" class="form-control" name="explain-3">
                          </div>
                        </div>


                        <div class="row py-2">
                          <div class="col-3 col-lg-2">


                            <!-- <div class="col-auto my-1" style="display: inline-block;">
                              <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                              </div>
                            </div> -->

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">No</label>
                            </div>



                          </div>
                          <div class="col-9 col-lg-10 explain">
                            Will medication be needed at school? if Yes, please explain.
                            <input type="text" class="form-control" name="explain-4">
                          </div>
                        </div>


                        <div class="row py-2">
                          <div class="col-3 col-lg-2">


                            <!-- <div class="col-auto my-1" style="display: inline-block;">
                              <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                              </div>
                            </div> -->

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">No</label>
                            </div>


                          </div>
                          <div class="col-9 col-lg-10 explain">
                            Has your child ever been prescribed a EPI-PEN? if Yes, please indicate allergy.
                            <input type="text" class="form-control" name="explain-5">
                          </div>
                        </div>


                        <div class="row py-2">
                          <div class="col-3 col-lg-2">


                            <!-- <div class="col-auto my-1" style="display: inline-block;">
                              <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                              </div>
                            </div> -->

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">No</label>
                            </div>


                          </div>
                          <div class="col-9 col-lg-10 explain">
                            Are there any conditions requiring special attention at childcare setting/school? if Yes, please explain.
                            <input type="text" class="form-control" name="explain-6">
                          </div>
                        </div>


                        <div class="row py-2">
                          <div class="col-3 col-lg-2">

                            <!-- <div class="col-auto my-1" style="display: inline-block;">
                              <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                              </div>
                            </div> -->

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">No</label>
                            </div>


                          </div>
                          <div class="col-9 col-lg-10 explain">
                            Is your child allergic to any of the following? (Please circle) Animals, perfume, trees, pollen, grass, flowers, dust, other?
                            <input type="text" class="form-control" name="explain-7">
                          </div>
                        </div>


                        <div class="row py-2">
                          <div class="col-3 col-lg-2">

                            <!-- <div class="col-auto my-1" style="display: inline-block;">
                              <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                              </div>
                            </div> -->

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="" name="" class="custom-control-input">
                              <label class="custom-control-label" for="">No</label>
                            </div>


                          </div>
                          <div class="col-9 col-lg-10 explain">
                             Does anyone in the household smoke? (Where? i.e. at home?) 
                            <input type="text" class="form-control" name="explain-8">
                          </div>
                        </div>
                   
                </div>
              </div>
            </div>



            <div class="row mt-5">
              <div class="col-12">
                <h5>2) Has your child ever had the following illnesses? </h5>
              </div>

              <div class="col-12 mt-3 col-lg-9">
                <table class="table table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Yes</th>
                      <th scope="col"></th>
                      <th scope="col">Yes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Measles</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                      <td>Ear/Nose/Throat Problems </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                    </tr>
                      
                     <tr>
                      <td>Eye Problems </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                    
                    <td>Mumps</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>

                    </tr>
                    <tr>
                      <td>Urinary/Kidney Problems</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                      <td>Heart Disease  </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                    
                    </tr>


                    <tr>
                      <td>Chickenpox</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="5" class="custom-control-input" id="5">
                            <label style="display: inline-block;" class="custom-control-label" for="5"></label>
                          </div>
                        </div>
                      </td>
                      <td>Muscle/Bone Problems </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="6" class="custom-control-input" id="6">
                            <label style="display: inline-block;" class="custom-control-label" for="6"></label>
                          </div>
                        </div>
                      </td>
                         </tr>
                      <tr>
                      <td>Pneumonia </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                      <td>Scarlet Fever </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                      </tr>
                      <tr>
                      <td>Anemia</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                      <td>Intestinal Problems   </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                    </tr>
                    


                    <tr>
                      <td>Respiratory Problems</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                      <td>Blood Pressure Problems </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                        </tr>
                      <tr>
                      <td>Diabetes </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                   


                  
                      <td>Tuberculosis</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                          </tr>
                      <tr>
                      <td>Rheumatic Fever </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                      <td>Other </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                    </tr>


                    <tr>
                      <td>Seizures</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                      <td>Bee Sting Allergy</td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                        </tr>
                      <tr>
                      <td><b>None of the above</b> </td>
                      <td>
                        <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for=""></label>
                          </div>
                        </div>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>


                <div class="col-12 mt-3">
                  <p class="m-0">
                    If you answered yes to any illness, please explain (i.e triggers, medications needed during program hours, how long ago, how often, etc.).
                  </p>
                  <textarea id="illness" class="form-control" cols="30" rows="3" name="table-1-details" ></textarea>
                </div>
              </div>
            </div>



            <div class="row mt-5">
                <div class="col-12">
                  <h5>3) Has your child ever had the
following?  If so, please check the box, give date, and explain to the
best of your knowledge.</h5>
                    
                  

                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <table class="table table-bordered">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Yes</th>
                            <th scope="col"></th>
                            <th scope="col">Date</th>
                            <th scope="col">Comment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="col-auto my-1" style="display: inline-block;">
                                <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                  <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                  <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                </div>
                              </div>
                            </td>
                            <td>Hospitalizations</td>
                            <td><input type="text" class="form-control" name="date-1"></td>
                            <td><input type="text" name="comment-1" class="form-control"></td>
                          </tr>



                          <tr>
                            <td>
                              <div class="col-auto my-1" style="display: inline-block;">
                                <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                  <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                  <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                </div>
                              </div>
                            </td>
                            <td>Operations</td>
                            <td><input type="text" class="form-control" name="date-2"></td>
                            <td><input type="text" name="comment-2" class="form-control"></td>
                          </tr>


                          <tr>
                            <td>
                              <div class="col-auto my-1" style="display: inline-block;">
                                <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                  <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                  <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                </div>
                              </div>
                            </td>
                            <td>Serious Injuries </td>
                            <td><input type="text" class="form-control" name="date-3"></td>
                            <td><input type="text" name="comment-3" class="form-control"></td>
                          </tr>


                          <tr>
                            <td>
                              <div class="col-auto my-1" style="display: inline-block;">
                                <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                  <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                  <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                </div>
                              </div>
                            </td>
                            <td>Other Health Problems/Illness</td>
                            <td><input type="text" class="form-control" name="date-4"></td>
                            <td><input type="text" name="comment-4" class="form-control"></td>
                          </tr>


                          <tr>
                            <td>
                              <div class="col-auto my-1" style="display: inline-block;">
                                <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                  <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                  <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                </div>
                              </div>
                            </td>
                            <td>Allergies to Medication (i.e., penicillin)</td>
                            <td><input type="text" class="form-control" name="date-5"></td>
                            <td><input type="text" name="comment-5" class="form-control"></td>
                          </tr>
                        
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
            </div>



            <div class="row mt-3">
              <div class="col-lg-12">
                  <h5>4) Dental Information</h5>
                  
                    

                    
                      <div class="row">
                        <div class="col-3 col-lg-2">

                          <!-- <div class="col-auto my-1" style="display: inline-block;">
                            <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                              <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                              <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                            </div>
                          </div> -->

                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">No</label>
                          </div>


                        </div>
                        <div class="col-9 col-lg-10 explain">
                          Does your child have dental insurance? Name of Insurance.
                          <input type="text" class="form-control" name="dental-1">
                        </div>
                      </div>




                      <div class="row py-2">
                        <div class="col-3 col-lg-2">

                          <!-- <div class="col-auto my-1" style="display: inline-block;">
                            <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                              <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                              <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                            </div>
                          </div> -->

                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">No</label>
                          </div>


                        </div>
                        <div class="col-9 col-lg-10 explain">
                         Does your child have an ongoing source of continuous and accessible dental care/dentist?
                          <input type="text" class="form-control" name="dental-2">
                        </div>
                      </div>




                      <div class="row py-2">
                        <div class="col-3 col-lg-2">

                          <!-- <div class="col-auto my-1" style="display: inline-block;">
                            <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                              <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                              <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                            </div>
                          </div> -->

                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">No</label>
                          </div>


                        </div>
                        <div class="col-9 col-lg-10 ">
                           Do you have a family dentist? 
                          
                        </div>
                      </div>


                      <div class="row py-2">
                        <div class="col-3 col-lg-2">

                          <!-- <div class="col-auto my-1" style="display: inline-block;">
                            <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                              <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                              <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                            </div>
                          </div> -->
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">No</label>
                          </div>


                        </div>
                        <div class="col-9 col-lg-10 explain">
                          Dentist Name/Practice:
                          <input type="text" class="form-control" name="dental-3">
                        </div>
                      </div>


                      <div class="row py-2">
                        <div class="col-3 col-lg-2">

                          <!-- <div class="col-auto my-1" style="display: inline-block;">
                            <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                              <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                              <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                            </div>
                          </div> -->

                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">No</label>
                          </div>


                        </div>
                        <div class="col-9 col-lg-10 explain">
                           Dose your child have dental problem now?
                          <input type="text" class="form-control" name="dental-4">
                        </div>
                      </div>
                 
              </div>
            </div>



            <div class="row mt-3">
              <div class="col-lg-12">
                  <h5>5) Nutrition Screening</h5>
                  
                    

                    
                      <div class="row">
                        <div class="col-3 col-lg-2">

                          <!-- <div class="col-auto my-1" style="display: inline-block;">
                            <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                              <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                              <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                            </div>
                          </div> -->

                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">No</label>
                          </div>


                        </div>
                        <div class="col-9 col-lg-10">
                         Does your child eat a variety of foods, including fruits and vegetables? 
                        </div>
                      </div>




                      <div class="row py-2">
                        <div class="col-3 col-lg-2">

                          <!-- <div class="col-auto my-1" style="display: inline-block;">
                            <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                              <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                              <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                            </div>
                          </div> -->

                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">No</label>
                          </div>

                        </div>
                        <div class="col-9 col-lg-10">
                        Does your child drink from a baby bottle now? 
                        </div>
                      </div>




                      <div class="row py-2">
                        <div class="col-3 col-lg-2">

                          <!-- <div class="col-auto my-1" style="display: inline-block;">
                            <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                              <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                              <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                            </div>
                          </div> -->

                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="" name="" class="custom-control-input">
                            <label class="custom-control-label" for="">No</label>
                          </div>


                        </div>
                        <div class="col-9 col-lg-10 explain">
                           Do you have any concerns about your child’s growth, nutrition or eating habits? (i.e. picky eater, constipation, diarrhea)? if Yes, please explain.
                          <input type="text" class="form-control" name="nutrition-1">
                        </div>
                      </div>


                      
                 
              </div>
            </div>


            <div class="row mt-3">
              <div class="col-lg-12">
                  <h5>6) Food Substitution</h5>
                  
                    

                  
                    <div class="row">
                      <div class="col-3 col-lg-2">

                        <!-- <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                          </div>
                        </div> -->

                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">No</label>
                        </div>


                      </div>
                      <div class="col-9 col-lg-10 explain">
                        Is your child restricted from foods due to religious, medical, or personal reasons? if Yes, please explain. (i.e. What foods, type restrictions).
                        <input type="text" class="form-control" name="food-1">
                      </div>
                    </div>




                    <div class="row py-2">
                      <div class="col-3 col-lg-2">

                        <!-- <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                          </div>
                        </div> -->

                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">No</label>
                        </div>


                      </div>
                      <div class="col-9 col-lg-10 explain">
                      Does your child have any food allergies or intolerances? if Yes, please explain.
                        <input type="text" class="form-control" name="food-2">
                        What kind of reactions does your child have, when your child eats the food in the above     questions? (please circle) Rash, Swelling, Diarrhea, Difficulty breathing, Life threatening, 
                      </div>
                    </div>




                    <div class="row py-2">
                      <div class="col-3 col-lg-2">

                        <!-- <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                          </div>
                        </div> -->


                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">No</label>
                        </div>


                      </div>
                      <div class="col-9 col-lg-10 explain">
                         Is your child on any special diet prescribed by doctor? if Yes, please explain.
                        <input type="text" class="form-control" name="food-3">
                      </div>
                    </div>


                 
              </div>
            </div>





            <div class="row mt-3">
              <div class="col-lg-12">
                  <h5>7) Asthma</h5>
                  
                    
                  <!--<div class="row my-4">
                    <div class="col-12">
                      Is your child infant? 

                      <div class="custom-control custom-radio custom-control-inline">
                        <input data-asthma="yes" type="radio" id="" name="" class="custom-control-input">
                        <label class="custom-control-label" for="">Yes</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input data-asthma="no" type="radio" id="" name="" class="custom-control-input">
                        <label class="custom-control-label" for="">No</label>
                      </div>
                    </div>
                  </div>-->


                   <div class="row">
                      <div class="col-3 col-lg-2">

                        <div class="custom-control custom-radio custom-control-inline ">
                          <input data-asthma="yes" type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline hide-radio">
                          <input data-asthma="no" type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">No</label>
                        </div>


                      </div>
                 <div class="col-9 col-lg-10 explain">
                       Has your child ever been diagnosed by a medical professional as having asthma?  (If your answer is NO, please skip to #8) <br>
                    <div class="first_seven_section">
                       a) Date of diagnosis:
                        <input type="text" class=" mt-1" name="asthma-1" style="width: 50%"> <br>
                      b) How many episodes per year? 
                       <input type="text" class=" mt-1" name="asthma-2" style="width: 50%"> <br>

                       c) Is it seasonal? At what time of the year do the episodes most often occur? 
                       <input type="text" class=" mt-1" name="asthma-3" style="width: 50%"> <br>


                       d) Is it well controlled? 
                       <input type="text" class=" mt-1" name="asthma-4" style="width: 50%"> <br>

                      e) Asthma triggers? 
                       <input type="text" class=" mt-1" name="asthma-5" style="width: 50%"> <br>

                      </div>
                   </div>
                </div>

                  <div id="secton-7" >
                    <!--<div class="row">
                      <div class="col-3 col-lg-2">

                        <div class="custom-control custom-radio custom-control-inline ">
                          <input data-asthma="yes" type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline hide-radio">
                          <input data-asthma="no" type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">No</label>
                        </div>


                      </div>
                      <div class="col-9 col-lg-10 explain">
                       Has your child ever been diagnosed by a medical professional as having asthma?  (If your answer is NO, please skip to #8) <br>

                       a) Date of diagnosis:
                        <input type="text" class=" mt-1" name="asthma-1" style="width: 50%"> <br>
                      b) How many episodes per year? 
                       <input type="text" class=" mt-1" name="asthma-2" style="width: 50%"> <br>

                       c) Is it seasonal? At what time of the year do the episodes most often occur? 
                       <input type="text" class=" mt-1" name="asthma-3" style="width: 50%"> <br>


                       d) Is it well controlled? 
                       <input type="text" class=" mt-1" name="asthma-4" style="width: 50%"> <br>

                      e) Asthma triggers? 
                       <input type="text" class=" mt-1" name="asthma-5" style="width: 50%"> <br>

                      </div>
                    </div>-->


                    <div class="row mt-4">
                      <div class="col-3 col-lg-2">

                        <!-- <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                          </div>
                        </div> -->

                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">No</label>
                        </div>


                      </div>
                      <div class="col-9 col-lg-10 explain">
                       2. Has your child experienced any of the following due to ASTHMA?<br>

                      Treatment in the ER, number of times: 
                        <input type="text" class=" mt-1" name="asthma-6" style="width: 50%"> <br>
                      Hospitalizations; number of times: 
                       <input type="text" class=" mt-1" name="asthma-7" style="width: 50%"> <br>
                      </div>
                    </div>




                    <div class="row mt-4">
                      <div class="col-3 col-lg-2">

                        <!-- <div class="col-auto my-1" style="display: inline-block;">
                          <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                            <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                            <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                          </div>
                        </div> -->

                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="" name="" class="custom-control-input">
                          <label class="custom-control-label" for="">No</label>
                        </div>


                      </div>
                      <div class="col-9 col-lg-10">
                      3. Have you ever given your child any medications for asthma? If yes, please place a
check on all that your child has used in the past two years.
<br>

                      <div class="row">
                          <div class="col-12 col-lg-12">
                            <table class="table table-bordered">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col"></th>
                                  <th scope="col">Yes</th>
                                  <th scope="col"></th>
                                  <th scope="col">Yes</th>
                                  <th scope="col"></th>
                                  <th scope="col">Yes</th>
                                </tr>
                              </thead>
                             <tbody>
                               <tr>
                                 <td>Albuterol </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                                 <td>Prelone  </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                                 <td>Pedia Pred  </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                               </tr>
                               

                               <tr>
                                 <td>Tedral </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                                 <td>Quiboron </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                                 <td>Primatine Mist   </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                               </tr>



                               <tr>
                                 <td>Marx </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="5" class="custom-control-input" id="5">
                                       <label style="display: inline-block;" class="custom-control-label" for="5"></label>
                                     </div>
                                   </div>
                                 </td>
                                 <td>Ventolin  </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="6" class="custom-control-input" id="6">
                                       <label style="display: inline-block;" class="custom-control-label" for="6"></label>
                                     </div>
                                   </div>
                                 </td>
                                 <td>Other <input type="text" class="form-control" name="asthma-other"></td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                               </tr>


                               <tr>
                                 <td>Intal  </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                                 <td>Proventil </td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                                 <td></td>
                                 <td>
                                   <div class="col-auto my-1" style="display: inline-block;">
                                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                                       <label style="display: inline-block;" class="custom-control-label" for=""></label>
                                     </div>
                                   </div>
                                 </td>
                               </tr>


                            
                              
                             </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-3 col-lg-2">

                      <!-- <div class="col-auto my-1" style="display: inline-block;">
                        <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                          <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                          <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                        </div>
                      </div> -->

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="" name="" class="custom-control-input">
                        <label class="custom-control-label" for="">Yes</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="" name="" class="custom-control-input">
                        <label class="custom-control-label" for="">No</label>
                      </div>


                    </div>
                    <div class="col-9 col-lg-10 explain">
                    4. Does your child use a Nebulizer of Inhaler? if Yes, how often.

                    
                      <input type="text" class=" mt-1" name="asthma-8" style="width: 50%"> <br>
                

                    </div>
                  </div>
                  </div> <!-- // show hide -->
              </div>
            </div>

          <div id="section-8">
            <div class="row">
              <div class="col-12">
                <h5>8) Medical Coverage</h5>
              </div>
            </div>


              <div class="row">
                 <div class="col-3 col-lg-2">

                   <!-- <div class="col-auto my-1" style="display: inline-block;">
                     <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                       <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                       <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                     </div>
                   </div> -->

                   <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="" name="" class="custom-control-input">
                     <label class="custom-control-label" for="">Yes</label>
                   </div>
                   <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="" name="" class="custom-control-input">
                     <label class="custom-control-label" for="">No</label>
                   </div>


                 </div>
                 <div class="col-9 col-lg-10 explain">
                 1. Does your child have a family doctor? Does your child receive medical services through an ongoing source of continuous, accessible medical care? if Yes, please answer the following: <br>

                  Doctor’s Name:
                   <input type="text" class=" mt-1" name="mediacl-1" style="width: 50%"> <br>
                Address: 
                  <input type="text" class=" mt-1" name="medical-2" style="width: 50%"> <br>

                  Phone Number: 
                  <input type="text" class=" mt-1" name="medical-3" style="width: 50%"> <br>
                 </div>
              </div>

             

              <div class="row">
                <div class="col-3 col-lg-2 mt-3">

                  <!-- <div class="col-auto my-1" style="display: inline-block;">
                    <div class="custom-control custom-checkbox mr-sm-2" style="display: inline-block;">
                      <input style="display: inline-block;" type="checkbox" name="" class="custom-control-input" id="">
                      <label style="display: inline-block;" class="custom-control-label" for="">Yes / No</label>
                    </div>
                  </div> -->

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="" name="" class="custom-control-input">
                    <label class="custom-control-label" for="">Yes</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="" name="" class="custom-control-input">
                    <label class="custom-control-label" for="">No</label>
                  </div>


                </div>
                <div class="col-9 col-lg-10 mt-3 explain">
                2. Does your child have health insurance?  <br>

                Name of Insurance: 
                  <input type="text" class=" mt-1" name="medical-4" style="width: 50%"> <br>
                
                </div>
              </div>
           </div>

              
    
            



         <div class="row mt-5">

            <div class="col-lg-6">
               Parent Name: <br>
               <input type="text" readonly   name="parent_signature" class="form-control input-field-one" value="<?php echo $_SESSION['parent_name'];?>">
             </div>
                
             <div class="col-lg-6 ">
               Date:<br>
               <input type="text" readonly value="<?php echo $_SESSION['today'];?>"  name="signature_date" class=" form-control input-field-one" >
             </div>



         </div>

         <div class="row mt-5">
               

          

         <div class="col-12 col-lg-10 mt-5">
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

                <!--<div class="col-12 col-lg-6 mt-5">
                      <div class="row mt-2">
                       <div class="col-12">Date</div>
                       <div class="col-12">
                         <input type="text" name="signature_date" class="form-control">
                       </div>
                     </div>
                </div>-->
                

           </div>

         <div class="row  mt-5">
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
  var skip = 0;

  $(document).ready(function(){

      RemoveRequiredFunctions();


      // set id,name and for value to radio button 
    var boxs = $("input[type=radio]");
    var c = 0;
    for(var i = 0;  i< boxs.length; i++){

      if(i%2==0){
        c++;
        var name = 'radio-'+c;
      }
      var label = $(boxs[i]).siblings('label');
      $(boxs[i]).attr('name',name);
      $(boxs[i]).attr('id','check-'+(i+1));
      label.attr('for','check-'+(i+1));

    }


    // set id,name and for value to checkbox 
    var boxs = $("input[type=checkbox]");
    var c = 0;
    for(var i = 0;  i< boxs.length; i++){
      var name = "check-"+(i+1);
      var label = $(boxs[i]).siblings('label');
      $(boxs[i]).attr('name',name);
      $(boxs[i]).attr('id','checkbox-'+(i+1));
      label.attr('for','checkbox-'+(i+1));

    }

     


      $("#submit").click(function () {

    
          //var dummyValidation = validation();

          //if (dummyValidation == true) {
          //    return true;

          //} else {
          //     dummyValidation.addClass('border');
          //      dummyValidation.focus();

          //      setTimeout(function () {
          //          dummyValidation.removeClass('border')
          //      }, 3000);

          //}


          var dummyValidation = $("#lbsId").val();

          if (dummyValidation != "") {
              $("#check-1").focus();

          } else {
               $("#lbsId").addClass('border');
                $("#lbsId").focus();

                setTimeout(function () {
                    $("#lbsId").removeClass('border')
                }, 3000);
              return false;
          }

          



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


      // ==========  explain validaton ==============
                var explainRequiredValidate = true;
                var all_explain = $('.explain-required');
                for(var i=0;i<all_explain.length;i++){

                  if($(all_explain[i]).val() == ''){

                    explainRequiredValidate = false;
                    $(all_explain[i]).addClass('required');
                    $(all_explain[i]).focus();
                    break;

                  }
                }
      // ============ explain validation end



      var validate = validation();

      if(validation  && radioValidate && explainRequiredValidate){



 
        // get input text value 
        var fields = $("input[type=text]");
        for(var i = 0; i< fields.length; i++){
          var name = $(fields[i]).attr('name');
          var value = $(fields[i]).val();
          formData[name] = value;
        }
        // get checkbox value 
        var checkbox = $("input[type=checkbox]");
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

        var illness = $("#illness").val();

        formData['illness'] = illness;

          var name = $("#check-39").attr('id');
          var value = $("#check-39").prop("checked");
          if(value){
            value = 'Yes';
          }else{
            value = 'No';
          }
          formData[name] = value;


          console.log(formData);

          debugger;


          $.ajax({
                  url: "pdf/health-and-nutrition-history.php",
                  type: "post",
                  data: formData,
                  success: function (response) {
                    if(response == 'ok'){
                      window.location.href = "language.php";
                    }else{
                      window.location.href = "language.php";
                    }
                  }
              });
    
        }

        //  else {
        //        validate.addClass('border');
        //        validate.focus();

        //        setTimeout(function () {
        //            validate.removeClass('border')
        //        }, 3000);
        //}







          //end of function
    })



    //$('[data-asthma="yes"]').click(function(){
    //  $("#secton-7").show();
    //  $("#section-8").show();

    //  for(var i = 41; i<=52; i++){
    //   $("#check-"+i).attr('type','radio')
    //  }

     
     
    //})

    //  $('[data-asthma="no"]').click(function(){
    //   $("#secton-7").hide();
    //   $("#section-8").hide();
       
    //   for(var i = 41; i<=52; i++){
    //    $("#check-"+i).attr('type','text')
    //   }
      

       
    // })

      //new code here 



       $('[data-asthma="yes"]').click(function(){
           $("#secton-7").show();
           $(".first_seven_section").show();
     // $("#section-8").show();

      for(var i = 41; i<=46; i++){
       $("#check-"+i).attr('type','radio')
      }

     
     
    })

      $('[data-asthma="no"]').click(function(){
          $("#secton-7").hide();
          $(".first_seven_section").hide();
          RemoveRequiredFunctions();
       
       for(var i = 41; i<=46; i++){
        $("#check-"+i).attr('type','text')
       }
      

       
     })




  })

  

    function RemoveRequiredFunctions() {


         $("input[type=radio]").click(function(){

      var this_name =  $(this).attr('name');
      var all_radio = $("input[name='"+this_name+"']");

      for(var i=0; i<2;i++){
        var label =  $(all_radio[i]).siblings('label');
        label.removeClass('required-yes-no');
      }

      if($("input[type=radio]").index(this) % 2 == 0){
        $(this).parent().parent().siblings('.explain').find('input').addClass('explain-required');
      }else{
        $(this).parent().parent().siblings('.explain').find('input').removeClass('explain-required');
      }

    })

    // remove required class form input fields 
    $('input').keyup(function(){
      $(this).removeClass('required');
    })


    

    }


    
    </script>


</body>
</html>