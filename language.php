


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>personal information</title>
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
                    <!--<h1 >Select language for Family Communication Form</h1>-->
                    <h1 > Language choice for Statement of Child’s Health</h1>
                  </div>
                </div>
              </div>
            </div>
             <p>The next form has an English and a Spanish version.
             Please select which language you would like to use./El siguiente formulario tiene una version en ingles y en espanol. Seleccione el idioma que le gustarla usar.</p>
              <div class="row" style="text-align:center;height: 200px;">
                <div class="col-12" style="padding-top: 60px;">
                 <a href="statement-of-childs-health.php" class="button input-btn">English/ Ingles</a>
                 <a href="statement-of-childs-health-spanish.php" class="button input-btn">Spanish/ Espanol</a>
                </div>
                
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