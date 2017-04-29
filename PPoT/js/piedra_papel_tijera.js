"use strict"

const tijera = 3;
let cantObjetos = 3;
let imgPlayer = document.getElementById("img-jugador")
let imgComputer = document.getElementById('img-maquina');
let result = document.getElementById('resultado');
let player = document.getElementById('puntos-jugador');
let computer = document.getElementById('puntos-maquina');
let pointsPlayer = 0;
let pointsComputer = 0;
let probability = document.getElementById('probabilidad');
let ultimaJugada = 0;

let botPapel = document.getElementById('bot-papel');
botPapel.addEventListener("click",function(){playWPaper();});

let botPiedra = document.getElementById('bot-piedra');
botPiedra.addEventListener("click",function(){playWStone();});

let botTijera = document.getElementById('bot-tijera');
botTijera.addEventListener("click",function(){playWScissors();});

let check = document.getElementById('probabilidad');
check.addEventListener("click",function(){probabilidad();});


function getNumObjet(){
  return Math.floor(Math.random()*cantObjetos+1);
};

function playWPaper(){
  imgPlayer.src = "./imagenes/papelc.png";
  let numberObjectComp=getNumObjet();
   if ((ultimaJugada === tijera) && (probability.checked)){
     numberObjectComp = 1;
   };
      switch (numberObjectComp) {
        case 1:{
          result.innerHTML = 'GANASTE';
          pointsPlayer += 1;
          player.innerHTML = pointsPlayer;
          imgComputer.src = "./imagenes/piedrac.png";
          ultimaJugada = 0;
         break;
       };
        case 2:{
          result.innerHTML = 'EMPATE';
          imgComputer.src = "./imagenes/papelc.png";
          break;
        };
        case 3:{
          result.innerHTML = 'PERDISTE';
          pointsComputer += 1;
          computer.innerHTML = pointsComputer;
          imgComputer.src = "./imagenes/tijerac.png";
          ultimaJugada = 3;
          break;
        };
      };
};

function playWStone(){
  imgPlayer.src = "./imagenes/piedrac.png";
  let numberObjectComp=getNumObjet();
  if ((ultimaJugada === tijera) && (probability.checked)){
    numberObjectComp = 1;
  };
      switch (numberObjectComp) {
        case 1:{
          result.innerHTML = 'EMPATE';
          imgComputer.src = "./imagenes/piedrac.png";
          ultimaJugada = 0;
          break;
        }
        case 2:{
          result.innerHTML = 'PERDISTE';
          pointsComputer += 1;
          computer.innerHTML = pointsComputer;
          imgComputer.src = "./imagenes/papelc.png";
          break;
        }
        case 3:{
          result.innerHTML = 'GANASTE';
          pointsPlayer +=1;
          player.innerHTML = pointsPlayer;
          imgComputer.src= "./imagenes/tijerac.png";
          ultimaJugada = 3;
        break;
      };
    };
};


function playWScissors(){
  imgPlayer.src = "./imagenes/tijerac.png";
  let numberObjectComp=getNumObjet();
  if ((ultimaJugada === tijera) && (probability.checked)){
    numberObjectComp = 1;
  };
      switch (numberObjectComp) {
        case 1:{
          result.innerHTML = 'PERDISTE';
          pointsComputer +=1;
          computer.innerHTML = pointsComputer;
          imgComputer.src= "./imagenes/piedrac.png";
          ultimaJugada = 0;
          break;
        };
        case 2:{
          result.innerHTML = 'GANASTE';
          pointsPlayer += 1;
          player.innerHTML = pointsPlayer;
          imgComputer.src = "./imagenes/papelc.png";
         break;
        };
        case 3:{
          result.innerHTML = 'EMPATE';
          imgComputer.src = "./imagenes/tijerac.png";
          ultimaJugada = 3;
          break;
        };
      };
};
