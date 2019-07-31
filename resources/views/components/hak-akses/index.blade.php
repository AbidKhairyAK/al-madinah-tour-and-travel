@extends('app')

@section('title', 'Hak Akses')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Hak Akses</h1>
	<p class="mb-4">Daftar data level dan hak akses pengguna pada sistem</p>
</div>

@include('components.hak-akses.table')
@endsection