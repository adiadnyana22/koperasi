<div class="container-fluid mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
				Tambah Data Siswa
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h3 class="mt-3">Daftar Siswa</h3>
				<ul class="list-group">
					<?php foreach( $data['siswa'] as $siswa ) : ?>
						<li class="list-group-item">
							<?= $siswa['nama'] ?>
							<a href="<?= BASEURL ?>/siswa/hapus/<?= $siswa['id'] ?>">
								<button type="button" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Yakin ?');">Hapus</button>
							</a>
							<a href="<?= BASEURL ?>/siswa/ubah/<?= $siswa['id'] ?>" data-toggle="modal" data-target="#formModal">
								<button type="button" class="btn btn-sm btn-success float-right ml-1 tampilModalUbah" data-id="<?= $siswa['id'] ?>">Ubah</button>
							</a>
							<a href="<?= BASEURL ?>/siswa/detail/<?= $siswa['id'] ?>">
								<button type="button" class="btn btn-sm btn-primary float-right ml-1">Detail</button>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		<form action="<?=  BASEURL ?>/siswa/tambah" method="post">
			<input type="hidden" name="id" id="id">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama">
			</div>

			<div class="form-group">
				<label for="nis">NIS</label>
				<input type="number" class="form-control" id="nis" name="nis">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="jurusan">Jurusan</label>
				<select class="form-control" id="jurusan" name="jurusan">
				<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak ( RPL )</option>
				<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan ( TKJ )</option>
				<option value="Mulitmedia">Mulitmedia ( MM )</option>
				</select>
			</div>

      </div>
      <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Tambah Data</button>
		</form>
      </div>
    </div>
  </div>
</div>