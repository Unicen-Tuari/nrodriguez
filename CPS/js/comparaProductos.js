"use strict";

let producto=document.getElementById("producto1");
let cantidadProductos=0;
let boton = document.createElement("button");
boton.type = "button";
boton.value = "comparar";
boton.innerText = "comparar";
boton.id="comparar";
$(boton).click(function(){
   comparar();
});
let lista=document.getElementById("listaCompara");


$(document).ready(function() {

  $('#producto1').click(function(){
    sumarCantProd();
    mostrarMenu();
  });

  $('#producto2').click(function(){
    sumarCantProd();
    mostrarMenu();
  });
});

function sumarCantProd(){
  cantidadProductos+=1;
};

function mostrarMenu(){
 if (cantidadProductos > 1){
   let lista=document.getElementById("listaCompara");
    lista.append(boton);
 };
};

function comparar(){
  location.href="./compararProductos.html";
};
