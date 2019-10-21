@extends('plantilla')

@section('seccion')
<br><h1>Este es mi equipo de trabajo</h1><br>

@foreach ($equipo as $item)
<a href="{{route('nosotros', $item)}}" class="h4 text-danger">{{$item}}</a><br>
@endforeach

@if(!empty($nombre))

    @switch($nombre)
        @case($nombre == 'Saul')
        <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
        <p>el ninja</p>
        @break

        @case($nombre == 'Daniel')
        <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
        <p>el complementoso</p>
        @break

        @case($nombre == 'Isidro')
        <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
        <p>el monopolioso</p>
        @break

        @case($nombre == 'Jéssica')
        <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
        <p>bowser</p>
        @break

    @endswitch

@endif

@endsection
