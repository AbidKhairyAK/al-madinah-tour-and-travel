@extends('app')

@section('title', 'Pengeluaran')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Form Pengeluaran</h1>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Form Input Data</h6>
			</div>
			<div class="card-body">
				
				<form action="{{url('/pengeluaran')}}">

					<div id="vuearea">
						<div class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Jenis Pengeluaran:</b>
							</label>

							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" v-model="method" class="custom-control-input" id="method1" name="method" value="1">
								<label class="custom-control-label" for="method1">Fee Agent</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" v-model="method" class="custom-control-input" id="method2" name="method" value="2">
								<label class="custom-control-label" for="method2">Gaji Karyawan</label>
							</div> 
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" v-model="method" class="custom-control-input" id="method3" name="method" value="3">
								<label class="custom-control-label" for="method3">Beli Barang</label>
							</div> 
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" v-model="method" class="custom-control-input" id="method4" name="method" value="4">
								<label class="custom-control-label" for="method4">Beli Tiket</label>
							</div> 
						</div>

						<div v-if="method == 1" class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Nama Agent:</b>
								<select class="form-control">
									<option></option>
									<option>Nila binti Nila</option>
									<option>Said bin Said</option>
									<option>Ian bin Ian</option>
									<option>Lindan bin Lindan</option>
								</select>
							</label>
						</div>

						<div v-if="method == 2" class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Nama Karyawan:</b>
								<select class="form-control">
									<option></option>
									<option>Fani bin Fani</option>
									<option>Utoz bin Utoz</option>
									<option>Puchai bin Puchai</option>
									<option>Khan bin Khan</option>
								</select>
							</label>
						</div>

						<div v-if="method == 3" class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Nama Barang:</b>
								<input type="text" class="form-control">
							</label>
						</div>

						<div v-if="method == 4" class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Tiket Kepada:</b>
								<input type="text" class="form-control">
							</label>
						</div>
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

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js" integrity="sha256-chlNFSVx3TdcQ2Xlw7SvnbLAavAQLO0Y/LBiWX04viY=" crossorigin="anonymous"></script>
<script type="text/javascript">
	new Vue({
		el: '#vuearea',
		data: {
			method: null
		}
	})
</script>
@endsection