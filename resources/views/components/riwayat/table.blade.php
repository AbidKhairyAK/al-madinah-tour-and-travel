<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-between align-items-center">
		<h6 class="m-0 font-weight-bold text-info">Tabel Riwayat</h6>
		<button class="btn btn-sm btn-info rounded" @click="openModal({mode: 'create'})">
			<i class="fa fa-plus"></i> Tambah Data
		</button>
	</div>
	<div class="card-body">
		<table id="datatables" style="width: 100%;" class="table">
			<thead>
				<tr>
					<th>Jenis Aksi</th>
					<th>Oleh</th>
					<th>Tanggal</th>
					<th width="80">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tambah Jamaah</td>
					<td>raka</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit Agent</td>
					<td>bambang</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit Pengeluaran</td>
					<td>lisa</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Tambah Pemasukan</td>
					<td>ahmad</td>
					<td>11 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit User</td>
					<td>kareem</td>
					<td>10 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Kirim Pesan</td>
					<td>raisa</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Hapus Jamaah</td>
					<td>dewi</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit Jamaah</td>
					<td>wati</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Tambah Jamaah</td>
					<td>raka</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit Agent</td>
					<td>karma</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit Pengeluaran</td>
					<td>sanca</td>
					<td>19 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit Pemasukan</td>
					<td>rangga</td>
					<td>11 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit User</td>
					<td>cinta</td>
					<td>20 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Kirim Pesan</td>
					<td>lisa</td>
					<td>18 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Hapus Jamaah</td>
					<td>sandra</td>
					<td>12 Februari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Edit Jamaah</td>
					<td>ria</td>
					<td>12 Januari 2019</td>
					<td>
						<button class="btn btn-sm rounded btn-success" title="Lihat Perubahan">
							<i class="fas fa-eye"></i>
						</button>
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