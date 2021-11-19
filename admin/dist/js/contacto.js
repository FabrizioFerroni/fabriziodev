function Eliminarcontacto(id) {
    parametros = {"id":id}
    $.ajax({
        data:parametros,
        url:'contacto-borrar.php',
        type:'POST',
        beforeSed:function(){},
        success:function(){
            
            Swal.fire({
                title: '¡Eliminado!',
                text: 'El correo ha sido eliminado.', 
                icon: 'success',
                confirmButtonColor: '#CB4343',
                confirmButtonText: 'Aceptar'
            }) .then((result) => {
                if (result.isConfirmed) {
                   location.reload();
                    // console.log(id);
                }
            })

        },
    })
}

function AlertarEliminacion(id) {
    // console.log(id);
    Swal
        .fire({
            title: '¿Está seguro que desea eliminar el correo?',
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
                Eliminarcontacto(id);                
            }
        })

}

// Leido
function marcarLeido(id) {
    parametros = {"id":id}
    $.ajax({
        data:parametros,
        url:'contacto-leido.php',
        type:'POST',
        beforeSed:function(){},
        success:function(){
            
            Swal.fire({
                title: '¡Leido!',
                text: 'El correo ha sido marcado como leido.', 
                icon: 'success',
                confirmButtonColor: '#CB4343',
                confirmButtonText: 'Aceptar'
            }) .then((result) => {
                if (result.isConfirmed) {
                   location.reload();
                    // console.log(id);
                }
            })

        },
    })
}

function AlertarLeida(id) {
    // console.log(id);
    Swal
        .fire({
            title: '¿Está seguro que desea marcar como leido el correo?',
            // text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#CB4343',
            cancelButtonColor: '#3085d6',
            confirmButtonText: '¡Sí, marquelo como leido!',
            cancelButtonText: 'Cancelar'
        })
        .then((result) => {
            if (result.isConfirmed) {
                // console.log(id);
                marcarLeido(id);                
            }
        })

}

 //No Leido
function marcarNoLeido(id) {
    parametros = {"id":id}
    $.ajax({
        data:parametros,
        url:'contacto-noleido.php',
        type:'POST',
        beforeSed:function(){},
        success:function(){
            
            Swal.fire({
                title: '¡No Leido!',
                text: 'El correo ha sido marcado como no leido.', 
                icon: 'success',
                confirmButtonColor: '#CB4343',
                confirmButtonText: 'Aceptar'
            }) .then((result) => {
                if (result.isConfirmed) {
                   location.reload();
                    // console.log(id);
                }
            })

        },
    })
}

function AlertarNoLeido(id) {

    Swal
        .fire({
            title: '¿Está seguro que desea marcar como no leido el correo?',
            // text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#CB4343',
            cancelButtonColor: '#3085d6',
            confirmButtonText: '¡Sí, marquelo como no leido!',
            cancelButtonText: 'Cancelar'
        })
        .then((result) => {
            if (result.isConfirmed) {
                marcarNoLeido(id);                
            }
        })

}