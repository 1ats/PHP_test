<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Lattes - Onepage Multipurpose Bootstrap HTML</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar  navbar-fixed-top">
			<div class="container" style="background-color:#000080 " >
				<!-- Brand and toggle get grouped for better mobile display -->
				<div>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					
						<br>
						 <strong style="color: white">PHPtest</strong>  
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a href="index.php" style="color: white"><strong>  consultar</strong>  </a>
						</li>
						<li>
							<a href="index1.php" style="color: white"><strong> busca via-cep</strong>  </a>
						</li>
						
					
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav> <br><br>
		
	
		
		<section id="contact">

			<div class="container" style="text-align: center;" >
				<h3>Para mostrar ou salvar o endereço primeiro clica em <b> buscar via-cep </b></h3><br>

				<div style="color:#000080">
					
                 <?php 

              if (!empty($_GET['mg'])){
                 
                  echo "<strong> endereço salvo com sucesso </strong>";
		}
		      if (!empty($_GET['mg1'])){
                 
                  echo "<strong> já existe este  endereço  na base</strong>";
		}
				?>


				</div>

				<div class="row" style="padding-left: 40%">
					
					<div class="col-md-6" >
						<form  method="post" action="index1.php">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group ">
										<input type="text" class="form-control" placeholder="digite o cep *"  name="cep" required="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="col-lg-12 ">
									<div id="success"></div>
									<button type="submit" class="btn">buscar via-cep</button>
								</div>
								</div>
								
							</div>
						
						</form>
					</div>
				</div> <br>


				<div>
                   
					<button >
						
						<a href="https://viacep.com.br/ws/<?php echo $_POST['cep'];?>/xml/" target="iframe" class="#salvar" > mostrar </a>
					</button>

					<button>
					
					  <a href="http://localhost/PHPtest/controller/buscar.php?a=<?php echo $_POST['cep'];?>" > salvar</a>

					</button><br> <br>
           
             
     
            <iframe name="iframe" width="500" height="300" style="border: 0" > </iframe>

			</div>

			</div>
		</section>

		
		

	
		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>