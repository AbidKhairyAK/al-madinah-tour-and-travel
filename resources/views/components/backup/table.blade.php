<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-between align-items-center">
		<h6 class="m-0 font-weight-bold text-info">Tabel Backup</h6>
		<a class="btn btn-sm btn-info rounded" href="#">
			<i class="fa fa-plus"></i> Backup Data
		</a>
	</div>
	<div class="card-body">
		<table id="datatables" style="width: 100%;" class="table">
			<thead>
				<tr>
					<th>Tanggal</th>
					<th>Ukuran</th>
					<th width="50">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>20 Mei 2019</td>
					<td>4091kb</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Restore">
							<i class="fas fa-sync-alt"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>10 Mei 2019</td>
					<td>4091kb</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Restore">
							<i class="fas fa-sync-alt"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>30 April 2019</td>
					<td>4091kb</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Restore">
							<i class="fas fa-sync-alt"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>20 April 2019</td>
					<td>4091kb</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Restore">
							<i class="fas fa-sync-alt"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>10 April 2019</td>
					<td>4091kb</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Restore">
							<i class="fas fa-sync-alt"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>30 Maret 2019</td>
					<td>4091kb</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Restore">
							<i class="fas fa-sync-alt"></i>
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