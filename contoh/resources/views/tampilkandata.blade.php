<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Pengangguran</title>
  </head>
  <body>
    <h1 class="text-center mb-5">Edit data Pengangguran</h1>
    <div class="container">
      <div class="row justify-content-center " > 
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/editdata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp" value="{{$data->nama}}"> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="jenkel" aria-label="Default select example">
                    <option selected>{{$data->jenkel}}</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                    
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                  <input type="number" name="notelp" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"value="{{$data->notelp}}"> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email </label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp"value="{{$data->email}}">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"value="{{$data->alamat}}"> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                  <input type="number" name="kodepos" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"value="{{$data->kodepos}}"> 
                </div>
                <label for="exampleInputEmail1" class="form-label">Kota</label>
                <input type="text" name="kota" class="form-control" id="exampleInputEmail1"
                 aria-describedby="emailHelp"value="{{$data->kota}}"> 
                </div>  
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </div>
    </div>
  </body>
</html>