@extends('master')
@section('konten')
    <body>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-secondary">
                    <div class="inner">
                      <h3>{{$pengangguran->count()}}</h3>

                      <p>Pengangguran</p>
                    </div>
                    <div class="small-box-footer"></div> 
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-secondary">
                    <div class="inner">
                      <h3>{{$pendidikan->count()}}</h3>

                      <p>Riwayat Pendidikan</p>
                    </div>
                    <div class="small-box-footer"></div> 
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-secondary">
                    <div class="inner">
                      <h3>{{$portofolio->count()}}</h3>

                      <p>Portofolio</p>
                    </div>
                    <div class="small-box-footer"></div> 
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-transparent">
                          <h3 class="card-title">Pembayaran</h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <div class="table-responsive">
                            <table class="table m-0">
                              <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">foto</th>
                                <th scope="col">Name</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">Dibuat</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach ($pengangguran as $row)
                            <tr>
                                <td>{{ ++$i}}</td>
                                <td><img src="{{ asset('uploads/foto/' . $row->foto) }}" width="100" alt=""></td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jenkel }}</td>
                                <td>{{ $row->notelp }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->kodepos }}</td>
                                <td>{{ $row->kota }}</td>
                                <td>{{ $row->created_at->format("D M Y") }}</td>
                            </tr>
                            @endforeach
                              </tbody>
                            </table>
                          </div>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                          <span class="float-left"></span>
                          <a href="pengangguran" class="btn btn-sm btn-secondary float-right">Lihat Semua Pengangguran</a>
                        </div>
                        <!-- /.card-footer -->
                      </div>
                      <!-- /.card -->
                </div>
              </div>
        </div>
    </section>
@endsection
