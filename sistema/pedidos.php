
<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>NOMBRE</th>
							<th>EDAD</th>
							<th>TIPO DE RESERVA</th>
							<th>CIUDAD</th>
							<th>FECHA</th>
			
							<?php if ($_SESSION['rol'] == 1) { ?>
							<th>ACCIONES</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM order");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									<td><?php echo $data['nombre']; ?></td>
									<td><?php echo $data['edad']; ?></td>
									<td><?php echo $data['Tipodereserva']; ?></td>
									<td><?php echo $data['ciudad']; ?></td>
									<td><?php echo $data['fecha']; ?></td>
										<?php if ($_SESSION['rol'] == 1) { ?>
									<td>
										
										<form action="eliminar_reserva.php?id=<?php echo $data['reservas1']; ?>" method="post" class="confirmar d-inline">
											<button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
										</form>
									</td>
										<?php } ?>
								</tr>
						<?php }
						} ?>
					</tbody>

				</table>
			</div>

		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include_once "includes/footer.php"; ?>