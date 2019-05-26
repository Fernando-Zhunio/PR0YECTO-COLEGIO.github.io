$(document).ready(function(){
  ;
llenarDatos();

function llenarDatos(){
alert("Correcto");
$.ajax({
    type: "GET",
    url: "llenarPage.php",
    data: {"llenar":"llenar"},
    success: function (response) {
     var jsonNombre= JSON.parse(response);   
     $('#navbarDropdown1').text(jsonNombre[0].Nombres);
     console.log(jsonNombre);
     console.log(jsonNombre[0].Nombres);

    }
});


}


    

})