@extends('app')

@section('title', 'b=Backup')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Backup Data</h1>
	<p class="mb-4">Daftar data backup data sistem</p>
</div>

@include('components.backup.table')
@endsection