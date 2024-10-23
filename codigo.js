function validar() {
    let tipoFigura = document.getElementById('figura').value;

    if (tipoFigura === 'cuadrado') {
        let lado = document.getElementById('lado').value;
        let errorlado = document.getElementById('errorlado');
        console.log(lado);
        if (lado === "" || lado < 1) {
            errorlado.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            return false;
            exit();
        } else {
            errorlado.innerHTML = '';
        }
    }

    if (tipoFigura === 'rectangulo') {
        let lado1 = document.getElementById('lado1').value;
        let lado2 = document.getElementById('lado2').value;
        let errorlado1 = document.getElementById('errorlado1');
        let errorlado2 = document.getElementById('errorlado2');

        if (lado1 === "" || lado1 < 1) {
            errorlado1.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            return false;
            exit();
        } else {
            errorlado1.innerHTML = '';
        }

        if (lado2 === "" || lado2 < 1) {
            errorlado2.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            return false;
            exit();
        } else {
            errorlado2.innerHTML = '';
        }
    }

    if (tipoFigura === 'triangulo') {
        let lado1 = document.getElementById('lado1').value;
        let lado2 = document.getElementById('lado2').value;
        let lado3 = document.getElementById('lado3').value;
        let errorlado1 = document.getElementById('errorlado1');
        let errorlado2 = document.getElementById('errorlado2');
        let errorlado3 = document.getElementById('errorlado3');

        if (lado1 === "" || lado1 < 1) {
            errorlado1.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            return false;
            exit();
        } else {
            errorlado1.innerHTML = '';
        }

        if (lado2 === "" || lado2 < 1) {
            errorlado2.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            return false;
            exit();
        } else {
            errorlado2.innerHTML = '';
        }

        if (lado3 === "" || lado3 < 1) {
            errorlado3.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            return false;
            exit();
        } else {
            errorlado3.innerHTML = '';
        }

    }

    if (tipoFigura === 'circulo') {
        let radio = document.getElementById('radio').value;
        let errorradio = document.getElementById('errorradio');
        console.log(radio);
        if (radio === "" || radio < 1) {
            errorradio.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            return false;
            exit();
        } else {
            errorradio.innerHTML = '';
        }
    }

    return true;
}
