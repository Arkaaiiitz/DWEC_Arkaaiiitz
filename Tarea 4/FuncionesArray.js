let array = [95, 95, 14, 83, 58, 33, 65, 52, 7, 72, 13, 46, 19, 31,
27, 36, 30, 86, 88, 88, 68, 16, 5, 14, 41, 56, 89, 11, 6, 29, 72,
11, 69, 36, 16, 11, 82, 84, 32, 84, 95, 98, 76, 99, 100, 12, 89, 1,
92, 27, 66, 48, 38, 49, 30, 40, 87, 19, 31, 37, 5, 32, 9, 33, 98,
94, 5, 15, 4, 88, 47, 34, 83, 8, 31, 4, 2, 72, 31, 39, 15, 10, 46,
78, 11, 21, 92, 22, 83, 3, 6, 71, 39, 54, 50, 77, 13, 85, 7, 36];

function ordenar(array){
    let copia = array.slice();

    for(let i = 0; i < copia.length; i++){
        let min = i;
        for (let j = i + 1; j < copia.length; j++){
            if(copia[j] < copia[min]){
                min = j;
            }
        }
        let aux = copia[i];
        copia[i] = copia[min];
        copia[min] = aux;
    }

    return copia;
    
}

function imparesOrdenados(array){
    let impares = [];

    for(let i = 0; i < array.length; i++){
        if(array[i] % 2 != 0){
            impares.push(array[i]);
        }
    }

    return ordenar(impares);
}

function imparesDosCifras(array){
    let impares = [];

    for(let i = 0; i < array.length; i++){
        if(array[i] % 2 != 0 && array[i] >= 10 && array[i] <= 99){
            impares.push(array[i]);
        }
    }

    return impares;
}

function frecuencia(array){
    let frecuencias = [];

    for(let i = 0; i < array.length; i++){
        let cont = 0;

        for(let j = 0; j < array.length; j++){
            if(array[i] == array[j]){
                cont++;
            }
        }

        frecuencias.push(cont);
    }

    return frecuencias;
}

console.log("Array ordenado:", ordenar(array));

console.log("Impares ordenados:", imparesOrdenados(array));

console.log("Impares de dos cifras:", imparesDosCifras(array));

console.log("Frecuencia:", frecuencia(array));