

function isEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
}





$('.phone-formate')

    .on('keypress', function (e) {
        var key = e.charCode || e.keyCode || 0;
        var phone = $(this);
        if (phone.val().length === 0) {
            phone.val(phone.val() + '(');
        }
        // Auto-format- do not expose the mask as the user begins to type
        if (key !== 8 && key !== 9) {
            if (phone.val().length === 4) {
                phone.val(phone.val() + ')');
            }
            if (phone.val().length === 5) {
                phone.val(phone.val() + ' ');
            }
            if (phone.val().length === 9) {
                phone.val(phone.val() + '-');
            }
            if (phone.val().length >= 14) {
                phone.val(phone.val().slice(0, 13));
            }
        }

        // Allow numeric (and tab, backspace, delete) keys only
        return (key == 8 ||
            key == 9 ||
            key == 46 ||
            (key >= 48 && key <= 57) ||
            (key >= 96 && key <= 105));
    })

    .on('focus', function () {
        phone = $(this);

        if (phone.val().length === 0) {
            phone.val('(');
        } else {
            var val = phone.val();
            phone.val('').val(val); // Ensure cursor remains at the end
        }
    })

    .on('blur', function () {
        $phone = $(this);

        if ($phone.val() === '(') {
            $phone.val('');
        }
    });



function validation() {
    var allFields = $(".dummy_validation");
    for (var i = 0; i < allFields.length; i++) {

        if ($(allFields[i]).val() == '') {
            return $(allFields[i]);
        }
    }




    //for email validation


    var allemailFields = $(".dummy_email_validation");
    for (var i = 0; i < allemailFields.length; i++) {
        var checkMail = isEmail($(allemailFields[i]).val());
       // var getvalueFromEmail = $("#email").val();
       
        var getvalueFromEmail = $(allemailFields[i]).val();


        if (getvalueFromEmail != "" && getvalueFromEmail != "undefined") {
           
            if (checkMail == false) {
                return $(allemailFields[i]);
            }
        }
    }




    var check_1 = $("#customCheckID");
   

    if (check_1.prop("checked") == true) {
        $("#confirm-check-1").removeClass("required");
      
    } else {
        $("#confirm-check-1").addClass("required");
        $(".signature-cls").hide();
        return false
    }



    return true;
}






// date year length check
function handler(e) {

    if (e.target.value.length > 10) {
        e.target.classList.add("border");
        e.target.value = '';
    } else {
        e.target.classList.remove("border");
    }
}


$(".dummy_selectbox").css('background-color', '#e9ecef');

$(".dummy_selectbox").mousedown(function (e) {
   e.preventDefault();
    $(this).prop('readonly', true);
    
});


$(".dummy_selectbox").keydown(function (e) {
    e.preventDefault();
    $(this).prop('readonly', true);
});




$("#customCheckID").click(function () {

   // var getParentName = $("#parent_name").val();

   // debugger;
    var fields = $(".form-control");

    for (var i = 0; i < fields.length; i++) {
        var name = $(fields[i]).attr('name');
       
        if (name == "parent_name" || name == "parent_signature" || name =="input-7" || name=="field-54") {
            var getParentName = $(fields[i]).val();
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




$("#StatementCustomCheckID").click(function () {




    var fields = $(".form-control");
    for (var i = 0; i < fields.length; i++) {
        var name = $(fields[i]).attr('name');

        if (name == "field-54") {
            var getParentName = $(fields[i]).val();
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




//date of birth valdiation


var date = new Date();
date.setDate(date.getDate() - 1);
var yesterday = ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date.getDate()).slice(-2) + '-' + date.getFullYear();

$(".data-of-birth").datepicker({
    dateFormat: 'mm-dd-yy',
    changeMonth: true,
    changeYear: true,
    maxDate: new Date(yesterday)

});




