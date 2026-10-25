document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault();
    calcularPrimos();
});

function calcularPrimos() {
    let numero = parseInt(document.getElementById("numero").value);
    let resultado = "<table border='1'style='width: 700px'><tr>";

    for (let i = 1; i <= numero; i++) {
        let esPrimo = true;

        if (i < 2) {
            esPrimo = false;
        } else {
            for (let j = 2; j < i; j++) {
                if (i % j == 0) {
                    esPrimo = false;
                }
            }
        }

        if (esPrimo) {
            resultado = resultado + "<td>" + i + "</td>";
        }
    }

    resultado = resultado + "</tr></table>";

    document.getElementById("resultado").innerHTML = resultado;
}