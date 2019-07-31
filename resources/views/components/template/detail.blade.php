@extends('app')

@section('title', 'Template')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Detail Template</h1>
</div>

<div class="row">

	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Detail Data</h6>
			</div>
			<div class="card-body">
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Judul Pesan</span>
					<span class="col-md-8">: Jadwal Berangkat</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-12 font-weight-bold">Isi Pesan</span>
					<span class="col-md-12">
						Diinformasikan kepada $nama_jamaah$, jamaah haji yang menggunakan jasa Al-Madinah Tour and Travel, bahwa tanggal 30 Mei 2019, adalah tanggal pemberangkatan menuju Arab Saudi melalui bandara Sultan Hasanuddin ke bandara Riyadh International Airport
					</span>
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
	</div>

</div>

@endsection