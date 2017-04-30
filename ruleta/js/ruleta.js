"use strict";

alert('Bienvenido al juego de la ruleta!!!');

let apuesta0 = document.getElementById('0');
apuesta0.addEventListener("click",function(){selectNro(0);});

let apuesta1 = document.getElementById('1');
apuesta1.addEventListener("click",function(){selectNro(1);});

let apuesta2 = document.getElementById('2');
apuesta2.addEventListener("click",function(){selectNro(2);});

let apuesta3 = document.getElementById('3');
apuesta3.addEventListener("click",function(){selectNro(3);});

let apuesta4 = document.getElementById('4');
apuesta4.addEventListener("click",function(){selectNro(4);});

let apuesta5 = document.getElementById('5');
apuesta5.addEventListener("click",function(){selectNro(5);});

let apuesta6 = document.getElementById('6');
apuesta6.addEventListener("click",function(){selectNro(9);});

let apuesta7 = document.getElementById('7');
apuesta7.addEventListener("click",function(){selectNro(7);});

let apuesta8 = document.getElementById('8');
apuesta8.addEventListener("click",function(){selectNro(8);});

let apuesta9= document.getElementById('9');
apuesta9.addEventListener("click",function(){selectNro(9);});

let costo=10;
let saldo=100;
let numeroApuesta= -1;
let numeroRuleta=-1;
let salio=-1;
let selecciono=-1;

document.getElementById('saldo').innerHTML='$' + saldo;
document.getElementById('numero').value="";

function selectNro(nro){
  document.getElementById(nro).style.background="#17A600";
  let ganancia=2*nro;
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
