<?php

if(isset($_GET['token'])) {
	$id_user = buka(e($_GET['token']));
	?>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Profil "User"</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-3 text-center">
					<img src="assets/img/Perumnas2.jpg" class="img img-circle" style="opacity: 1; width: 200px; height: 200px; border: 2px solid #ccc;">
				</div>
				<div class="col-lg-9">

					<table class="table">
						<thead>
							<tr>
								<td>Department:</td>
								<td>Programming</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Hire date:</td>
								<td>06/23/2013</td>
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td>01/24/1988</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>Male</td>
							</tr>
							<tr>
								<td>Home address:</td>
								<td>Metro Manilla, Philippines</td>
							</tr>
							<tr>
								<td>Email:</td>
								<td>info@support.com</td>
							</tr>
							<tr>
								<td>Phone Number</td>
								<td>123-456-783</td>
							</tr>
						</tbody>
					</table>
				<a href="index.php?page=home" class="btn btn-link btn-xs pull-right">Edit profil</a>
				</div>
			</div>
			<a href="index.php?page=home" class="btn btn-primary">Kembali ke home</a>
		</div>
	</div>
	<?php
}