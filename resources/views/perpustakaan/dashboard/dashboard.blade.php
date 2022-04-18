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


<div class="row row-cols-2 row-cols-md-5 mt-4" id="font-st">
  <div class="col">
    <div class="card border-0 shadow-lg p-4 h-100">
      <img src="https://i.pinimg.com/474x/00/7e/1d/007e1ddb787b9572ebf7118442a06540.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center text-center">
        <h5 class="card-title">KOMIK</h5>
        <p class="card-text">ONE PIECE</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 shadow-lg p-4 h-100">
      <img src="https://img.wattpad.com/cover/136453135-256-k932322.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center text-center">
        <h5 class="card-title">NOVEL</h5>
        <p class="card-text">Surat Untuk Starla</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 shadow-lg p-4 h-100">
      <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1342807290i/15761850.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center text-center">
        <h5 class="card-title">NOVEL</h5>
        <p class="card-text">DILEMA</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 shadow-lg p-4 h-100">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUbWgTSazpiH43IrzqWISZWfvvn7lBT6b7884B8HiYepEjXNUD6ouDNN830tgscRThwBg&usqp=CAU" class="card-img-top" alt="...">
      <div class="card-body text-center text-center">
        <h5 class="card-title">NOVEL</h5>
        <p class="card-text">Bukan Cinderella</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 shadow-lg p-4 h-100">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUbWgTSazpiH43IrzqWISZWfvvn7lBT6b7884B8HiYepEjXNUD6ouDNN830tgscRThwBg&usqp=CAU" class="card-img-top" alt="...">
      <div class="card-body text-center text-center">
        <h5 class="card-title">NOVEL</h5>
        <p class="card-text">Bukan Cinderella</p>
      </div>
    </div>
  </div>
@endsection




