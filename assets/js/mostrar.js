/*==================== SELECCIONAR POR DONDE CONTACTARSE ====================*/

function mostrar(id) {
    // console.log(id);
        if (id == "Si por correo electronico") {
            $("#email").show();
            $("#wsp").hide();
        }
    
        if (id == "Si por whatsapp") {
            $("#email").hide();
            $("#wsp").show();
    }
    
        if (id == "No") {
            $("#email").hide();
            $("#wsp").hide();
    
        }
    
    }