"use strict"

const objeto=3;
let imgPlayer = document.getElementById("img-jugador")
let imgComputer = document.getElementById('img-maquina');
let result = document.getElementById('resultado');
let player = document.getElementById('puntos-jugador');
let computer = document.getElementById('puntos-maquina');
let pointsPlayer = 0;
let pointsComputer = 0;

let botPapel = document.getElementById('bot-papel');
botPapel.addEventListener("click",function(){playWPaper();});

let botPiedra = document.getElementById('bot-piedra');
botPiedra.addEventListener("click",function(){playWStone();});

let botTijera = document.getElementById('bot-tijera');
botTijera.addEventListener("click",function(){playWScissors();});

let check=document.getElementById('probabilidad');
check.addEventListener("click",function(){probabilidad();});


function getNumObjet(){
  return Math.floor(Math.random()*objeto+1);
};

function probability(){
    if (check.checked){

    }
};

function playWPaper(){
  imgPlayer.src = "./imagenes/papelc.png";
  let numberObjectComp=getNumObjet();
      switch (numberObjectComp) {
        case 1:{
          result.innerHTML = 'GANASTE';
          pointsPlayer +=1;
          player.innerHTML = pointsPlayer;
          imgComputer.src= "./imagenes/piedrac.png";
         break;
        }
        case 2:{
          result.innerHTML = 'EMPATE';
          imgComputer.src = "./imagenes/papelc.png";
          break;
        }
        case 3:{
          result.innerHTML = 'PERDISTE';
          pointsComputer +=1;
          computer.innerHTML = pointsComputer;
          imgComputer.src= "./imagenes/tijerac.png";
          break;
        }
      }
};

function playWStone(){
  imgPlayer.src = "./imagenes/piedrac.png";
  let numberObjectComp=getNumObjet();
      switch (numberObjectComp) {
        case 1:{
          result.innerHTML = 'EMPATE';
          imgComputer.src = "./imagenes/piedrac.png";
          break;
        }
        case 2:{
          result.innerHTML = 'PERDISTE';
          pointsComputer +=1;
          computer.innerHTML = pointsComputer;
          imgComputer.src= "./imagenes/papelc.png";
          break;
        }
        case 3:{
          result.innerHTML = 'GANASTE';
          pointsPlayer +=1;
          player.innerHTML = pointsPlayer;
          imgComputer.src= "./imagenes/tijerac.png";
        break;
        }

      }
};


function playWScissors(){
  imgPlayer.src = "./imagenes/tijerac.png";
  let numberObjectComp=getNumObjet();
      switch (numberObjectComp) {
        case 1:{
          result.innerHTML = 'PERDISTE';
          pointsComputer +=1;
          computer.innerHTML = pointsComputer;
          imgComputer.src= "./imagenes/piedrac.png";
          break;
        }
        case 2:{
          result.innerHTML = 'GANASTE';
          pointsPlayer +=1;
          player.innerHTML = pointsPlayer;
          imgComputer.src= "./imagenes/papelc.png";
         break;
        }
        case 3:{
          result.innerHTML = 'EMPATE';
          imgComputer.src = "./imagenes/tijerac.png";
          break;
        }

      }
};
