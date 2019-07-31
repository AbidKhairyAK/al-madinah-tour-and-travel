<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-between align-items-center">
		<h6 class="m-0 font-weight-bold text-info">Tabel Users</h6>
		<a class="btn btn-sm btn-info rounded" href="{{url('/users/form')}}">
			<i class="fa fa-plus"></i> Tambah Data
		</a>
	</div>
	<div class="card-body">
		<table id="datatables" style="width: 100%;" class="table">
			<thead>
				<tr>
					<th>Username</th>
					<th>Email</th>
					<th>Level</th>
					<th width="100">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>sunni</td>
					<td>sunni@sunni.com</td>
					<td>Admin</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>lisa</td>
					<td>lisa@lisa.com</td>
					<td>Operator</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>joko</td>
					<td>joko@joko.com</td>
					<td>Karyawan</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>raisa</td>
					<td>raisa@raisa.com</td>
					<td>Admin</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>bambang</td>
					<td>bambang@bambang.com</td>
					<td>Operator</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>jaka</td>
					<td>jaka@jaka.com</td>
					<td>Karyawan</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>bedu</td>
					<td>bedu@bedu.com</td>
					<td>Admin</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>agus</td>
					<td>agus@agus.com</td>
					<td>Operator</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>angga</td>
					<td>angga@angga.com</td>
					<td>Karyawan</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>raka</td>
					<td>raka@raka.com</td>
					<td>Admin</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>nisa</td>
					<td>nisa@nisa.com</td>
					<td>Operator</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>saif</td>
					<td>saif@saif.com</td>
					<td>Karyawan</td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/users/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/users/form')}}">
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