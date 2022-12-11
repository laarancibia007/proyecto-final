@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="/css/main.css"> --}}
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
            <section class="ent">
                <picture>
                    <img src="/img/imagen7.jpg" alt="">
                </picture>
                <div>
                    <h2>Todo nuestro catalogo de vehiculos.</h2>
                    <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo quasi, deserunt repellendus animi error ex est odio dolor, officiis facilis inventore architecto alias nesciunt voluptates ut qui, natus tempore eveniet!</h4>
                </div>
            </section>
            <!-- Cards -->
            <section class="prods">

                <div class="card">
                    <!-- fontawesome icon -->
                    <div>
                        <img class="img2" src="/img/imagen1.jpg" alt="">
                    </div>
                    <h3>Vehiculo 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen2.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen3.jpeg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 4</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen4.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 5</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen5.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 6</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen6.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 7</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen7.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 8</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
            </section>
        </section>

        {{-- <footer>Angel Arancibia &copy; 2022</footer> --}}
    </div>
</body>
</html>
