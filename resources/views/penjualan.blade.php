<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Katagori</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        @foreach ($penjualan as $p)
            <tbody>
            <tr>
            <th scope="row">{{$p->id_produk}}</th>
            <td>{{$p->nama_produk}}</td>
            <td>{{$p->harga}}</td>
            <td>{{$p->katagori}}</td>
            <td>{{$p->status}}</td>
            <td>
              <ul class="nav">
                <a href="">Edit</a>
                <form action="{{route ('penjualan.destroy', $p->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-warning">Hapus</button>
                </form>
              </ul>
            </td>
            </tr>
        </tbody>
        @endforeach
        
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>