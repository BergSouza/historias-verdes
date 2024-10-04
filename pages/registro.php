<!DOCTYPE html> 
<head>
    <title>Registro</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>
    
    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">

</head> 

<script>
</script>

<body class="app">   	    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Registro</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" method="POST" action="../actions/registro_post.php">
								    <div class="mb-3">
									    <label for="username" class="form-label">Username</label>
									    <input type="text" name="username" class="form-control" id="username" value="" required>
									</div>
								    <div class="mb-3">
									    <label for="email" class="form-label">Email</label>
									    <input type="email" name="email" class="form-control" id="email" value="" required>
									</div>
									<div class="mb-3">
									    <label for="senha" class="form-label">Senha</label>
									    <input type="password" name="senha" class="form-control" id="senha" value="" required>
									</div>
									<div class="mb-3">
									    <label for="senha_confirmar" class="form-label">Confirmar Senha</label>
									    <input type="password" name="senha_confirmar" class="form-control" id="senha_confirmar" value="" required>
									</div>
                                    <div class="form-check mb-3">
										<input class="tipo_conta" type="checkbox" value="" name="tipo_conta" id="tipo_conta">
										<label class="form-check-label" for="tipo_conta">
										    Quero ser um autor
										</label>
									</div><!--//form-check-->
									<button type="submit" class="btn app-btn-primary" id="btnRegistrar">Registrar</button>
							    </form>
						    </div>
                            <br>
						    <p>Já possui uma conta? <a href="login.php">Realizar Login</a></p>
						</div>
	                </div>
                </div>
		    </div>
	    </div>
    </div> 					       
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <script src="../assets/js/app.js"></script> 
</body>
</html> 

