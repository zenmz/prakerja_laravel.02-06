@extends('template')
@section('main')
    <h1>Ini halaman Coba</h1>

    @for ($i = 0; $i < 10; $i++)
        @if ($i % 2)
            {{-- <h1>Genap</h1> --}}
            <img src="{{ asset('img/photo-1678055702765-a9fbd945478e.jpeg') }}" alt="" width="300px">
        @endif
        {{-- <h1>Perulangan dengan blade</h1> --}}
    @endfor
@endsection
