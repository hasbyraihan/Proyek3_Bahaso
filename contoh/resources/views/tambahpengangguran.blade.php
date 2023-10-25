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
  <form action="/insertdata" method="POST" enctype="multipart/form-data">
  @csrf
    <h1 class="text-center mb-5">Identitas Data Anda</h1>
    <div class="container ">
      <div class="row justify-content-center" >
        <div class="col-8">
          <div class="card mb-5">
            <div class="card-body">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="jenkel" aria-label="Default select example">
                    <option selected>Jenis Kelamin</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                  <input type="number" name="notelp" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email </label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                  <input type="number" name="kodepos" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"> 
                </div>
                <label for="exampleInputEmail1" class="form-label">Kota</label>
                <input type="text" name="kota" class="form-control" id="exampleInputEmail1"
                 aria-describedby="emailHelp"> 
                </div>
                
                {{-- <a href="/tambahdatapengangguran2" class="btn btn-primary">Berikutny</a> --}}
                {{-- <a type="submit" href="tambahdatapengangguran2" class="btn btn-primary">Next</a> --}}
            </div>
            @include('tambahpengangguran2')
          </div>
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