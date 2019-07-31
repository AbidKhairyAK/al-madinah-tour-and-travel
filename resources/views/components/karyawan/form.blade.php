@extends('app')

@section('title', 'Karyawan')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Form Karyawan</h1>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Form Input Data</h6>
			</div>
			<div class="card-body">
				
				<form action="{{url('/karyawan')}}">

					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Nama Karyawan:</b>
							<input type="text" class="form-control">
						</label>
					</div>

					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Jabatan:</b>
							<select class="form-control">
								<option></option>
								<option>Karyawan Biasa</option>
								<option>Security</option>
								<option>Administrasi</option>
								<option>Operator</option>
								<option>Pengurus</option>
							</select>
						</label>
					</div>

					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Gender:</b>
						</label>

						<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="genderL" name="gender" value="L">
								<label class="custom-control-label" for="genderL">Laki-laki</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="genderP" name="gender" value="P">
								<label class="custom-control-label" for="genderP">Perempuan</label>
							</div> 
					</div>

					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Tanggal Lahir:</b>
							<input type="date" class="form-control">
						</label>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label class="w-100">
								<b class="d-inline-block mb-2">Email:</b>
								<input type="email" class="form-control">
							</label>
						</div>

						<div class="form-group col-md-6">
							<label class="w-100">
								<b class="d-inline-block mb-2">No. Telepon (WA):</b>
								<input type="number" class="form-control">
							</label>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-3">
							<label class="w-100">
								<b class="d-inline-block mb-2">Provinsi:</b>
								<select class="form-control">
									<option></option>
									<option>DI Yogyakarta</option>
									<option>Jawa Barat</option>
									<option>Jawa Tengah</option>
									<option>Jawa Timur</option>
								</select>
							</label>
						</div>

						<div class="form-group col-md-3">
							<label class="w-100">
								<b class="d-inline-block mb-2">Kab/Kota:</b>
								<select class="form-control">
									<option></option>
									<option>Sleman</option>
									<option>Bantul</option>
									<option>Gunungkidul</option>
									<option>Klaten</option>
								</select>
							</label>
						</div>

						<div class="form-group col-md-3">
							<label class="w-100">
								<b class="d-inline-block mb-2">Kecamatan:</b>
								<select class="form-control">
									<option></option>
									<option>Ujung Bulu</option>
									<option>Gantarang</option>
									<option>Kindang</option>
									<option>Bonto Tiro</option>
								</select>
							</label>
						</div>

						<div class="form-group col-md-3">
							<label class="w-100">
								<b class="d-inline-block mb-2">Kelurahan:</b>
								<select class="form-control">
									<option></option>
									<option>Karanganyar</option>
									<option>Wedomartani</option>
									<option>Jetis Baran</option>
								</select>
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Alamat:</b>
							<input type="text" class="form-control">
						</label>
					</div>

					<button type="submit" class="btn btn-info">Submit</button>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection