<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device-width, initial-scale=1.0">
        <title>Proyek 3</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
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
                <a href="/pengangguran" class="btn p-3 rounded-7" tabindex="-1" role="button" aria-disabled="true">Create your CV</a>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
