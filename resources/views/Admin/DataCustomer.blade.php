<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Customer</h1>

        <div class="container">
            <a href="/tambahdata"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <div class="row">

              {{-- Perkondisian yang mana jika Session get nya success, maka akan muncul pesan alert yang mengatakan data berhasil ditambahkan sesuai dengan function tambahdata --}}
              @if($message = Session::get('success'))
                 <div class="alert alert-success" role="alert">
                    {{$message}}
                 </div>
              @endif
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
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
                    @foreach($data as $data_cust)
                      <tr>
                        {{-- Data pada setiap kolom ditampilkan sesuai dengan atribut pada database, dan ditampilkan secara foreach --}}
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data_cust->nama}}</td>
                        <td>{{$data_cust->alamat}}</td>
                        <td>{{$data_cust->no_hp}}</td>
                        <td>{{$data_cust->email}}</td>
                        <td>{{$data_cust->username}}</td>
                        <td>

                            {{-- Button edit yang merupakan anchor ke route tampilkandata yang mana akan menampilkan TampilData untuk melakukan edit data --}}
                            <a href="/tampilkandata/{{$data_cust->id}}" class="btn btn-success">Edit</a>

                            {{-- Button delete yang menjalankan route delete yang juga terdapat pada function delete di controller untuk melakukan delete data --}}
                            <a href="/delete/{{$data_cust->id}}" class="btn btn-danger">Delete</a>
                        </td>

                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>