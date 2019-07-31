@extends('app')

@section('title', 'Pengeluaran')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Pengeluaran</h1>
	<p class="mb-4">Daftar data pengeluaran ke berbagai jenis dan tujuan</p>
</div>

@include('components.pengeluaran.table')
@endsection