
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-timepicker.min.js"></script>
    <script src="js/numb.min.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript">
//regZone
$(".alert").alert();
$("#logNotify").hide();
//loginZone
$("#inputEmail3, #inputPassword3").focus(function(){
    $("#logNotify").hide();
    $("#logNotify").html("");
});
$("#logForm").submit(function(event) {
    event.preventDefault();
    urls = "regist/log.php",
    methods = "POST",
    data = "email=" + $("#inputEmail3").val() + "&password=" + $("#inputPassword3").val();
    data += "&submit=true";
    $.ajax({
        url: urls,
        type:methods,
        data : data,
        // encoding: "UTF-8",
        success: function(xhr, textStatus, error){
            console.log("success page: \n");
            if(xhr.indexOf("Success auth")>=0 ){
                $("#logNotify").html("");
                window.location.replace("cabinet.php");
            }else{
                $("#logNotify").html(xhr);
                $("#logNotify").show();
            }
            console.log(xhr+"\n");
        },
        error: function(xhr, textStatus, error){
            $("#logNotify").html(xhr);
            $("#logNotify").show();
            console.log("error page: \n");
        }
    });
});

$("#phone").mask("+1 (999) 999-9999");
$("#firstname, #lastname").on("change", function() {
        var dest = $(this);
        dest.val(dest.val().split(" ").join("")); 
    });

function IsEmail(email) {   //Regex for email check
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$("#email").on("change", function() {    //Event handler for email
        var dest = $(this);
        if(!IsEmail(dest.val())){
        }
    });

var regBtnStata = true;
function regBtnLoading(){
    regBtnStata = false;
    $("#regSubmit").addClass("disabled");
    $("#regSubmit").html("<img src='img/loader.gif'> Loading...");
    }

function regBtnActive(){
    regBtnStata = true;
    $("#regSubmit").removeClass("disabled");
    $("#regSubmit").html("Create");
    }

function regBtnSuccess(){
    regBtnStata = false;
    $("#regSubmit").removeClass("disabled btn-info");
    $("#regSubmit").addClass("btn-success");
    $("#regSubmit").html("You successfully registered");
    }

$("#regSubmit").click(function(event) {
    if(regBtnStata){
        event.preventDefault();
        var trouble = false;
        regBtnLoading();
        var tel = $("#phone").val();
        tel = tel.replace('(','');
        tel = tel.replace(') ','');
        tel = tel.replace('-','');
        tel = tel.replace(' ','');
        tel = tel.replace('+1',''); 
        // alert("This: " + tel);
        $("#regNotify").hide(); $("#regNotify").html("");
        if( ($("#regPass1").val() == "") || ($("#regPass2").val() == "") || ($("#regName").val() == "") || ($("#regSurName").val() == "") || (tel == "")){
            $("#regNotify").html("Field cannot be empty");
            $("#regNotify").show();
            regBtnActive();
            return;
        }

        if($("#regPass1").val() !== $("#regPass2").val()){
            $("#regNotify").html("Passwords do not match");
            trouble = true;
        }
        if(!IsEmail($("#email").val())){
            if(trouble){
                $("#regNotify").html( $("#regNotify").html() + "<br> Invalid email address");
            }else{
                $("#regNotify").html("You entered invalid email address");
                trouble = true;
            }
        }
        if(!$("#agreement").is(':checked')){
            if(trouble){
                $("#regNotify").html( $("#regNotify").html() + "<br> Oops");
            }else{
                $("#regNotify").html("Oops. You did not agree with term of usage");
                trouble = true;
            }
        }
        if(trouble){ 
            $("#regNotify").show();
            regBtnActive();
            return 0;
        }

        var regData = "phonenumber="+tel+"&name=" + $("#firstname").val() + "&surname=" + $("#lastname").val() + "&email=" + $("#email").val() + "&password=" + $("#regPass1").val() + "&submit=true";
        $.ajax({
            url: "regist/reg.php",
            type:"POST",
            data : regData,
            encoding: "UTF-8",
            success: function(xhr, textStatus, error){
                // console.log("success page: \n");
                if(xhr.indexOf("success reg") >=0 ){
                    $("#loginStatus").html("");
                    regBtnSuccess();
                    // $("#regModalBody").addClass("bg-success");
                    $("#regModalBody").html("<blockquote><p class=\"text-center\"><h3>You successfully registered.</h3></p></blockquote>");
                    // setTimeout(function(){
                    // window.location.replace("/");
                    // },2500);
                }else{
                    $("#regNotify").html(xhr);
                    $("#regNotify").show();
                    regBtnActive();
                }
                // console.log(xhr+"\n");
            },
            error: function(xhr, textStatus, error){
                console.log("error page: \n");
            }
        });
    }
    });
$("#exit, #exit2").click(function(){ //Exit
    $("#tts").click();
    });
    </script>