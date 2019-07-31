@extends('app')

@section('title', 'Pemasukan')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Form Pemasukan</h1>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Form Input Data</h6>
			</div>
			<div class="card-body">
				
				<form action="{{url('/pemasukan')}}">
					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Sumber :</b>
							<input type="text" class="form-control">
						</label>
					</div>
					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Program:</b>
							<select class="form-control">
								<option></option>
								<option>Haji dan Umroh</option>
								<option>Umroh</option>
								<option>Umroh Plus</option>
								<option>Travel ke Turki</option>
								<option>Travel ke Palestina</option>
							</select>
						</label>
					</div>
					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Pembayaran:</b>
							<select class="form-control">
								<option></option>
								<option>LUNAS</option>
								<option>DP</option>
								<option>CICIL</option>
							</select>
						</label>
					</div>
					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Jumlah:</b>
							<input type="number" class="form-control">
						</label>
					</div>
					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Tanggal:</b>
							<input type="date" class="form-control">
						</label>
					</div>
					<button type="submit" class="btn btn-info">Submit</button>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection