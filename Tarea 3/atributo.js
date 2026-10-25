//Ejercicio 1 (Atributo)
let atributo = document.querySelector("div");
alert(atributo.getAttribute("data-widget-name"));

//Ejercicio 2 (Enlaces externos naranjas)
/*let enlaces = document.querySelectorAll('a[href*="://"]');
enlaces.forEach(function(enlaces){
    if(!enlaces.href.startsWith("http://internal.com")){
        enlaces.style.color = "orange";
    }
});*/

//Ejercicio 3 (Usando una clase)
let enlacesExternos = document.querySelectorAll('.externo');
enlacesExternos.forEach(function(enlacesExternos){
    enlacesExternos.style.color = "orange";
});