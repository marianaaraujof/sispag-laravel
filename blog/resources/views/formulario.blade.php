<!DOCTYPE html>
<html lang="pt-br">

<head>
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
      <div class="col-sm-4 bg-dark text-white">
      </div>
      <div class="col-sm-4 bg-dark text-white">
        <h1 class="text-center">SisPag</h1>
        <br />
        <h3 class="text-center">Calculo salarial</h3> 
      </div>
      <div class="col-sm-4 bg-dark text-white">
        <a class="btn btn-outline-secondary btn-sm float-right" role="button" href="../session/destroySession.php"> Sair </a>
      </div>
    </div>
  </div>
  
  <div class="container-fluid" style="height:90px;">
    <div class="col-sm-12 bg-white">
      <h1></h1>
    </div>
  
  </div>
  
  <div class="container-fluid bg-info"> 
    <form name="Folha de pagamento" method="POST" action="../controller/FormularioFuncionarioController.php">
      
      <div class="row bg-info">
        <div class="col-sm"></div>
      </div> 
      
      <div class="row bg-info">
        <div class="col-sm"><br /><br /><br /></div>
      </div> 
      
      <div class="row bg-info">
        <div class="col-sm-3"></div>
        <div class="col-sm-3 float-left">
          <label for="_cpf">CPF</label><br />
          <input type="text" name="_cpf" size="25" maxlength="11" placeholder="Somente Numeros">
        </div>
        
        <div class="col-sm-3 float-left">
          <label for="_funcionario">Funcionario</label><br />
          <input type="text" name="_funcionario" size="30" placeholder="Nome Completo">
        </div>
        <div class="col-sm-3"></div>
      </div>
      
      <div class="row bg-info">
        <div class="col-sm"><br /></div>
      </div> 

      <div class="row bg-info">
        <div class="col-sm-3"></div>
        <div class="col-sm-3 float-left">
          <label for="_anonascimento"> Ano de Nascimento</label><br />
          <input type="number" name="_anonascimento" min="1918" max="2017" size="25">
        </div>
        
        <div class="col-sm-3 float-left">
          <label for="_salariobase">Salario base</label><br />
          <input type="text" name="_salariobase" size="25" placeholder="R$">
        </div>
        <div class="col-sm-3"></div>
      </div>
      
      <div class="row bg-info">
        <div class="col-sm-3"><br /></div>
      </div> 
      
      <div class="row bg-info ">
        <div class="col-sm-3"></div>
        <div class="col-sm-3 float-left">
          <label for="_qntfilhos">Quantidade de Filhos</label><br />
          <input type="number" name="_qntfilhos" min="0" max="30" >
        </div>
      </div>
      
      <div class="row bg-info">
        <div class="col-sm"><br /></div>
      </div> 
      
      <div class="bg-info text-center">
        <input class="col-sm-1 btn btn-dark" type="submit" value="Calcular">
      </div>
      
      <div class="row bg-info">
        <div class="col-sm"><br /><br /><br /></div>
      </div> 
    </form>
  
  </div>

</body>
</html> 