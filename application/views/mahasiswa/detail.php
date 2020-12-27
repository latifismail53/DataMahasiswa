
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-dark text-light">
            Detail Data Mahasiswa
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                 <tr>
                    <th>Nim</th>
                    <td><?= $mahasiswa['nim']; ?></td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><?= $mahasiswa['nama_mhs']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?= $mahasiswa['alamat']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?= $mahasiswa['jns_kelamin']; ?></td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td><?= $mahasiswa['jurusan']; ?></td>
                </tr>
            </tbody>
        </table>
        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
    </div>
</div>
</div>
