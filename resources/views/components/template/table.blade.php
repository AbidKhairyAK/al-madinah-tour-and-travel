<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-between align-items-center">
		<h6 class="m-0 font-weight-bold text-info">Tabel Template</h6>
		<a class="btn btn-sm btn-info rounded" href="{{url('/template/form')}}">
			<i class="fa fa-plus"></i> Tambah Data
		</a>
	</div>
	<div class="card-body">
		<table id="datatables" style="width: 100%;" class="table">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Preview</th>
					<th width="100">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Jadwal Berangkat</td>
					<td>Diinformasikan kepada $nama_jamaah$, jamaah haji yang menggunakan jasa al-madi...</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/template/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/template/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Pemberitahuan Batas Pengurusan Passport</td>
					<td>Diinformasikan kepada $nama_jamaah$ jamaah haji yang menggunakan jasa al-madi...</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/template/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/template/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Jadwal Manasik Haji</td>
					<td>Diinformasikan kepada $nama_jamaah$, jamaah haji yang menggunakan jasa al-madi...</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/template/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/template/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Informasi Tambahan</td>
					<td>Diinformasikan kepada $nama_jamaah$, jamaah haji yang menggunakan jasa al-madi...</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/template/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/template/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@section('script')
<script type="text/javascript">
	$('#datatables').DataTable();
</script>
@endsection