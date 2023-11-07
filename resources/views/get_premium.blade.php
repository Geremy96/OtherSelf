<!DOCTYPE html>
<html lang="en">

<head>
    <script defer src="funciones.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Círculos Interactivos</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
        }

        /*Inicio menu*/
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            transition: 0.7s;
            padding: 30px 20px;
            z-index: 10;
        }

        header.abajo {
            background-color: #fff;
            padding: 15px 20px;
        }

        .header .logo {
            position: relative;
            transition: 1.5s;
        }

        .nav {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header ul {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header ul li {
            list-style: none;
        }

        .header ul li a {
            position: relative;
            margin: 0 15px;
            text-decoration: none;
            color: #000000;
            letter-spacing: 2px;
            font-weight: 600;
            transition: 0.7s;
        }

        .header ul li a:hover {
            color: #1F818B;
            transition: .1s;

        }

        header.abajo .logo,
        header.abajo ul li a {
            color: #000;
        }

        /*Final menu*/

        /*inicio Paso a paso*/
        .container {
            text-align: center;
        }

        .circle {
            display: inline-block;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #3498db;
            color: #fff;
            font-size: 24px;
            line-height: 60px;
            margin: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .circle:hover {
            background-color: #e74c3c;
        }

        #text {
            display: none;
            text-align: center;
        }

        /*Fin paso a paso*/

        /*Inicio Cuadros de informacion*/
        .padre{
            display: flex;
            margin: 100px;
        }


        .styled-list li {
            margin-bottom: 10px;
            /* Espacio entre elementos de la lista */
        }

        /*Fin cuados de informacion*/
    </style>



</head>

<body>
    <!--Inicio menu-->
    <header class="header">
        <a href="{{ route('index') }}" class="logo"><img src="imagenes/logo.png" alt="" width="150px"></a>
        <nav class="nav">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">learnabout</a></li>
                <li><a href="{{ route('login') }}">Acceso +</a></li>
            </ul>
        </nav>
    </header>
    <!--Final menu-->

    <!--Inicio "Celebremos el mes de la salud mental"-->
    <img style="margin: 100px .01% 0 .01%" src="imagenes/descuento.png" alt="imagenes/descuento.png" width="100%"
        height="100%">
    <!--Fin "Celebremos el mes de la salud mental"-->

    <!--Inicio Pasos para adquirir premium-->
    <h1 style="text-align: center; margin: 70px 0 50px 0;">Círculos Interactivos</h1>

    <div style="display: flex; margin-left: 70px;" class="container">
        <div style="margin: 0 80px 0 80px;">
            <div class="circle" id="circle1">1</div>
            <h2>Llena el <br> formulario</h2>
        </div>
        <div style="margin: 0 80px 0 80px;">
            <div class="circle" id="circle2">2</div>
            <h2>Confirma <br> tu compra</h2>
        </div>
        <div style="margin: 0 80px 0 80px;">
            <div class="circle" id="circle3">3</div>
            <h2>Recibe <br> capacitacion</h2>
        </div>
        <div style="margin: 0 80px 0 80px;">
            <div class="circle" id="circle4">4</div>
            <h2>Cuide su <br> salud mental</h2>
        </div>
    </div>

    <div id="text">
        <p id="info1">Completa el formulario de compra que encuentras en esta página.</p>
        <p id="info2">Nos pondremos en contacto contigo para confrimar tu compra y solictar información necesaria
            para los siguientes pasos.</p>
        <p id="info3">Nuestro equipo visitará tu institución y dará toda la orientación necesaria al cuerpo de
            psicológos y a los estudiantes, para aprovechar al máximo Other-Self.</p>
        <p id="info4">Exprime el jugo de Other-self y espera a ver los resultados en tus alumnos.</p>
    </div>

    <!--Fin Pasos para adquirir premium-->

    <!--Inicio Atrevete a probar-->
    <img style="margin: 100px .01% 0 .01%" src="imagenes/atrevete.png" alt="imagenes/atrevete.png" width="100%"
        height="100%">

    <!--Fin atrevete a probar-->

    <!--Inicio Cuadros de informacion-->
    <!--uno-->
    <div class="padre">
        <div class="tex">
            <h3>Para los directores</h3>
            <ol class="styled-list">
                <li>Podrás saber la frecuencia y cantidad de alumnos que asisten al psicólogo institucional.</li>
                <li>Verás las reseñas que los alumnos dejan a los psicólogos luego de cada sesión.</li>
                <li>Crear y asignar credenciales (Usuario y contraseña) a los miembros de tu institución (Alumnos y psicólogos).</li>
            </ol>
        </div>
        <div class="img">
            <img src="imagenes/01.png" alt="imagenes/atrevete.png" width="450px" height="200px">
        </div>
    </div>
    <!--Dos-->
    <div class="padre">
        <div class="img">
            <img src="imagenes/01.png" alt="imagenes/atrevete.png" width="450px" height="200px">
        </div>
        <div style="margin-left: 100px;" class="tex">
            <h3>Para los psicólogos</h3>
            <ol class="styled-list">
                <li>Podrás saber la frecuencia y cantidad de alumnos que asisten al psicólogo institucional.V</li>
                <li>Verás las reseñas que los alumnos dejan a los psicólogos luego de cada sesión.</li>
                <li>Crear y asignar credenciales (Usuario y contraseña) a los miembros de tu institución (Alumnos y psicólogos).</li>
            </ol>
        </div>

    </div>
    <!--Tres-->
    <div class="padre">
        <div class="tex">
            <h3>Para los directores</h3>
            <ol class="styled-list">
                <li>Podrás saber la frecuencia y cantidad de alumnos que asisten al psicólogo institucional.</li>
                <li>Verás las reseñas que los alumnos dejan a los psicólogos luego de cada sesión.</li>
                <li>Crear y asignar credenciales (Usuario y contraseña) a los miembros de tu institución (Alumnos y psicólogos).</li>
            </ol>
        </div>
        <div class="img">
            <img src="imagenes/01.png" alt="imagenes/atrevete.png" width="450px" height="200px">
        </div>
    </div>
    <!--Fin cuadros de informacion-->


    <script src="o.js"></script>
</body>

</html>
