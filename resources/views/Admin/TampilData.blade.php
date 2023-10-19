<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Customer</h1>

    <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                      @csrf

                      {{-- Form nama dengan label nama yang pada pada kolomnya masi terdapat data yang sesuai dengan value yang ditunjuk, yaitu nilai pada atribut nama. Pada hal ini,kita dapat mengubah datanya dan akan menjadi data yang baru yang masuk ke dalam atribut nama --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                        
                      </div>

                      {{-- Form alamat dengan label alamat yang pada pada kolomnya masi terdapat data yang sesuai dengan value yang ditunjuk, yaitu nilai pada atribut alamat. Pada hal ini,kita dapat mengubah datanya dan akan menjadi data yang baru yang masuk ke dalam atribut alamat --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
                        
                      </div>

                      {{-- Form No Hp dengan label No Hp yang pada pada kolomnya masi terdapat data yang sesuai dengan value yang ditunjuk, yaitu nilai pada atribut no_hp. Pada hal ini,kita dapat mengubah datanya dan akan menjadi data yang baru yang masuk ke dalam atribut no_hp --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                        <input type="tel" class="form-control" name="no_hp" value="{{$data->no_hp}}">
                        
                      </div>

                      {{-- Form email dengan label email yang pada pada kolomnya masi terdapat data yang sesuai dengan value yang ditunjuk, yaitu nilai pada atribut email. Pada hal ini,kita dapat mengubah datanya dan akan menjadi data yang baru yang masuk ke dalam atribut email --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$data->email}}">
                        
                      </div>

                      {{-- Form username dengan label username yang pada pada kolomnya masi terdapat data yang sesuai dengan value yang ditunjuk, yaitu nilai pada atribut username. Pada hal ini,kita dapat mengubah datanya dan akan menjadi data yang baru yang masuk ke dalam atribut username --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="tel" class="form-control" name="username" value="{{$data->username}}">
                      </div>

                      {{-- Form password dengan label password yang pada pada kolomnya masi terdapat data yang sesuai dengan value yang ditunjuk, yaitu nilai pada atribut password. Pada hal ini,kita dapat mengubah datanya dan akan menjadi data yang baru yang masuk ke dalam atribut password --}}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="{{$data->password}}">
                        
                      </div>
            
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