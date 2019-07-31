<div class="row">
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Grafik Data</h6>
			</div>
			<div class="card-body">
				<p class="text-center">~ Pendaftar Melalui Agent
					<select class="form-control d-inline-block" style="width: auto !important;">
						<option>Perbulan</option>
						<option>Pertahun</option>
					</select>
				 ~</p>
				<canvas id="barChart" width="400" height="150"></canvas>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Presentase Data</h6>
			</div>
			<div class="card-body">
				<p class="text-center">~ Presentase Pendaftar 
					<select class="form-control d-inline-block" style="width: auto !important;">
						<option>Tahun Ini</option>
						<option>Bulan Ini</option>
					</select>
				 ~</p>
				<canvas id="pieChart" width="150" height="150"></canvas>
			</div>
		</div>
	</div>
</div>