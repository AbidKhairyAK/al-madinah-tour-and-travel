<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-between align-items-center">
		<h6 class="m-0 font-weight-bold text-info">Tabel Level</h6>
		<a class="btn btn-sm btn-info rounded" href="{{url('/hak-akses/form')}}">
			<i class="fa fa-plus"></i> Tambah Data
		</a>
	</div>
	<div class="card-body">
		<table id="datatables" style="width: 100%;" class="table">
			<thead>
				<tr>
					<th>Level</th>
					<th>Jumlah User</th>
					<th width="80">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Admin</td>
					<td>2</td>
					<td>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/hak-akses/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Operator</td>
					<td>5</td>
					<td>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/hak-akses/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Karyawan</td>
					<td>10</td>
					<td>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/hak-akses/form')}}">
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