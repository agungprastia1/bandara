<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
			<li class="breadcrumb-item active">Input Kedatangan </li>
		</ul>
	</div>
</div>
<!-- form -->
<section class="form">
	<div class="container-fluid">
		<header>
			<h1 class="h3 display">Input Kedatangan Pesawat</h1>
		</header>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form action="<?php echo site_url('kedatangan/inputAct'); ?>" method="POST">
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">Date Of Flight</label>
								<div class="col-sm-10">
									<input type="text" name="date" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">ADED</label>
								<div class="col-sm-10">
									<select name="aded" id="" class="form-control">
										<option value="WATK">WATK</option>
										<option value="WATT">WATT</option>
										<option value="WATE">WATE</option>
										<option value="WADD">WADD</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">ADES</label>
								<div class="col-sm-10">
									<select name="ades" id="" class="form-control">
										<option value="WATK">WATK</option>
										<option value="WATT">WATT</option>
										<option value="WATE">WATE</option>
										<option value="WADD">WADD</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">ACID</label>
								<div class="col-sm-10">
									<select name="acid" id="" class="form-control">
										<option value="GIA 460">GIA 460</option>
										<option value="GIA 461">GIA 461</option>
										<option value="LKN 640">LKN 640</option>
										<option value="LKN 461">LKN 461</option>
										<option value="WIN 1941">WIN 1941</option>
										<option value="WIN 1832">WIN 1832</option>
										<option value="WIN 1833">WIN 1833</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">AC REG</label>
								<div class="col-sm-10">
									<input type="text" name="acreg" class="form-control">
								</div>
							</div>
							<fieldset class="form-group">
								<div class="row">
									<label class="col-form-label col-sm-2 pt0">RWY</legend>
										<div class="col-sm-10">
											<div class="form-check ">
												<input class="form-check-input" type="radio" name="rwy" id="gridRadios1" value="10" checked>
												<label class="form-check-label" for="gridRadios1">
													10
												</label>
											</div>
											<div class="form-check ">
												<input class="form-check-input" type="radio" name="rwy" id="gridRadios1" value="28">
												<label class="form-check-label" for="gridRadios1">
													28
												</label>
											</div>
										</div>
								</div>
							</fieldset>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">ETA</label>
								<div class="col-sm-10">
									<input type="text" name="eta" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">ATA</label>
								<div class="col-sm-10">
									<input type="text" name="ata" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">FL</label>
								<div class="col-sm-10">
									<input type="text" name="fl" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-sm-11">
									<button type="submit" class="btn btn-primary">Input</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>