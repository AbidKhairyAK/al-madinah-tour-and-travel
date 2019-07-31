@extends('app')

@section('title', 'Beranda')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Data Beranda</h1>
	<p class="mb-4">Ringkasan data sistem</p>
</div>

@include('components.beranda.card')

@include('components.beranda.chart')

<div id="vuearea">
	<div class="row">
		<div class="col-md-4 offset-md-8">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-info">Kalender</h6>
				</div>
				<div class="card-body">
					<vue-calendar></vue-calendar>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('script')
@include('components.beranda.chart-js')
<!-- Laravel Core JS -->
<script src="/js/app.js"></script>
@endsection

@section('style')
<!-- Laravel Core CSS -->
<script src="/css/app.css"></script>
@endsection