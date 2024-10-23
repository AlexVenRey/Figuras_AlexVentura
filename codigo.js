document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');

    if (form) {
        form.addEventListener('submit', function(event) {
            let isValid = true;
            let errorMessage = '';
            const figura = document.querySelector('input[name="figura"]').value;

            // Mostramos mensaje de error para cuadrado
            if (figura === 'cuadrado') {
                const lado = document.getElementById('lado');
                if (!validateField(lado)) {
                    isValid = false;
                    errorMessage = 'El lado del cuadrado debe ser mayor que 0.';
                    showValidationError(lado, errorMessage);
                }
            }

            // Mostramos mensaje de error para triangulo
            if (figura === 'triangulo') {
                const lado1 = document.getElementById('lado1');
                const lado2 = document.getElementById('lado2');
                const lado3 = document.getElementById('lado3');

                if (!validateField(lado1)) {
                    isValid = false;
                    errorMessage = 'El lado 1 del triángulo debe ser mayor que 0.';
                    showValidationError(lado1, errorMessage);
                }

                if (!validateField(lado2)) {
                    isValid = false;
                    errorMessage = 'El lado 2 del triángulo debe ser mayor que 0.';
                    showValidationError(lado2, errorMessage);
                }


                if (!validateField(lado3)) {
                    isValid = false;
                    errorMessage = 'El lado 3 del triángulo debe ser mayor que 0.';
                    showValidationError(lado3, errorMessage);
                }

            }

            // Mostramos mensaje de error para rectangulo
            if (figura === 'rectangulo') {
                const lado1 = document.getElementById('lado1');
                const lado2 = document.getElementById('lado2');
                
                if (!validateField(lado1)) {
                    isValid = false;
                    errorMessage = 'El lado 1 del rectángulo debe ser mayor que 0.';
                    showValidationError(lado1, errorMessage);
                }

                if (!validateField(lado2)) {
                    isValid = false;
                    errorMessage = 'El lado 2 del rectángulo debe ser mayor que 0.';
                    showValidationError(lado2, errorMessage);
                }

            }

            // Mostramos mensaje de error para circulo
            if (figura === 'circulo') {
                const radio = document.getElementById('radio');
                
                if (!validateField(radio)) {
                    isValid = false;
                    errorMessage = 'El radio del círculo debe ser mayor que 0.';
                    showValidationError(radio, errorMessage);
                }
            }

            if (!isValid) {
                event.preventDefault();
                showAlert('Error en la validación', errorMessage, 'error');
            }
        });

        function validateField(field) {
            return field && field.value > 0;
        }

        function showValidationError(field, message) {
            let errorText = field.nextElementSibling;
            if (!errorText || !errorText.classList.contains('error-text')) {
                errorText = document.createElement('small');
                errorText.classList.add('error-text', 'text-danger');
                field.parentNode.appendChild(errorText);
            }
            errorText.textContent = message;
        }

        form.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', function() {
                const errorText = this.nextElementSibling;
                if (errorText && errorText.classList.contains('error-text')) {
                    errorText.textContent = '';
                }
            });
        });
    }

    function showAlert(title, text, icon) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
            confirmButtonText: 'Aceptar'
        });
    }
});
