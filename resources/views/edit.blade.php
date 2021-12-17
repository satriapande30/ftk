@extends('layout.layout')
@section('data')

  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Edit Data Mahasiswa</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
            @foreach ($mahasiswa as $data)
          <form action="/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">NIM</label>
                    <input type="number" class="form-control" name="nim" value="{{ $data->nim }}" required/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" required />
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="col-form-label">Semester</label>
                    <select class="form-control" name="semester" value='{{ $data->semester }}' required>
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
                    <select class="form-control" name="jk" value="{{ $data->jk }}" required>
                      <option value="" disabled selected hidden>Pilih Jenis Kelamin</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                  </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $data->tempat_lahir }}" required/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" value="{{ $data->tgl_lahir }}" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="col-form-label">Agama</label>
                    <select class="form-control" name="agama" value="{{ $data->agama }}" required>
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
                    <select class="form-control" name="prodi" value="{{ $data->prodi }}" required>
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
                    <select class="form-control" name="jurusan" value="{{ $data->jurusan }}" required>
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
                    <input type="number" class="form-control" name="hp" value="{{ $data->hp }}" required/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $data->email }}" required/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Alamat</label>
                    <input type="textarea" class="form-control" name="alamat" value="{{ $data->alamat }}" required/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="col-form-label">Keterangan</label>
                    <select class="form-control" name="keterangan" value='{{ $data->keterangan }}' required>
                      <option value="" disabled selected hidden>Pilih Keterangan</option>
                      <option>Mahasiswa Aktif</option>
                      <option>Mahasiswa Non-Aktif</option>
                  </select>
                  </div>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-lg-12">
                <input type="submit" value="Perbarui" class="btn btn-primary">
              </div>
            </div>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection