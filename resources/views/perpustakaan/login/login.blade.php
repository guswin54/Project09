@extends('perpustakaan/layout/main')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
        <form action="/" method="POST" class="text-center col-6 shadow p-4 border">
            @csrf
            <h3 style="font-family:Fredericka the Great;">Perpustakaan</h3>
            <br>
            
            <div class="mb-2">
                <input name="email" type="text" class="form-control" placeholder="Email">
            </div>
            
            <div class="mb-2">
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <br>
            <button type="submit" class="w-50 rounded-pill btn btn-primary">Login</button>
        </form>
    </div>

@endsection