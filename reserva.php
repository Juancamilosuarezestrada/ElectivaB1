

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>
<?php include ("layouts/header.php") ?>

    <link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="css/animate2.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style2.css">

<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>HAGA SU RESERVA</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Reserva</h3>

											<form action="datos.php" method="POST" >
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Tu nombre</label>
														<input type="text" name="nombre" id="fullname" class="form-control" required="">
													</div>
                                                    <div class="col-md-12">
														<label for="fullname">edad</label>
														<input type="number" name="edad" id="fullname" class="form-control" required="">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Tipo de reserva </label>
														<select name="Tipodereserva" id="destination" class="form-control" required="">
															<option value="local">Local</option>
															<option value="puesto">Puesto</option>
															<option value="comprapormayor">Compra por mayor</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Ciudad</label>
														<select name="ciudad" id="destination" class="form-control" required="">
															<option value="sincelejo">sincelejo</option>
															<option value="corozal">corozal</option>
															<option value="betulia">betulia</option>
															
														</select>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Fecha de Reserva(d/M/A)</label>
														<input type="text" name="fecha" id="date-start" class="form-control" ">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="submit">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	


</body>
</html>
