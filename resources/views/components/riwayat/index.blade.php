@extends('app')

@section('title', 'Riwayat')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Riwayat</h1>
	<p class="mb-4">Daftar riwayat perubahan dan penambahan data sistem</p>
</div>

@include('components.riwayat.table')
@endsection