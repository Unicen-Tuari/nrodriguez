"use estrict";

alert('Hola');

var saldo=100;
var numeroApuesta= -1;
var numeroRuleta=-1;

function aumentarSaldo(){
  saldo += 10;
}

function disminuyeSaldo(){
   saldo -=1;
}

function spinRuleta(){
  return Math.floor((Math.random() * 9))
}

function tirarRuleta(){
  numeroApuesta = document.getElementById("numero").value;
  if (numeroApuesta >= 10 || numeroApuesta <0 || numeroApuesta==""){
    alert('ERROR: El numero debe ser entre 0 y 9');
    return;
  }

  numeroRuleta = spinRuleta();
  document.getElementById('ruleta').innerHTML;

 if (numeroApuesta == numeroRuleta){
    alert ('Ganaste!');
    aumentarSaldo();
 }
 else{
   alert('Segui Participando Papaaah!!!');
   disminuyeSaldo();
 }

console.log ('Apostaste al: ' + numeroApuesta);
console.log ('Saldo' + saldo);
}
