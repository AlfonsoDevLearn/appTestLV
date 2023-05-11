<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <small>Enviado por: {{$msg['name'] .' - '. $msg['email']}}</small><br>
    <small><strong>Asunto: {{$msg['subject']}}</strong></small> <br>
    <small>Mensaje:</small> <br>
    <small>{{$msg['content']}}</small><br>
</body>
</html>