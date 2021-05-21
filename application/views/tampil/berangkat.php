<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
			<li class="breadcrumb-item active">Data Berangkat </li>
		</ul>
	</div>
</div>
<!-- Tampil -->
<section class="form">
	<div class="container-fluid">
		<header>
			<h1 class="h3 display">Data Keberangkat Pesawat</h1>
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
										<th scope="col">Start Up Time</th>
										<th scope="col">Taxi Time</th>
										<th scope="col">ETD</th>
										<th scope="col">ATD</th>
										<th scope="col">FL</th>
										<th scope="col">CLF</th>
										<th scope="col">Speed</th>
									</tr>
								</thead>

								<tr><?php
									$no = 1;
									foreach ($data as $u) {
									?>
										<td><?= $no++; ?></td>
										<td><?= $u['date']; ?></td>
										<td><?= $u['aded']; ?></td>
										<td><?= $u['ades']; ?></td>
										<td><?= $u['acid']; ?></td>
										<td><?= $u['acreg']; ?></td>
										<td><?= $u['rwy']; ?></td>
										<td><?= $u['sut']; ?></td>
										<td><?= $u['taxit']; ?></td>
										<td><?= $u['etd']; ?></td>
										<td><?= $u['atd']; ?></td>
										<td><?= $u['fl']; ?></td>
										<td><?= $u['cfl']; ?></td>
										<td><?= $u['speed']; ?></td>
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
	</div>
</section>