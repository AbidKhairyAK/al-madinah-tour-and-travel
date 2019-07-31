@extends('app')

@section('title', 'Agent')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Detail Agent</h1>
</div>

<div class="row">

	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Detail Data</h6>
			</div>
			<div class="card-body">
				<a href="https://source.unsplash.com/JyVcAIUAcPM/300x400" target="_blank"><img src="https://source.unsplash.com/JyVcAIUAcPM/300x400" class="w-25 mb-2"></a>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Nama Agent</span>
					<span class="col-md-8">: Kareem bin Kareem</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Gender</span>
					<span class="col-md-8">: Laki-laki</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Tanggal Lahir</span>
					<span class="col-md-8">: 04 April 1993</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Usia</span>
					<span class="col-md-8">: 27 Tahun</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Email</span>
					<span class="col-md-8">: ahmad@ahmad.com</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Telepon</span>
					<span class="col-md-8">: 0824 7883 9823</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Alamat</span>
					<span class="col-md-8">: Jl. Kaliurang km 9, Wedomartani, Ngemplak, Sleman</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Jumlah Jamaah</span>
					<span class="col-md-8">: 41 Jamaah</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Status Fee</span>
					<span class="col-md-8">: <span class="badge badge-success">Lunas</span> | Mei 2019</span>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Data Sistem</h6>
			</div>
			<div class="card-body">
				<div class="row mb-2">
					<span class="col-md-6 font-weight-bold">Pembuat Data</span>
					<span class="col-md-6">: Monalisa</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-6 font-weight-bold">Dibuat Pada</span>
					<span class="col-md-6">: 02 Mei 2019</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-6 font-weight-bold">Diedit Pada</span>
					<span class="col-md-6">: 05 Mei 2019</span>
				</div>
			</div>
		</div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Grafik Data</h6>
			</div>
			<div class="card-body">
				<p class="text-center">Pendaftar Melalui Agent Ini
					<select class="form-control d-inline-block" style="width: auto !important;">
						<option>Perbulan</option>
						<option>Pertahun</option>
					</select>
				</p>
				<canvas id="barChart" width="200" height="150"></canvas>
			</div>
		</div>
	</div>

</div>

@endsection

@section('script')
@include('components.agent.chart-js-detail')
@endsection