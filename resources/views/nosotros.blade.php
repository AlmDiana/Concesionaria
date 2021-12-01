@extends('layout.main')

@section('title','Nosotros')

@section('content')
<h1>Acerca de Nosotros</h1>
<hr>
<div class="container altura d-flex flex-column justify-content-center">

    <h2 class="text-center display-4 mb-4 mt-5 mt-md-0">Concesionaria con años de experiencia y la variedad que necesita</h2>
    <p class="lead text-center mb-5">Ofrecemos todo tipo de auto de acorde a su necesidad</p>
 
    <?php 
echo "<a href=\"https://www.motor.com.co/files/article_main/uploads/2020/05/29/5ed1844caffbe.jpeg\"><img src=\"https://www.motor.com.co/files/article_main/uploads/2020/05/29/5ed1844caffbe.jpeg\"></a>";
?>

</div>
@endsection()