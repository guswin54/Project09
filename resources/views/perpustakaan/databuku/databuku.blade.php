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
      <th scope="col">Nama Buku </th>
      <th scope="col">Judul Buku </th>
      <th scope="col">Penulis</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach ($databukus as $data=>$d)
  <tbody>

    <tr>
      <th scope="row">{{$data+1}}</th>
      <td>{{$d->namabuku}}</td>
      <td>{{$d->judulbuku}}</td>
      <td>{{$d->penulis}}</td>
      <td>
        <form action="/databuku/">
        <a href="edit">Edit</a>
        <button>Delete</button>
      </form>  
    </td>
    </tr>
    
  </tbody>
  @endforeach
</table>

@endsection