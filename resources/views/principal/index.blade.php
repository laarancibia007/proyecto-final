@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Concesionario Vehicular</title>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <section class="index">
            {{-- <header>
                <div>
                    <a href="#">Concesionario Vehicular</a>
                    <!-- hamburguesa -->
                    <!-- ul>li>a -->
                    <!-- esto permite crear una lista completa como atajo -->
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="catalogo.html">Productos</a></li>
                        <li><a href="inicio.html">Inicio de Sesion</a></li>
                    </ul>
                </div>
            </header> --}}
            <!-- Enterprise -->
            <section class="ent">
                <picture>
                    <img src="/img/imagen5.jpg" alt="">
                </picture>

            </section>
            <div>
                <h1>Vehiculo 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis, non ab officia autem dolor veritatis ratione ipsum molestiae, quisquam nulla suscipit eligendi totam? Culpa eligendi facilis velit vel voluptatibus.</p>
            </div>

            <!-- Cards -->
            <h2>Informacion acerca de mantenimiento y repuestos</h2>
            <section class="prods">
                <div class="card">
                    <!-- fontawesome icon -->
                    <h3>Accesorios y repuesto</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <h3>Prueba de manejo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <h3>Configuracion</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <h3>Mantenimiento</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
            </section>
        </section>
        <h2>Informacion de los vehiculos</h2>
        <section class="ent1">
            <picture>
                <img src="/img/imagen3.jpeg" alt="">
            </picture>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis, non ab officia autem dolor veritatis ratione ipsum molestiae, quisquam nulla suscipit eligendi totam? Culpa eligendi facilis velit vel voluptatibus.</p>
            </div>
        </section>


        <!-- Title -->

        <h1>Galeria de Vehiculos</h1>

        <!-- Galeria -->
        <div class="grid-galeria">

            <a href="" class="grid-galeria_item">
                <img src="/img/imagen3.jpeg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen1.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen7.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen5.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen4.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen1.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen7.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen2.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen3.jpeg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen5.jpg" alt="" class="grid-galeria_img">
            </a>
        </div>


        <!-- Cards -->
        <h2>Informacion acerca de mantenimiento y repuestos</h2>
        <section class="prods">
            <div class="card">
                <!-- fontawesome icon -->
                <h3>Accesorios y repuesto</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
            </div>
            <div class="card">
                <!-- fontawesome icon -->
                <h3>Prueba de manejo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
            </div>
            <div class="card">
                <!-- fontawesome icon -->
                <h3>Configuracion</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
            </div>
            <div class="card">
                <!-- fontawesome icon -->
                <h3>Mantenimiento</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
            </div>
        </section>

        <footer>Angel Arancibia &copy; 2022</footer>
    </div>
</body>
</html>
