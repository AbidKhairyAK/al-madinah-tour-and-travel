@extends('app')

@section('title', 'Pesan')

@section('content')
<div id="page-header">
	<h1 class="h3 mb-1 text-gray-800">Form Pesan</h1>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-info">Form Kirim Pesan</h6>
			</div>
			<div class="card-body">
				
				<form action="{{url('/pesan')}}">

					<div id="vuearea">
						<div class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Jenis Pesan:</b>
							</label>

							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" v-model="msgtemplate" class="custom-control-input" id="genderL" name="gender" value="1">
								<label class="custom-control-label" for="genderL">Menggunakan Template</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" v-model="msgtemplate" class="custom-control-input" id="genderP" name="gender" value="0">
								<label class="custom-control-label" for="genderP">Tulis Sendiri</label>
							</div> 
						</div>

						<div v-if="msgtemplate == 1" class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Template:</b>
								<select class="form-control">
									<option></option>
									<option>Informasi Tambahan</option>
									<option>Jadwal Berangkat</option>
									<option>Jadwal Manasik Haji</option>
									<option>Pemberitahuan Batas Pengurusan Passport</option>
								</select>
							</label>
						</div>

						<div v-if="msgtemplate == 0" class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Judul Pesan:</b>
								<input type="text" class="form-control">
							</label>
						</div>

						<div v-if="msgtemplate == 0" class="form-group">
							<label class="w-100">
								<b class="d-inline-block mb-2">Isi Pesan: </b>
								<textarea type="text" class="form-control" rows="5"></textarea>
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Kirim Kepada:</b>
							<select class="form-control select2" name="to[]" multiple="multiple">
								<option></option>
								<optgroup label="Grup">
									<option>Seluruh Jamaah</option>
									<option>Seluruh Agent</option>
									<option>Jamaah Belum Berangkat</option>
								</optgroup>
								<optgroup label="Perorangan">
									<option>Halim bin Halim</option>
									<option>Ramdan bin Ramdan</option>
									<option>Siti binti Siti</option>
									<option>Affan bin Affan</option>
								</optgroup>
							</select>
						</label>
					</div>

					<div class="form-group">
						<label class="w-100">
							<b class="d-inline-block mb-2">Kirim Melalui:</b>
							<div class="custom-control custom-checkbox">
								<div>
									<input type="checkbox" class="custom-control-input" id="via1" name="via">
									<label class="custom-control-label" for="via1">SMS</label>
								</div>
								<div>
									<input type="checkbox" class="custom-control-input" id="via2" name="via">
									<label class="custom-control-label" for="via2">Whatsapp</label>
								</div>
								<div>
									<input type="checkbox" class="custom-control-input" id="via3" name="via">
									<label class="custom-control-label" for="via3">Email</label>
								</div>
						  </div>
						</label>
					</div>

					<button type="submit" class="btn btn-info">Submit</button>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection

@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js" integrity="sha256-chlNFSVx3TdcQ2Xlw7SvnbLAavAQLO0Y/LBiWX04viY=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$('.select2').select2();

	new Vue({
		el: '#vuearea',
		data: {
			msgtemplate: 1
		}
	})
</script>
@endsection