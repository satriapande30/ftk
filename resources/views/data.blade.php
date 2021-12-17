@extends('layout.layout');
@section('data');

<!--Form Search-->
<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
  <div class="form-group mb-0">
    <div class="input-group input-group-alternative input-group-merge">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <form action="/" method="GET">
          <input class="form-control" placeholder="Search" name="search">
      </form>
    </div>
  </div>
  <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</form>
<!--End Form Search-->

<!--Header-->
<div class="row">
  <div class="col-lg-8">
      <h6 class="h2 text-white d-inline-block mb-5">Data Mahasiswa Fakultas Teknik dan Kejuruan</h6>
  </div>
  <div class="col-lg-4 mb-5">
    <button type="button" class="btn btn-neutral" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Import Excel
    </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Import File Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <input type="file" name="file" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Import</button>
                </div>
                </form>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-neutral">
          <a href="/exportexcel">Export Excel</a>
        </button>
        <button type="button" class="btn btn-neutral">
          <a href="/create">Tambah Data</a>
        </button>
  </div>
            
</div>
<!--TUtup Header--> 
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
            <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Tabel Mahasiswa</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush ">
                        <thead class="thead-light">
                            <tr class="justify-content-center">
                                <th scope="col" class="sort">No</th>
                                <th scope="col" class="sort">NIM</th>
                                <th scope="col" class="sort">Nama Mahasiswa</th>
                                <th scope="col" class="sort">Semester</th>
                                <th scope="col" class="sort">Jenis Kelamin</th>
                                <th scope="col" class="sort">Tempat Lahir</th>
                                <th scope="col" class="sort">Tanggal Lahir</th>
                                <th scope="col" class="sort">Agama</th>
                                <th scope="col" class="sort">Prodi</th>
                                <th scope="col" class="sort">Jurusan</th>
                                <th scope="col" class="sort">No HP</th>
                                <th scope="col" class="sort">Email</th>
                                <th scope="col" class="sort">Alamat</th>
                                <th scope="col" class="sort">Keterangan</th>
                                <th scope="col" class="sort">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        @php
                          $no = 1;
                        @endphp
                        @foreach ($mahasiswa as $row )
                            <tr>
                                <td scope='row'>{{$no++}}</td>
                                <td scope='row'>{{$row->nim}}</td>
                                <td scope='row'>{{$row->nama}}</td>
                                <td scope='row'>{{$row->semester}}</td>
                                <td scope='row'>{{$row->jk}}</td>
                                <td scope='row'>{{$row->tempat_lahir}}</td>
                                <td scope='row'>{{$row->tgl_lahir}}</td>
                                <td scope='row'>{{$row->agama}}</td>
                                <td scope='row'>{{$row->prodi}}</td>
                                <td scope='row'>{{$row->jurusan}}</td>
                                <td scope='row'>{{$row->hp}}</td>
                                <td scope='row'>{{$row->email}}</td>
                                <td scope='row'>{{$row->alamat}}</td>
                                <td scope='row'>{{$row->keterangan}}</td>
                                <td scope="row">
                                    <a href="/edit/{{$row->id}}" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama}}">Hapus</a>
                                </td>
                            </tr>  
                        @endforeach                            
                        </tbody>
                    </table> 
                    {{ $mahasiswa->links() }}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection