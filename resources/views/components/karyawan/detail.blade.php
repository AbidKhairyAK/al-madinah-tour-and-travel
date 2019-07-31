@extends('app')

@section('title', 'Karyawan')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Detail Karyawan</h1>
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
					<span class="col-md-4 font-weight-bold">Nama Karyawan</span>
					<span class="col-md-8">: Bambang bin Bambang</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Jabatan</span>
					<span class="col-md-8">: Karyawan Biasa</span>
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
					<span class="col-md-8">: bambang@bambang.com</span>
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
					<span class="col-md-4 font-weight-bold">Status Gaji</span>
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
	</div>

</div>

@endsection