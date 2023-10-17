<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device-width, initial-scale=1.0">
        <title>Proyek 3</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="fontawesome/all.js"></script>
    </head>
    <body>

        <div class="wrapper">
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
            <div class="header">
                <h5>Create <span>Profesional</span> CVs 
                <br> <span>Ease and Creativity</span></h5>
            </div>

            <div class="content-header">
                <p> Create Impressive CVs in Minutes!.</p>
            </div>
             
            <div class="abutton">
                <a href="/tambahpengangguran" class="btn p-3 rounded-7" tabindex="-1" role="button" aria-disabled="true">Create your CV</a>
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
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
