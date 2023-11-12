<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Customer</h1>

    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">

                    {{-- Bagian tag form untuk membuat form pengisian data ketika ingin menambahkan data
                    , lalu terdapat action yang mengarahkan ke route insertdata dan method yang digunakan
                    adalah POST dengan enctype multipart/form-data --}}
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                      @csrf

                      {{-- Form nama dengan label nama dan inputan text dan masuk ke dalam atribut nama --}}
                      <div class="mb-3">
                        <label  class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama"  >
                        
                      </div>

                      {{-- Form alamat dengan label alamat dan inputan text dan masuk ke dalam atribut alamat --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat"  >
                        
                      </div>

                      {{-- Form No Hp dengan label No Hp dan inputan text dan masuk ke dalam atribut no_hp --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                        <input type="tel" class="form-control" name="no_hp"  >
                        
                      </div>

                      {{-- Form email dengan label email dan inputan text dan masuk ke dalam atribut email --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email"  >
                        
                      </div>

                      {{-- Form username dengan label username dan inputan text dan masuk ke dalam atribut username --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="tel" class="form-control" name="username" >
                        
                      </div>
                      

                      {{-- Form password dengan label password dan inputan text dan masuk ke dalam atribut password --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password"  >
                        
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                        <input type="file" class="form-control" name="foto"  >
                        
                      </div>
                      
                      {{-- Button untuk submit tambah data --}}
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
                
            </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>