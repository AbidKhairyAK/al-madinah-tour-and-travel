@extends('app')

@section('title', 'Template')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Template</h1>
	<p class="mb-4">Daftar data template pesan</p>
</div>

@include('components.template.table')
@endsection