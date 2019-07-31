@extends('app')

@section('title', 'Karyawan')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Karyawan</h1>
	<p class="mb-4">Daftar data para karyawan</p>
</div>

@include('components.karyawan.table')

@endsection

@section('script')
<script type="text/javascript">
	$('#datatables').DataTable();
</script>
@endsection