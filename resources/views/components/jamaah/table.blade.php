<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-between align-items-center">
		<h6 class="m-0 font-weight-bold text-info">Tabel Jamaah</h6>
		<a class="btn btn-sm btn-info rounded" href="{{url('/jamaah/form')}}">
			<i class="fa fa-plus"></i> Tambah Data
		</a>
	</div>
	<div class="card-body">
		<table id="datatables" style="width: 100%;" class="table">
			<thead>
				<tr>
					<th>Nama Jamaah</th>
					<th>Daftar Melalui</th>
					<th>Program</th>
					<th>Tgl Berangkat</th>
					<th>Pembayaran</th>
					<th>Passport</th>
					<th>Suntik</th>
					<th width="130">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Fulan bin Fulan</td>
					<td>Halim bin Halim</td>
					<td>Haji dan Umroh</td>
					<td>02/06/2019</td>
					<td><span class="badge badge-success">Lunas</span></td>
					<td><span class="badge badge-warning">Proses</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Bambang bin Bambang</td>
					<td>Rizka bin Rizka</td>
					<td>Umroh Plus</td>
					<td>23/08/2019</td>
					<td><span class="badge badge-warning">DP</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td><span class="badge badge-success">Selesai</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Fulanah binti Fulanah</td>
					<td>Kantor Al Madinah</td>
					<td>Travel Ke Turki</td>
					<td>17/09/2019</td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td><span class="badge badge-success">Selesai</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Abdul bin Abdul</td>
					<td>Putra bin Putra</td>
					<td>Haji dan Umroh</td>
					<td>02/06/2019</td>
					<td><span class="badge badge-success">Lunas</span></td>
					<td><span class="badge badge-warning">Proses</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Yahya bin Yahya</td>
					<td>Putra bin Putra</td>
					<td>Umroh Plus</td>
					<td>23/08/2019</td>
					<td><span class="badge badge-warning">DP</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td><span class="badge badge-success">Selesai</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Karimah binti Karimah</td>
					<td>Kantor Al Madinah</td>
					<td>Travel Ke Turki</td>
					<td>17/09/2019</td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td><span class="badge badge-success">Selesai</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Muhammad bin Muhammad</td>
					<td>Halim bin Halim</td>
					<td>Haji dan Umroh</td>
					<td>02/06/2019</td>
					<td><span class="badge badge-success">Lunas</span></td>
					<td><span class="badge badge-warning">Proses</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Dzaqy bin Dzaqy</td>
					<td>Rizka bin Rizka</td>
					<td>Umroh Plus</td>
					<td>23/08/2019</td>
					<td><span class="badge badge-warning">DP</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td><span class="badge badge-success">Selesai</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Lailah binti Lailah</td>
					<td>Kantor Al Madinah</td>
					<td>Travel Ke Turki</td>
					<td>17/09/2019</td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td><span class="badge badge-success">Selesai</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Pardjo bin Pardjo</td>
					<td>Halim bin Halim</td>
					<td>Haji dan Umroh</td>
					<td>02/06/2019</td>
					<td><span class="badge badge-success">Lunas</span></td>
					<td><span class="badge badge-warning">Proses</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Aji bin Aji</td>
					<td>Halim bin Halim</td>
					<td>Umroh Plus</td>
					<td>23/08/2019</td>
					<td><span class="badge badge-warning">DP</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td><span class="badge badge-success">Selesai</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
						</button>
						<button class="btn btn-sm rounded btn-danger" title="Hapus">
							<i class="fas fa-trash"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>Muharram binti Muharram</td>
					<td>Kantor Al Madinah</td>
					<td>Travel Ke Turki</td>
					<td>17/09/2019</td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td><span class="badge badge-success">Selesai</span></td>
					<td><span class="badge badge-danger">Belum</span></td>
					<td>
						<a class="btn btn-sm rounded btn-success" title="Detail" href="{{url('/jamaah/detail')}}">
							<i class="fas fa-address-card"></i>
						</a>
						<a class="btn btn-sm rounded btn-info" title="Edit" href="{{url('/jamaah/form')}}">
							<i class="fas fa-edit"></i>
						</a>
						<button class="btn btn-sm rounded btn-warning" title="Checklist" data-toggle="modal" data-target="#checklist-modal">
							<i class="fas fa-list"></i>
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
