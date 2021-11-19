const base = location.protocol + '//' + location.host;
const url = base + '/admin/dist/img/loading.svg' ; 
console.log(url);



document.addEventListener('DOMContentLoaded', function() {
    
    
 var form_avatar_change = document.getElementById('form_avatar_change');
 var btn_avatar_edit = document.getElementById('btn_avatar_edit');
 var input_file_avatar = document.getElementById('input_file_avatar');
 var avatar_changee_overlay = document.getElementById('avatar_changee_overlay');


 var btn_avatar_edit2 = document.getElementById('btn_avatar_edit2');
 var input_file_avatar2 = document.getElementById('input_file_avatar2');
 var avatar_changee_overlay2 = document.getElementById('avatar_changee_overlay2');

 if (btn_avatar_edit) {
    btn_avatar_edit.addEventListener('click', function(e) {
        e.preventDefault();
        input_file_avatar.click();
    });
}

if (input_file_avatar) {
    input_file_avatar.addEventListener('change', function() {
        var load_img = '<img src="' + base + '/admin/dist/img/loading.svg" >';
        avatar_changee_overlay.innerHTML = load_img;
        avatar_changee_overlay.style.display = 'flex';
        // form_avatar_change.submit();
    })
}


if (btn_avatar_edit2) {
    btn_avatar_edit2.addEventListener('click', function(e) {
        e.preventDefault();
        input_file_avatar2.click();
    });
}

if (input_file_avatar2) {
    input_file_avatar2.addEventListener('change', function() {
        var load_img2 = '<img src="' + base + '/admin/dist/img/loading.svg" >';
        avatar_changee_overlay2.innerHTML = load_img2;
        avatar_changee_overlay2.style.display = 'flex';
        // form_avatar_change.submit();
    })
}

});


function Eliminarproducto(id) {
    parametros = {"id":id}
    $.ajax({
        data:parametros,
        url:'deluser.php',
        type:'POST',
        beforeSed:function(){},
        success:function(){
            
            Swal.fire({
                title: '¡Eliminado!',
                text: 'El usuario ha sido eliminado.', 
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
            title: '¿Está seguro que desea eliminar este usuario?',
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