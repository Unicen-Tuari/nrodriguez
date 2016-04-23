"use estrict";

alert('Bienvenido al juego de la ruleta!!!');

var costo=10;
var saldo=100;
var numeroApuesta= -1;
var numeroRuleta=-1;
var salio=-1;
document.getElementById('saldo').innerHTML='$' + saldo;
document.getElementById('numero').value="";

function selectNro(nro){
  ganancia=2*costo;
  document.getElementById('numero').value=nro;
  document.getElementById('valor').innerHTML=costo + '= ' + ganancia;
}

function aumentarSaldo(){
  saldo += 2*costo;
}

function disminuyeSaldo(){
   saldo -=10;
}

function spinRuleta(){
  return Math.floor((Math.random() * 9))
}

function tirarRuleta(){
  numeroApuesta = document.getElementById("numero").value;
   switch(numeroApuesta){
     case 0:{
        alert('No tienes más saldo');
        return;
   }
     case "":{
       alert('ERROR: No se ha seleccionado un numero de la lista');
       return;
     }
  }
  if (salio!=-1){
    document.getElementById(salio).style.background="white";
  }
  numeroRuleta = spinRuleta();
  document.getElementById('ruleta').innerHTML=numeroRuleta;
  document.getElementById(numeroRuleta).style.background="red";
 if (numeroApuesta == numeroRuleta){
    alert ('Ganaste!');
    aumentarSaldo();
 }
 else{
   disminuyeSaldo();
   document.getElementById('numeroRuleta');
   alert('Perdiste salio el ' + numeroRuleta + ' Saldo actual $ ' + saldo);
 }
document.getElementById('saldo').innerHTML='$' + saldo;
document.getElementById('numero').value="";
salio=numeroRuleta;
}
