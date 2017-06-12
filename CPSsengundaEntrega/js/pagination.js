"use strict"
let page1 = document.getElementById('1');
page1.addEventListener("click",function(){selectPage(1);});

let page2 = document.getElementById('2');
page2.addEventListener("click",function(){selectPage(2);});

let page3 = document.getElementById('3');
page3.addEventListener("click",function(){selectPage(3);});

let page4 = document.getElementById('4');
page4.addEventListener("click",function(){selectPage(4);});

function selectPage(nro){
pag1=document.getElementById(nro);
pag1.className="none";
}
