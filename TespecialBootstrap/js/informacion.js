$( document ).ready(function() {
  $("#btnGuardarInfo").on('click',guardarInformacion());
  $("#btnGuardarInfo").on('click',verTablaPosicion());
});

function guardarInformacion(){
  event.preventDefault();
  var grupo=110;
  var numPosicion=$("#posicion").val();
  var nombre=$("#nombre").val();
  var nacionalidad=$("#nacionalidad").val();
  var equipo=$("#equipo").val();
  var punto=$("#puntos").val();
  var infoPiloto={
    "group": grupo,
    "numPosicion": numPosicion,
    "nombre": nombre,
    "nacionalidad": nacionalidad,
    "equipo": equipo,
    "punto": punto
  };
  $.ajax({
    url:"http://web-unicen.herokuapp.com/api/create",
    method: "POST",
    datatype: 'JSON',
    contentType: "application/json; charset=utf-8",
    data: JSON.stringify(infoPiloto)
  });
}

function verTablaPosicion(){
  event.preventDefault();
  $.ajax({
    url:"http://web-unicen.herokuapp.com/api/create",
    method: "GET",
    contentType: "application/json; charset=utf-8",
    success:function(resultado){
      alert("info");
    }
  })
}
