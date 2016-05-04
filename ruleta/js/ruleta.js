"use strict";

alert('Bienvenido al juego de la ruleta!!!');

var costo=10;
var saldo=100;
var numeroApuesta= -1;
var numeroRuleta=-1;
var salio=-1;
var selecciono=-1;

document.getElementById('saldo').innerHTML='$' + saldo;
document.getElementById('numero').value="";

function selectNro(nro){
  document.getElementById(nro).style.background="#17A600";
  ganancia=2*nro;
  if (selecciono!=-1){
    document.getElementById(selecciono).style.background="white";
  }
  selecciono=nro;
  document.getElementById('numero').value=nro;
  document.getElementById('valor').innerHTML=nro + '= ' + ganancia;
}

function aumentarSaldo(numeroApuesta){
  saldo += 2*numeroApuesta;
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
  salio=numeroRuleta;
  document.getElementById(numeroRuleta).style.background="red";
 if (numeroApuesta == numeroRuleta){
    alert ('Ganaste!');
    aumentarSaldo(numeroApuesta);
 }
 else{
   disminuyeSaldo();
   document.getElementById('numeroRuleta');
   alert('Perdiste salio el ' + numeroRuleta + ' Saldo actual $ ' + saldo);
 }

document.getElementById('saldo').innerHTML='$' + saldo;
document.getElementById('numero').value="";
}

function verificaSaldo(){
  if (saldo>0){
    tirarRuleta();
  }
  else{
    alert ('No tienes más saldo');
  }
}
