function Eliminarproducto(id) {
    parametros = {"id":id}
    $.ajax({
        data:parametros,
        url:'scv_eliminar.php',
        type:'POST',
        beforeSed:function(){},
        success:function(){
            
            Swal.fire({
                title: '¡Eliminado!',
                text: 'El cv ha sido eliminado.', 
                icon: 'success',
                confirmButtonColor: '#CB4343',
                confirmButtonText: 'Aceptar'
            }) .then((result) => {
                if (result.isConfirmed) {
                   location.reload();
                    
                }
            })

        },
    })
}

function AlertarEliminacion(id) {

    Swal
        .fire({
            title: '¿Está seguro que desea eliminar el cv?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#CB4343',
            cancelButtonColor: '#3085d6',
            confirmButtonText: '¡Sí, elimínelo!',
            cancelButtonText: 'Cancelar'
        })
        .then((result) => {
            if (result.isConfirmed) {
                Eliminarproducto(id);                
            }
        })

}