<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <title>SisPag</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container-fluid">    
        <div class="row">
            <div class="col-sm-4 bg-dark text-white"></div>
            <div class="col-sm-4 bg-dark text-white">
                <h1 class="text-center">SisPag</h1>
                <br />
                <h3 class="text-center">Calculo salarial</h3> 
            </div>
            <div class="col-sm-4 bg-dark text-white"></div>
        </div>
    </div>
    
    <div class="container-fluid" style="height:90px;">
        <div class="col-sm-12 bg-white">
          <br />
          <h1 class="text-center"> Login </h1>
        </div>
      
        <div class="container-fluid bg-info">
          <form action="../controller/LoginFormularioController.php" method= "POST">
            <div class="row bg-info">
                <div class="col-sm"><br /><br /><br /></div>
        </div> 
        
        <div class="row bg-info text-center">
            <div class="col-sm-4"> </div>
                <div class="col-sm-4 text-center"><b>Usuário: </b><br />
                <input type="text" placeholder="nome/usuario" name="_usuario" required>
                </div>
        </div>
        
        <div class="col-sm-4"></div> <br />
        
        <div class="row bg-info text-center">
            <div class="col-sm-4"></div>
               <div class="col-sm-4 text-center"><b>Senha: </b><br />
                <input type="password" name="_senha" required>
               </div>
        </div> 
        
        <div class="col-sm-4"></div> <br />
        
        <div class="bg-info text-center">
            <input class="col-sm-1 btn btn-dark" type="submit" value="Entrar">
        </div>
        
        <div class="row bg-info">
            <div class="col-sm"><br /></div>
        </div> 
        
        <div class="bg-info text-center">
            <a class="btn btn-outline-dark" role="button" href='http://www.google.com.br'>Esqueceu a senha?</a>
        </div>
        
        <div class="row bg-info">
            <div class="col-sm"><br /><br /><br /></div>
        </div> 
    </div>
</body>
</html>