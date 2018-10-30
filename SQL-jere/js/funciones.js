//  confirmación de baja
    function confirmarBajaMarca(){
        const swalWithBootstrapButtons = swal.mixin({
            confirmButtonClass: 'btn btn-success m-1',
            cancelButtonClass: 'btn btn-danger m-1',
            buttonsStyling: false,
        });

        swalWithBootstrapButtons({
            title: '¿está seguro?',
            text: "La marca seleccionada se eliminará",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirmar baja',
            cancelButtonText: 'No eliminar marca',
            reverseButtons: false
        }).then((result) => {
            if (result.value) {
                window.location = 'borrarMarca.php';
                return false;
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                window.location = 'adminMarcas.php';
                return false;
            }
        })
    }
