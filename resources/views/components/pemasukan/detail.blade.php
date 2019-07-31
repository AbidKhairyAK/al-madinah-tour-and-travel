@extends('app')

@section('title', 'Pemasukan')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Detail Pemasukan</h1>
</div>

<div class="row">

	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Detail Data</h6>
			</div>
			<div class="card-body">
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Sumber</span>
					<span class="col-md-8">: Ali bin Ali</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Jenis</span>
					<span class="col-md-8">: DP Haji & Umroh</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Jumlah</span>
					<span class="col-md-8">: Rp 4.000.000</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Tanggal</span>
					<span class="col-md-8">: 05 Juli 2019</span>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Data Sistem</h6>
			</div>
			<div class="card-body">
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Pembuat Data</span>
					<span class="col-md-8">: Monalisa</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Dibuat Pada</span>
					<span class="col-md-8">: 02 Mei 2019</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Diedit Pada</span>
					<span class="col-md-8">: 05 Mei 2019</span>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection