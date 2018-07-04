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
 			<div class="col-sm-4 bg-dark text-white">
 			</div>
 		</div>
 	</div>
 	
 	<div class="container-fluid" style="height:90px;">
 		<div class="col-sm-12 bg-white">
 			<br />
 			<h1 class="text-center"> Cupom salarial </h1>
 		</div>
 	</div>
 	
 	<div class="container-fluid bg-info"> 
 		<div class="row bg-info">
 			<div class="col-sm"><br /><br /><br /></div>
 		</div> 	
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">CPF: </div>
 			<div class="col-sm-6 float-left"><?php echo $_cpf; ?> </div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 		
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">Funcionário:</div>
 			<div class="col-sm-6 float-left"> <?php echo $_funcionario; ?> </div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 		
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">Idade:</div>
 			<div class="col-sm-6 float-left"><?php echo $_idade; ?> anos </div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 		
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">Salário base:</div>
 			<div class="col-sm-6 float-left"> R$ <?php echo $_salariobase;?> </div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 		
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">Salário família: </div>
 			<div class="col-sm-6 float-left"> R$ <?php echo $_salarioFamilia; ?></div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 		
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">Abono:</div>
 			<div class="col-sm-6 float-left"> R$ <?php echo $_calculaAbono;  ?></div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 		
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">Salário bruto:</div>
 			<div class="col-sm-6 float-left">R$ <?php echo $_salarioBruto; ?></div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 		
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">INSS: </div>
 			<div class="col-sm-6 float-left"> R$ <?php echo $_inss; ?></div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 		
 		<div class="row bg-info">
 			<div class="col-sm-4"></div>
 			<div class="col-sm-2 text-center">Salário liquido: </div>
 			<div class="col-sm-6 float-left"> R$ <?php echo $_salarioLiquido;?></div>
 		</div>
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /><br /><br /></div>
 		</div>
 		
 		<a class="btn btn-dark" role="button" href="formulario.php"> Voltar </a> 
 		
 		<div class="row bg-info">
 			<div class="col-sm"><br /></div>
 		</div> 
 	</div>
 	
 </body>
 </html>