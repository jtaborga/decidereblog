var password = document.getElementById("password_register")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

if ( $("#password_register").length > 0 && $("#confirm_password").length > 0) {
	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
}



if ( $("#flashMessage").length > 0 ) {
    alert($("#flashMessage").text());
}

/*
if ( $("#chart-pie-weight-new-scenario").length > 0 ) {
    $('#chart-pie-weight-new-scenario').easyPieChart({
        barColor : '#FF781F',
        trackColor : '#D4D4D4',
        lineWidth : 5
    });
    $( "#chart-pie-weight-new-scenario" ).draggable();
}
*/

function showNav () {
	$('.collapsed-nav a').toggle();
}

function scrollTo (element) {
  $('html, body').animate({
    scrollTop: $(element).offset().top
  }, 1000);
  
}

$(document).ready(function() {
    $('.main-sidebar').simpleSidebar({
        opener: '.toggle-sidebar',
        wrapper: '#wrapper',
        animation: {
            easing: "easeOutQuint"
        },
        sidebar: {
            align: 'left',
            closingLinks: '.close-sb',
        },
        sbWrapper: {
            display: true
        }
    });

    /*
    $(".input-range").ionRangeSlider({
      type : 'double'
    });

    $(".chosen-select").chosen();

    $('.chosen-select option').removeAttr('value') ;*/
});

//get values for form new scenario
$("#getNewScenario000").submit(function (event) {
    event.preventDefault();
    //$(this).hide('slow');
    //form = this;
    //formId = this.id;
    //progresBar = $("#progress-"+this.id);


    $.ajax({
        type: "POST",
        url: "prepareNewScenario.json",
        data: new FormData( this ),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (data) {
            console.log(data);

        }, 
        error: function (){
            console.log("error");
        },

        beforeSend: function () {

        },
        complete: function () {

        }
    });
});


//set scenario val
function setValueScenarioVal () {
    $('#newScenario #scenario_val').val('');
    //$('#newScenario #scenario_val').val(  $('#newScenario').serializeArray()  );
    var array = $('#newScenario').serializeArray();

    var json = {};
    
    jQuery.each(array, function() {
        json[this.name] = this.value || '';
    });

    console.log(json);

    $('#newScenario #scenario_val').val( JSON.stringify (json ) );
}



//save new scenario
$("#newScenario").submit(function (event) {
    event.preventDefault();
    name = $('#scenario_name').val();
    //$(this).hide('slow');
    form = this;
    //formId = this.id;
    //progresBar = $("#progress-"+this.id);

    var retVal = prompt("Save Scenario ?", name);

    if(retVal != null){
        alert('Saving scenario');
        if(retVal != ''){
            $('#scenario_name').val(retVal);
        }
        $.ajax({
            type: "POST",
            url: form.action,
            data: new FormData( this ),
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (data) {
                console.log(data);
            }, 
            error: function (){
                console.log("error");
            },

            beforeSend: function () {
                
            },
            complete: function () {

            }
        });
    } 

});


//login ajax
$("#formLoginModal").submit(function (event) {
    event.preventDefault();
    form = this;
    $("#formLoginModal .submit-login").attr("disabled", true);
    $('.status-login').hide('fast');
    $.ajax({
        type: "POST",
        url: this.action,
        data: new FormData( this ),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (data) {
            if(data.status_login == 'Username or password incorrect') {
                $('.status-login').text(data.status_login).show();
            } else if (data.status_login == 'Login Correct') {
                window.location = data.url;
            }
        }, 
        error: function (){
            console.log("error");
        },

        beforeSend: function () {
            $("#formLoginModal input").attr("disabled", true);
        },
        complete: function () {
            $("#formLoginModal .submit-login").attr("disabled", false);
            $("#formLoginModal input").attr("disabled", false);
        }
    });
});





$('.new-scenario-weight').change(function () {
     var sum = 0;
    $('.new-scenario-weight').each(function() {
        sum += Number($(this).val());
    });
    $('#chart-pie-weight-new-scenario #amount-pie-chart').text(sum + "%");
    $('#chart-pie-weight-new-scenario').data('easyPieChart').update(sum);
    $('#chart-pie-weight-new-scenario-sm').css('width', sum+'%').attr('aria-valuenow', sum); 
    $('#chart-pie-weight-new-scenario-sm span.sr-only').text(sum + "%");
});

