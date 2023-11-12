<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Permissions-Policy" content="accelerometer=(), camera=(), geolocation=()">

    <title>Data Customer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    <h5 class="#"><a href="/orders"><button type="button" class="btn btn-primary">Main Menu</button></a></h5>

    <h1 class="text-center mb-4">Data Customer</h1>

        <div class="container">
            <a href="/tambahdata"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            

            <div class="row g-3 align-items-center mt-2">
                <div class="col-auto">
                  <form action="/customer" method="GET">

                  <input type="search" id="inputSearch" class="form-control" aria-describedby="inputSearch" name="search">

                  </form>
                </div>


                
            </div>
            <div class="row">

              {{-- Perkondisian yang mana jika Session get nya success, maka akan muncul pesan alert yang mengatakan data berhasil ditambahkan sesuai dengan function tambahdata --}}
              {{-- @if($message = Session::get('success'))
                 <div class="alert alert-success" role="alert">
                    {{$message}}
                 </div>
              @endif --}}
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                    // membuat variabel no = 1 yang berfungsi jika terdapat data yang didelete pada nomor acak di tengah tengah, maka id akan direset dan langsung increment membuat id baru
                      $no = 1;
                    @endphp

                    {{-- foreach yang berfungsi agar data ditampilkan pada tabel dapat ditampilkan semuanya secara terus - menerus --}}
                    @foreach($data as $index => $data_cust)
                      <tr>
                        {{-- Data pada setiap kolom ditampilkan sesuai dengan atribut pada database, dan ditampilkan secara foreach --}}
                        <th scope="row">{{$index + $data->firstItem()}}</th>
                        <td>{{$data_cust->nama}}</td>
                        <td>
                          <img src="{{asset('fotocustomer/'.$data_cust->foto)}}" alt="" style="width:40px">

                        </td>
                        <td>{{$data_cust->alamat}}</td>
                        <td>{{$data_cust->no_hp}}</td>
                        <td>{{$data_cust->email}}</td>
                        <td>{{$data_cust->username}}</td>
                        
                        <td>
                            {{-- Button edit yang merupakan anchor ke route tampilkandata yang mana akan menampilkan TampilData untuk melakukan edit data --}}
                            <a href="/tampilkandata/{{$data_cust->id}}" class="btn btn-success">Edit</a>

                            {{-- Button delete yang menjalankan route delete yang juga terdapat pada function delete di controller untuk melakukan delete data --}}
                            <a href="" class="btn btn-danger delete" data-id="{{$data_cust->id}}" data-nama="{{$data_cust->nama}}">Delete</a>
                        </td>

                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {{ $data->links() }}


            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </body>
  <script>
    $('.delete').click(function(event){
      event.preventDefault(); // Hindari aksi default dari link
      var customerid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');

  
      Swal.fire({
        title: "Apa Kau Yakin?",
        text: "Kamu akan menghapus data customer dengan nama "+nama+"",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Iya, hapus data!"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = "/delete/"+customerid+""
          Swal.fire({
            title: "Terhapus",
            text: "Data Customer Berhasil Di Hapus",
            icon: "success"
          });
        }
      });
    });
  </script>
  <script>
    @if (Session::has('success'))
        toastr.success("{{session::get('success')}}");
    @endif
  </script>
</html>