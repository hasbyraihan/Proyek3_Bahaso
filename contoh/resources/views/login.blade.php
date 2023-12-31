<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="fontawesome/all.js"></script>
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
    </style>
</head>
<body>
  <div class="nav">
    <div class="logo">
        <a href="http://127.0.0.1:8000/">
            <p>Ci<span>Vi</span></p>
        </a>
    </div>
    <ul>
        <li> <a class="nav1" href="http://127.0.0.1:8000/tambahpengangguran">Create CV</a> </li>
        <li> <a class="nav1" href="http://127.0.0.1:8000/tambahpengangguran">Templates</a> </li>
        <li> <a class="nav1" href="http://127.0.0.1:8000/login_aja"> Login </a> </li>
    </ul> 
  </div>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/Logins.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/login" method="post">
            @csrf
            <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="email" type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-success btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Belum mempunyai akun? <a href="/register"
                class="link-primary">Daftar</a></p>
          </div>

        </form>
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
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('sweetalert::alert')
</body>
</html>