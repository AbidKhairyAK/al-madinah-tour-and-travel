@extends('app')

@section('title', 'Users')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Users</h1>
	<p class="mb-4">Daftar data user pengguna sistem</p>
</div>

@include('components.users.table')
@endsection