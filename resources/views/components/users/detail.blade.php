@extends('app')

@section('title', 'Users')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Detail Users</h1>
</div>

<div class="row">

	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Detail Data</h6>
			</div>
			<div class="card-body">
				<a href="https://source.unsplash.com/iFLwmGTncOE/300x400" target="_blank"><img src="https://source.unsplash.com/iFLwmGTncOE/300x400" class="w-25 mb-2"></a>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Username</span>
					<span class="col-md-8">: Hambaliy</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Email</span>
					<span class="col-md-8">: hambal@hambal.com</span>
				</div>
				<div class="row mb-2">
					<span class="col-md-4 font-weight-bold">Level</span>
					<span class="col-md-8">: Operator</span>
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
					<span class="col-md-6">: Hambaliy</span>
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