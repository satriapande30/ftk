@extends('layout.layout')
@section('data')

  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <div class="card-header border-0">
            <h3 class="mb-0">Tambah Data Mahasiswa Fakultas Teknik dan Kejuruan</h3>
          </div>
        </div>
        <div class="card-body">
          <form action="/simpan" method="POST">
            @csrf
            <h6 class="heading-small text-muted mb-4">Informasi Mahasiswa</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">NIM</label>
                    <input type="number" class="form-control" placeholder="Masukkan NIM" name="nim" required/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama" required />
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="col-form-label">Semester</label>
                    <select class="form-control" name="semester" required>
                      <option value="" disabled selected hidden>Pilih Semester</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>Lainnya</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="col-form-label">Jenis Kelamin</label>
                    <select class="form-control" name="jk" required>
                      <option value="" disabled selected hidden>Pilih Jenis Kelamin</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                  </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required />
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="col-form-label">Agama</label>
                    <select class="form-control" name="agama" required>
                      <option value="" disabled selected hidden>Pilih Agama</option>
                      <option>Hindu</option>
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Katolik</option>
                      <option>Budha</option>
                      <option>Konghuchu</option>
                  </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="col-form-label">Prodi</label>
                    <select class="form-control" name="prodi" required>
                      <option value="" disabled selected hidden>Pilih Prodi</option>
                      <option>Ilmu Komputer</option>
                      <option>Sistem Informasi</option>
                      <option>Pendidikan Teknik Informatika</option>
                      <option>Manajemen Informatika</option>
                      <option>Pendidikan Teknik Mesin</option>
                      <option>Pendidikan Teknik Elektro</option>
                      <option>Teknik Elektro</option>
                      <option>Pendidikan Kesejahteraan Keluarga</option>
                      <option>Pendidikan Vokasional Seni Kuliner</option>
                  </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="col-form-label">Jurusan</label>
                    <select class="form-control" name="jurusan" required>
                      <option value="" disabled selected hidden>Pilih Jurusan</option>
                      <option>Teknik Informatika</option>
                      <option>Teknologi Industri</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nomor Telepon</label>
                    <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon" name="hp" required />
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan Email" name="email" required />
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Alamat</label>
                    <textarea rows="1" class="form-control" placeholder="Masukkan Alamat Sesuai KTP" name="alamat" placeholder="Alamat Lengkap"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="col-form-label">Keterangan</label>
                    <select class="form-control" name="keterangan" required>
                      <option value="" disabled selected hidden>Pilih Keterangan</option>
                      <option>Mahasiswa Aktif</option>
                      <option>Mahasiswa Non-Aktif</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="button">
                <input type="submit" value="Simpan" class="btn btn-primary">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection