"use strict"

const tijera = 3;
let cantObjetos = 3;
let puntosMaquina = 0;
let puntosJugador = 0;
let ultimaJugada = 0;
let cantidadPartidas = 1;

let imgJugador = document.getElementById("img-jugador")
let imgMaquina = document.getElementById('img-maquina');
let tabResultado = document.getElementById('resultados');
let jugador = document.getElementById('puntos-jugador');
let maquina = document.getElementById('puntos-maquina');
let resultPartida = document.getElementById("resultado-Partida");

let probabilidad = document.getElementById('probabilidad');

let botPapel = document.getElementById('bot-papel');
botPapel.addEventListener("click",function(){jugarPapel();});

let botPiedra = document.getElementById('bot-piedra');
botPiedra.addEventListener("click",function(){jugarPiedra();});

let botTijera = document.getElementById('bot-tijera');
botTijera.addEventListener("click",function(){jugarTijera();});

function obtenerNumObjeto(){
  return Math.floor(Math.random()*cantObjetos+1);
};

function jugarPapel(){
  imgJugador.src = "./imagenes/papelc.png";
  let numberObjectComp=obtenerNumObjeto();
   if ((ultimaJugada === tijera) && (probabilidad.checked)){
     numberObjectComp = 1;
   };
      switch (numberObjectComp) {
        case 1:{
          resultPartida.innerHTML = 'GANASTE';
          puntosJugador += 1;
          jugador.innerHTML = puntosJugador;
          imgMaquina.src = "./imagenes/piedrac.png";
          ultimaJugada = 0;
         break;
       };
        case 2:{
          resultPartida.innerHTML = 'EMPATE';
          imgMaquina.src = "./imagenes/papelc.png";
          break;
        };
        case 3:{
          resultPartida.innerHTML = 'PERDISTE';
          puntosMaquina += 1;
          maquina.innerHTML = puntosMaquina;
          imgMaquina.src = "./imagenes/tijerac.png";
          ultimaJugada = 3;
          break;
        };
      };
      addResultTable(resultPartida.innerHTML);
};

function jugarPiedra(){
  imgJugador.src = "./imagenes/piedrac.png";
  let numberObjectComp=obtenerNumObjeto();
  if ((ultimaJugada === tijera) && (probabilidad.checked)){
    numberObjectComp = 1;
  };
      switch (numberObjectComp) {
        case 1:{
          resultPartida.innerHTML = 'EMPATE';
          imgMaquina.src = "./imagenes/piedrac.png";
          ultimaJugada = 0;
          break;
        }
        case 2:{
          resultPartida.innerHTML = 'PERDISTE';
          puntosMaquina += 1;
          maquina.innerHTML = puntosMaquina;
          imgMaquina.src = "./imagenes/papelc.png";
          break;
        }
        case 3:{
          resultPartida.innerHTML = 'GANASTE';
          puntosJugador +=1;
          jugador.innerHTML = puntosJugador;
          imgMaquina.src= "./imagenes/tijerac.png";
          ultimaJugada = 3;
        break;
      };
    };
    addResultTable(resultPartida.innerHTML);
};


function jugarTijera(){
  imgJugador.src = "./imagenes/tijerac.png";
  let numberObjectComp=obtenerNumObjeto();
  if ((ultimaJugada === tijera) && (probabilidad.checked)){
    numberObjectComp = 1;
  };
      switch (numberObjectComp) {
        case 1:{
          resultPartida.innerHTML = 'PERDISTE';
          puntosMaquina +=1;
          maquina.innerHTML = puntosMaquina;
          imgMaquina.src= "./imagenes/piedrac.png";
          ultimaJugada = 0;
          break;
        };
        case 2:{
          resultPartida.innerHTML = 'GANASTE';
          puntosJugador += 1;
          jugador.innerHTML = puntosJugador;
          imgMaquina.src = "./imagenes/papelc.png";
         break;
        };
        case 3:{
          resultPartida.innerHTML = 'EMPATE';
          imgMaquina.src = "./imagenes/tijerac.png";
          ultimaJugada = 3;
          break;
        };
      };
      addResultTable(resultPartida.innerHTML);
};

function addResultTable(resultadoPartida){
  let  infoPartida= document.createElement("tr");
  let  ganadorPartida = document.createElement("td");
  let  numeroParitda = document.createElement("td");
  switch (resultadoPartida){
    case "GANASTE":
      ganadorPartida.innerHTML = "HUMANO";
      numeroParitda.innerHTML = cantidadPartidas;
      break;
    case "PERDISTE" :{
      ganadorPartida.innerHTML = "COMPUTADORA";
      numeroParitda.innerHTML = cantidadPartidas;
      break;
    };
    case "EMPATE" :{
      ganadorPartida.innerHTML = "NINGUNO";
      numeroParitda.innerHTML = cantidadPartidas;
      break;
    };
  };
  infoPartida.append(numeroParitda);
  infoPartida.append(ganadorPartida);
  tabResultado.append(infoPartida);
  cantidadPartidas += 1;
};
