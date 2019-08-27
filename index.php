<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row bg-primary">
            <div class="col-12 h2 m-4">Email</div>
        </div>
        <form action="proceso.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">direccion de correo destino</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email destino" name="destino">
                <label for="exampleInputEmail1">Asunto</label>
                <input type="text" class="form-control" aria-describedby="emailsubject" placeholder="Asunto" name="asunto">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mensage</label>
                <div class="w-100"></div>
                <textarea name="mensaje"  cols="120" rows="10"></textarea>
            </div>
           <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    
</body>
</html>