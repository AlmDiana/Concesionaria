@extends('layout.main')

@section('title','Contactos')

@section('content')
<h1>Contáctanos</h1>

<P>Teléfono - 0987900772</P>

<hr>
@switch($name)
    @case(1)
        Bienvenido Administrador
    @break
    @case(2)
        Bienvenido Empleado
    @break
    @case(3)
        Bienvenido Gerente
    @break
    @default
        Correo: iniciativa.vengadores@epn.edu.ec
    @endswitch
@endsection()