// Sweet Alert que pregunta al usuari si està segur que vol escollir aquella figura
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('enviar');
    
    btn.addEventListener('click', (event) => {
        event.preventDefault();

        let frm = document.getElementById('frm');

        Swal.fire({
            title: 'Seguro que quieres elegir esta figura?',
            icon: 'success',
            // html: 'Estas seguro?',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, enviar',
            cancelButtonText: 'No, cancelar'
        }).then(result => {
            if (result.isConfirmed) {
                frm.submit();
            }
        });
    });
});
