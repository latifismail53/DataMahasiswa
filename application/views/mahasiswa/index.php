<div class="container mt-4">
	<?php if ($this->session->flashdata('flash')) :?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data mahasiswa <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif ;?>

	<div class="container">
		<div class="row">
			<h3>Data Mahasiswa</h3>
		</div>
	</div>


	<div class="table-responsive">
		<table class="table table-hover table-borderless" id="dataTables">
			<caption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, voluptatibus laborum quod neque omnis reprehenderit, aperiam earum fugit dicta in eum corporis voluptates iusto. Sit.</caption>
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Nim</th>
					<th>Nama Mahasiswa</th>
					<th>Alamat</th>
					<th>Jurusan</th>
					<th>Opsi <i class="fa fa-gear"></i></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach ($mahasiswa as $mhs):
					?>
					<tr>
						<td><?= $no++?></td>
						<td><?= $mhs['nim']; ?></td>
						<td><?= $mhs['nama_mhs']; ?></td>
						<td><?= $mhs['alamat']; ?></td>
						<td><?= $mhs['jurusan']; ?></td>
						<td><a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id_mhs']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');" ><i class="fa fa-trash"></i></a>
							<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id_mhs']; ?>" class="badge badge-success">ubah</a>
							<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id_mhs']; ?>" class="badge badge-primary"><i class="fa fa-eye"></i></a>
							
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-6">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">
					<i class="fa fa-plus"></i> Tambah Data
				</button>

			</div>
		</div>
	</div>

	<!-- Pop UP Modal Tambah Data -->
	<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i> Tambah Data Mahasiswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col">		
								<?= form_open_multipart('Mahasiswa/tambah'); ?>
								<div class="form-group">
									<label for="nama_mhs">Nama</label>
									<input type="text" class="form-control " id="nama_mhs" name="nama_mhs" >
									<small class="form-text text-danger"><?= form_error('nama_mhs'); ?></small>
								</div>
								<div class="form-group">
									<label for="nim">Nim</label>
									<input type="text" class="form-control" id="nim" name="nim" >
									<small class="form-text text-danger"><?= form_error('nim'); ?></small>
								</div>
								<div class="form-group">
									<label for="jns_kelamin">Jenis Kelamin</label>
									<select class="form-control" id="jns_kelamin" name="jns_kelamin">
										<option value="Laki-Laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>

									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat" >
									<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
								</div>
								<div class="form-group">
									<label for="no_hp">Nomor Hp</label>
									<input type="text" class="form-control" id="no_hp" name="no_hp" >
									<small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
								</div>
								<div class="form-group">
									<label for="jurusan">Jurusan</label>
									<select class="form-control" id="jurusan" name="jurusan">
										<option value="">Pilih Jurusan</option>
										<option value="Teknik Informatika">Teknik Informatika</option>
										<option value="Teknik Sipil">Teknik Sipil</option>
										<option value="Teknik Industri">Teknik Industri</option>
										<option value="Sistem Informasi">Sistem Informasi</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Akhir modal tambah data -->


