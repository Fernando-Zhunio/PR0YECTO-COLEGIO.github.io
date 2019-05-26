$(document).ready(function(){
   
  
    $('#loginButton').click(function(){
      var alerta;
      var user = $('#defaultForm-email').val();
      var clave = $('#defaultForm-pass').val();
      if($.trim(user).length > 0 && $.trim(clave).length >0){
      $.ajax({
        type: "POST",
        url: "ValidarLogin.php",
        data: {user:user , clave:clave},
        cache:"false",
         beforeSend:function(){
         },
       
        success: function (response) {
          if(response=="1"){         
            $(location).attr('href','Profesores.php');
            alerta=  alert(response);
          }
          else{
            alerta=  alert(response);

          }
        }
      });
              
          }
        

      });


    










    
 //----------------------Guardar datos----------------------------------------------/////////////////////////////////////////
$('#loginButt').click(function(){
    console.log("loginButtonAntes");
 const con={
       cedula:$('#defaultForm-email').val(),
       contrasena:$('#defaultForm-pass').val()
    };
console.log(con);
$.post("PedirDatos.php", con,
    function (data) {
        console.log(data);
    },
   
   );
console.log('pase');
  });

});