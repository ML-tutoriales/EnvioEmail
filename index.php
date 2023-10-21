<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Envio de correo</title>
    </head>
    <body>
        <h3>Enviar email</h3>
        <input type="text" id="subject" placeholder="Asunto">
        <br><br>
        <input type="email" id="email" placeholder="Email">
        <br><br>
        <textarea id="message" placeholder="Mensaje"></textarea>
        <br><br>
        <button id="btnEnviarEmail">Enviar Email</button>
        
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/envioEmail.js"></script>
    </body>
</html>
