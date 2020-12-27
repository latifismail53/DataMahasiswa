<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" name="id_mhs" value="<?= $mahasiswa['id_mhs']; ?>">
                                    <div class="form-group">
                                        <label for="nama_mhs">Nama</label>
                                        <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" value="<?= $mahasiswa['nama_mhs']; ?>">
                                        <small class="form-text text-danger"><?= form_error('nama_mhs'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="nim">Nim</label>
                                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
                                        <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="jns_kelamin">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="jns_kelamin" name="jns_kelamin" value="<?= $mahasiswa['jns_kelamin']; ?>">
                                        <small class="form-text text-danger"><?= form_error('jns_kelamin'); ?></small> -->
                                        <label for="jns_kelamin">Jurusan</label>
                                        <select class="form-control" id="jns_kelamin" name="jns_kelamin">
                                            <?php foreach ($jns_kelamin as $jk) : ?>
                                                <?php if ($jk == $mahasiswa['jns_kelamin']) : ?>
                                                    <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="teks" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa['alamat']; ?>">
                                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                        </div>
                                        <div class="form-group">
                                          <label for="no_hp">Nomor Hp</label>
                                          <div class="input-group flex-nowrap">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="addon-wrapping">+62</span>
                                            </div>
                                            <input type="teks" class="form-control" id="no_hp" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>">
                                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan">Jurusan</label>
                                        <select class="form-control" id="jurusan" name="jurusan">
                                            <?php foreach ($jurusan as $j) : ?>
                                                <?php if ($j == $mahasiswa['jurusan']) : ?>
                                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="container">
                              <hr>
                              <a href="<?= base_url(); ?>mahasiswa" class="btn btn-danger btn-sm ">Kembali</a>
                              <button type="submit" name="ubah" class="btn btn-primary btn-sm">Simpan</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

  </div>