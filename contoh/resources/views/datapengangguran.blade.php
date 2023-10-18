<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Data Pengangguran</title>
  </head>
  <body>
    <div class="nav">
      <div class="logo">
          <a href="#">
              <p>Ci<span>Vi</span></p>
          </a>
      </div>
      <ul>
          <li> <a class="nav1" href="http://127.0.0.1:8000/tambahpengangguran">Create CV</a> </li>
          <li> <a class="nav1" href="http://127.0.0.1:8000/tambahpengangguran">Templates</a> </li>
          <li> <a class="nav1" href="http://127.0.0.1:8000/tambahpengangguran"> Login </a> </li>
      </ul>
    </div>
    <h1 class="text-center mb-5">Data Pengangguran</h1>
    <div class="container">
    <a href="/tambahpengangguran" class="btn btn-success">Tambah</a>
      <div class="row">
        @if ($message = Session::get('success'))
        @endif
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
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
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{$row->id}}</th>
              <td>{{$row->nama}}</td>
              <td>{{$row->jenkel}}</td>
              <td>{{$row->notelp}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->alamat}}</td>
              <td>{{$row->kodepos}}</td>
              <td>{{$row->kota}}</td>
              {{-- <td>{{$row->created_at->format("D M Y") }}</td> --}}
              <td>
                <a href="/tampildata/{{$row->id}}" class="btn btn-primary">Edit</a>
                <a href="/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
   
      </div>
    </div>
    <div class="footer">
      <div class="row"> 
          <div class="footer-col">
              <h3> Create your resume in a minute,<br> get your dream job in a blink.</h3>
              <div class="social-media">
                  <a href="https://www.facebook.com">
                      <img src="img/Facebook.png" alt="">
                  </a>
                  <a href="https://www.instagram.com">
                      <img src="img/Instagram.png" alt="">
                  </a>
                  <a href="https://www.linkedin.com">
                      <img src="img/LinkedIn.png" alt="">
                  </a>
                  <a href="https://www.twitter.com">
                      <img src="img/Twitter.png" alt="">
                  </a>
              </div>
          </div>
          <div class="footer-col">
                  <h4>Terms & Policies </h4>
                  <ul>
                      <li><a href="#">Terms of Service</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                  </ul>
          </div>
          <div class="footer-col">
                  <h4>Company</h4>
                  <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Contact Us</a></li>
                  </ul>
          </div>
          <div class="footer-col">
                  <h4>Contact </h4>
                  <ul>
                      <li><a href="#">090932</a></li>
                      <li><a href="#">hasby608@gmail.com</a></li>
                  </ul>
          </div>
          <div class="garis">
              <hr style=" width:1170px; margin-top: 80px; margin-left: 130px; color:#FFFFFF;">
          </div>

          <div class="copyright">
              <h6>Copyright, CiVi 2023. All rights reserved.</h6>
          </div>

      </div>
  </div>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>