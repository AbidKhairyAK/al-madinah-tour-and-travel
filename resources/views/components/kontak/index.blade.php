@extends('app')

@section('title', 'Kontak')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Kontak</h1>
	<p class="mb-4">Daftar data kontak jamaah dan agent</p>
</div>

<div class="row">
	<div class="col-md-7">
		@include('components.kontak.table')
	</div>
	<div class="col-md-5">
		@include('components.grup.table')
	</div>
</div>
@endsection