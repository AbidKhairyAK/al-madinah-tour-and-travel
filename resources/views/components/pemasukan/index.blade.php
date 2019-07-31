@extends('app')

@section('title', 'Pemasukan')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Pemasukan</h1>
	<p class="mb-4">Daftar data pemasukan dari berbagai jenis dan sumber</p>
</div>

@include('components.pemasukan.card')

@include('components.pemasukan.table')

@include('components.pemasukan.chart')

@endsection

@section('script')
<script type="text/javascript">
	$('#datatables').DataTable();
</script>
@include('components.pemasukan.chart-js')
@endsection