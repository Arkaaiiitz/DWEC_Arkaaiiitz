let morse = {
    "A": ".-", "B": "-...", "C": "-.-.", "D": "-..",
    "E": ".", "F": "..-.", "G": "--.", "H": "....",
    "I": "..", "J": ".---", "K": "-.-", "L": ".-..",
    "M": "--", "N": "-.", "Ñ": "--.--", "O": "---",
    "P": ".--.", "Q": "--.-", "R": ".-.", "S": "...",
    "T": "-", "U": "..-", "V": "...-", "W": ".--",
    "X": "-..-", "Y": "-.--", "Z": "--..",
    "0": "-----", "1": ".----", "2": "..---",
    "3": "...--", "4": "....-", "5": ".....",
    "6": "-....", "7": "--...", "8": "---..",
    "9": "----.", ".": ".-.-.-", ",": "--..--",
    "?": "..--..", "!": "-.-.--", "/": "-..-."
};

let texto = window.prompt("Introduce un texto: ");
let resultado = "";
let esMorse = true;

//Comprobar si el texto está vacío o no se ha puesto nada directamente
if (texto == null || texto == ""){
    console.log("Debes escribir algo, intentalo de nuevo por favor");
} else {
    texto = texto.toUpperCase();

    //Comprobar si es Morse o no
    for(let i = 0; i < texto.length; i++){
        if(texto[i] != " " && texto[i] != "." && texto[i] != "-"){
            esMorse = false;
        }
    }

    //De Morse a texto
    if(esMorse){
        let palabras = texto.split("  ");
        for(let i = 0; i < palabras.length; i++){
            let letras = palabras[i].split(" ");
            for(let j = 0; j < letras.length; j++){
                for(let letra in morse){
                    if(morse[letra] == letras[j]){
                        resultado = resultado + letra;
                    }
                }
            }
            if(i < palabras.length - 1){
                resultado = resultado +  " ";
            }
        }
    //De texto a Morse
    } else {
        for(let i = 0; i < texto.length; i++){
            if(texto[i] == " "){
                resultado = resultado + "  ";
            } else {
                for(let letra in morse){
                    if(letra == texto[i]){
                        resultado = resultado + morse[letra];
                    }
                }
                if(i < texto.length - 1 && texto[i + 1] != " "){
                    resultado = resultado + " ";
                }
            }
        }
    }

    //Mostrar el resultado en la página
    document.getElementById("resultado").textContent = "Resultado: " + resultado;
}



