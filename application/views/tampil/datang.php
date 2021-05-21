<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
			<li class="breadcrumb-item active">Data Kedatangan </li>
		</ul>
	</div>
</div>
<!-- Tampil -->
<section class="form">
	<div class="container-fluid">
		<header>
			<h1 class="h3 display">Data Kedatangan Pesawat</h1>
		</header>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Date Of Flight</th>
										<th scope="col">ADED</th>
										<th scope="col">ADES</th>
										<th scope="col">ACID</th>
										<th scope="col">AC REG</th>
										<th scope="col">RWY</th>
										<th scope="col">ETA</th>
										<th scope="col">ATA</th>
										<th scope="col">FL</th>
									</tr>
								</thead>
								<?php
								$no = 1;
								foreach ($data as $u) {
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $u->date; ?></td>
										<td><?php echo $u->aded; ?></td>
										<td><?php echo $u->ades; ?></td>
										<td><?php echo $u->acid; ?></td>
										<td><?php echo $u->acreg; ?></td>
										<td><?php echo $u->rwy; ?></td>
										<td><?php echo $u->eta; ?></td>
										<td><?php echo $u->ata; ?></td>
										<td><?php echo $u->fl; ?></td>

									</tr>
								<?php } ?>

								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>