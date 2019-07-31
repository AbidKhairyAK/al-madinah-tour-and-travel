@extends('app')

@section('title', 'Agent')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Agent</h1>
	<p class="mb-4">Daftar data para agent</p>
</div>

@include('components.agent.card')

@include('components.agent.table')

@include('components.agent.chart')
@endsection


@section('script')
<script type="text/javascript">
	$('#datatables').DataTable();
</script>
@include('components.agent.chart-js-main')
@endsection