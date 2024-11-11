function validar() {
    let tipoFigura = document.getElementById('figura').value;

    if (tipoFigura === 'cuadrado') {
        let lado = document.getElementById('lado').value;
        let errorlado = document.getElementById('errorlado');

        if (lado === "" || lado < 1) {
            errorlado.innerHTML = 'El campo no puede estar vacío o tener un valor menor que 1';
            errorlado.style.color = 'red';
            return false;
        } else {
            errorlado.innerHTML = '';
            errorlado.style.color = '';
        }
    }

    if (tipoFigura === 'rectangulo') {
        let lado1 = document.getElementById('lado1').value;
        let lado2 = document.getElementById('lado2').value;
        let errorlado1 = document.getElementById('errorlado1');
        let errorlado2 = document.getElementById('errorlado2');

        if (lado1 === "" || lado1 < 1) {
            errorlado1.innerHTML = 'El campo no puede estar vacío o tener un valor menor que 1';
            errorlado1.style.color = 'red';
            return false;
        } else {
            errorlado1.innerHTML = '';
            errorlado1.style.color = '';
        }

        if (lado2 === "" || lado2 < 1) {
            errorlado2.innerHTML = 'El campo no puede estar vacío o tener un valor menor que 1';
            errorlado2.style.color = 'red';
            return false;
        } else {
            errorlado2.innerHTML = '';
            errorlado2.style.color = '';
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
            errorlado1.style.color = 'red';
            return false;
            exit();
        } else {
            errorlado1.innerHTML = '';
            errorlado1.style.color = '';
        }

        if (lado2 === "" || lado2 < 1) {
            errorlado2.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            errorlado2.style.color = 'red';
            return false;
            exit();
        } else {
            errorlado2.innerHTML = '';
            errorlado2.style.color = '';
        }

        if (lado3 === "" || lado3 < 1) {
            errorlado3.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            errorlado3.style.color = 'red';
            return false;
            exit();
        } else {
            errorlado3.innerHTML = '';
            errorlado3.style.color = '';
        }

    }

    if (tipoFigura === 'circulo') {
        let radio = document.getElementById('radio').value;
        let errorradio = document.getElementById('errorradio');
        console.log(radio);
        if (radio === "" || radio < 1) {
            errorradio.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            errorradio.style.color = 'red';
            return false;
            exit();
        } else {
            errorradio.innerHTML = '';
            errorradio.style.color = '';
        }
    }

    if (tipoFigura === 'trapecio') {
        let lado1 = document.getElementById('lado1').value;
        let lado2 = document.getElementById('lado2').value;
        let altura = document.getElementById('altura').value;
        let errorlado1 = document.getElementById('errorlado1');
        let errorlado2 = document.getElementById('errorlado2');
        let erroraltura = document.getElementById('erroraltura');

        if (lado1 === "" || lado1 < 1) {
            errorlado1.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            errorlado1.style.color = 'red';
            return false;
            exit();
        } else {
            errorlado1.innerHTML = '';
            errorlado1.style.color = '';
        }

        if (lado2 === "" || lado2 < 1) {
            errorlado2.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            errorlado2.style.color = 'red';
            return false;
            exit();
        } else {
            errorlado2.innerHTML = '';
            errorlado2.style.color = '';
        }

        if (altura === "" || altura < 1) {
            erroraltura.innerHTML = 'El campo no puede estar vacio o tener un valor menor que 1';
            erroraltura.style.color = 'red';
            return false;
            exit();
        } else {
            erroraltura.innerHTML = '';
            erroraltura.style.color = '';
        }

    }

    return true;
}
