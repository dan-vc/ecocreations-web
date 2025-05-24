import Swal from 'https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/+esm'

document.addEventListener('DOMContentLoaded', function () {
    Livewire.on('swal:confirm', data => {
        Swal.fire({
            title: "¿Estás seguro?",
            text: '¿Deseas eliminar este producto del carrito?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                console.log(data[0]);
                Livewire.dispatch('confirmarEliminacion', data[0].id);
            }
        });
    });
});