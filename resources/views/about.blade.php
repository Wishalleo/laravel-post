 @extends('layouts.main')
 @section('container')
 <h1>Halaman About</h1>
 <h3>{{ $name }}</h3>
 <p>{{ $email }}</p>
 <img src="img/IMG-20210531-WA0008.jpeg" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"> 
 @endsection