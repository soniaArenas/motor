$('#registerbtn').click(function(){
    $('.error-msg').hide();
});
//Previsualizar img al subirla
$("#imguserInput").change(function () {
    filePreview(this);
});
function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#registerForm + embed').remove();
            $('#imguserInput').after('<embed src="'+e.target.result+'" width="450" height="300">');
        }
        reader.readAsDataURL(input.files[0]);
    }
};

//Crear cuenta
$('#submit-register').click(function(e){
    e.preventDefault();
    // console.log("hoñl");
    var userName = $('#userNameInput').val();
    var userPass = $('#userPassInput').val();
    var userPassRep = $('#userPassInputRep').val();
    var userImg = $('#imguserInput').val();
    // console.log(userPass);
    // console.log(userPassRep);
    if(validate(userName, userPass, userPassRep, userImg)== false){
        $.ajax({
      method: "POST",
      url: "/Moto2/php/login.php",
      data: {
    action: 'register',
    data: [{ userName: userName, userPass: userPass, userImg: userImg  }]
  }
    })
      .done(function( msg ) {
        alert( "Data Saved: " + msg );
      });

    }
	

});

function validate(userName, userPass, userPassRep, userImg){
    console.log("validando");
    var hasErrors= false;
    $('input').removeClass('error');
    // console.log("borrando");
    if(userPass != userPassRep ){
        hasErrors = true;
        $('#errorPass').show();
        $('#userPassInput').addClass('error');
        $('#userPassInputRep').addClass('error');
    }
    else{
        $('#errorPass').hide();
        $('#userPassInput').removeClass('error');
        $('#userPassInputRep').removeClass('error');
    }
    if(userName.length < 4){
        hasErrors = true;
        console.log("lo veo");
        $('#errorNamep').show();
        $('#userNameInput').addClass('error');
    }else if(userName.length >= 4){
        console.log("no lo veo")
        $('#userNameInput').removeClass('error');
        $('#errorNamep').hide()
    }
    var archivo = $("#imguserInput").val();
    var extensiones = archivo.substring(archivo.lastIndexOf("."));
    if(extensiones != ".jpg" && extensiones != ".png")
    {
        hasErrors = true;
        if(!$('#errorImg').length){
            $('#errorImg').show();
            $('#userImgInput').addClass('error');
        }else{
            $('#errorImg').hide();
            $('#userImgInput').removeClass('error');
        }
        
    }
    return hasErrors;
    
}