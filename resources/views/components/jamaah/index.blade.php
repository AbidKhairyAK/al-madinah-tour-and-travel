@extends('app')

@section('title', 'Jamaah')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Jamaah</h1>
	<p class="mb-4">Daftar data para jamaah haji dan umroh</p>
</div>

@include('components.jamaah.card')

@include('components.jamaah.table')

@include('components.jamaah.checklist')

@include('components.jamaah.chart')

@endsection

@section('script')
<script type="text/javascript">
	$('#datatables').DataTable();
</script>
@include('components.jamaah.chart-js')
@endsection