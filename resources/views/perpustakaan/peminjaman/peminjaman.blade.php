@extends('perpustakaan/layout/main')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-family:Lobster;">Perpustakaan Santuy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav" style="font-family:Archivo;">
      
        <li class="nav-item">
          <a class="nav-link  d-flex align-content-center" aria-current="page" href="/dashboard" ><span class="material-icons">dashboard</span>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-content-center" href="/databuku" ><span class="material-icons">menu_book</span>Data Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-content-center" href="/datauser" ><span class="material-icons">people</span>Data User</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link d-flex align-content-center" href="/peminjaman" ><span class="material-icons">today</span>Peminjaman</a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
<br>
<br>

<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama </th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">NSB</th>
      <th scope="col">Tanggal Peminjaman</th>
      <th scope="col">Tanggal Pengembalian</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jacob</td>
      <td>Komik</td>
      <td>One Piece</td>
      <td>001</td>
      <td>13 April 2022</td>
      <td>15 April 2022</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jack</td>
      <td>Novel</td>
      <td>Surat Untuk Starla</td>
      <td>002</td>
      <td>13 April 2022</td>
      <td>16 April 2022</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Roselina</td>
      <td>Novel</td>
      <td>Cinta Segitiga</td>
      <td>003</td>
      <td>16 April 2022</td>
      <td>20 april 2022</td>
      
    </tr>
  </tbody>
</table>

@endsection