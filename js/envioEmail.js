/* Boton para enviar email, se llama desde la vista index con el id="btnEnviarEmail" */
 $('#btnEnviarEmail').click(function() {
    const subject = $('#subject').val();
    const email = $('#email').val();
    const message = $('#message').val();

    var datos = new FormData();
    datos.append("subject", subject);
    datos.append("email", email);
    datos.append("message", message);

    $.ajax({
        url: "controller/procesar.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            console.log("respuesta", respuesta);
            if (respuesta === "ok") {
                alert("Email enviado");
            } else {
                alert("Ocurrio un error" + respuesta);
            }
        }
    });
});


