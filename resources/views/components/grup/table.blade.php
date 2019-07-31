<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-between align-items-center">
		<h6 class="m-0 font-weight-bold text-info">Tabel Grup</h6>
		<a class="btn btn-sm btn-info rounded" href="{{url('/grup/form')}}">
			<i class="fa fa-plus"></i> Tambah Data
		</a>
	</div>
	<div class="card-body" style="overflow: hidden;">
		<table id="datatables-grup" style="width: 100%;" class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Jumlah Kontak</th>
					<th width="100">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Jamaah 21 September 2019</td>
					<td>51</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/grup/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/grup/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Seluruh Jamaah</td>
					<td>121</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/grup/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/grup/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Seluruh grup</td>
					<td>20</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/grup/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/grup/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Jamaah Haji Plus</td>
					<td>86</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/grup/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/grup/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Jamaah yg belum Berangkat</td>
					<td>32</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/grup/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/grup/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Jamaah 21 September 2020</td>
					<td>49</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/grup/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/grup/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Jamaah 21 September 2018</td>
					<td>25</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/grup/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/grup/form')}}">
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
	// $('#datatables-grup').DataTable();
</script>
@endsection