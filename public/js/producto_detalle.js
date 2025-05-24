import Swal from 'https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/+esm'

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('alerta', (event) => {
        const title = event.detail;
        Swal.fire({
            title: `${title}`,
            icon: 'success',
            confirmButtonText: 'Perfecto!'
        })
    })
})