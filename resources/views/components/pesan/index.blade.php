@extends('app')

@section('title', 'Pesan Terkirim')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Pesan Terkirim</h1>
	<p class="mb-4">Daftar data pesan terkirim</p>
</div>

@include('components.pesan.table')
@endsection