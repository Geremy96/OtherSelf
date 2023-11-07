<html>

<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="funciones.js"></script>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            line-height: 1.5;
            font-family: 'Montserrat', sans-serif;
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
            color: #ffffff;
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

        /*Inicio carrusel*/
        .espacio {
            margin: 10px 10px 10px 10px;
        }

        #container-slider {
            position: relative;
            display: block;
            width: 100%;
        }

        #slider {
            position: relative;
            display: block;
            width: 100%;
            height: 100vh;
            min-height: 500px;
        }

        #slider li {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100%;
            height: 100%;
            display: block;
            -webkit-transition: opacity 1s;
            -moz-transition: opacity 1s;
            -ms-transition: opacity 1s;
            -o-transition: opacity 1s;
            transition: opacity 1s;
            z-index: -1;
            opacity: 0;
        }

        #container-slider .arrowPrev,
        #container-slider .arrowNext {
            font-size: 30pt;
            color: rgba(204, 204, 204, 0.65);
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 50px;
            z-index: 2;
        }

        #container-slider .arrowNext {
            left: initial;
            right: 50px !important;
        }

        .content_slider {
            padding: 15px 30px;
            color: #FFF;
            width: 100%;
            height: 100%;
        }

        .content_slider div {
            text-align: center;
        }

        .content_slider h2 {
            font-size: 30pt;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .content_slider h3 {
            font-size: 15pt;
            color: #FFF;
            margin-bottom: 20px;
        }

        #slider li .content_slider {
            background: rgba(0, 0, 0, 0.50);
            padding: 10px 125px;
        }

        .content_slider {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btnSlider {
            color: #FFF;
            font-size: 15pt;
            letter-spacing: 1px;
            padding: 10px 50px;
            border: 1px solid #CCC;
            background: #0B444B;
            border-radius: 31px;
            text-decoration: none;
            transition: .5s all;
        }

        .btnSlider:hover {
            background: #ff0404;
            border: 1px solid #111;

        }

        .listslider {
            position: absolute;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            justify-content: space-between;
            align-items: center;
            left: 50%;
            bottom: 5%;
            list-style: none;
            z-index: 2;
            transform: translateX(-50%);
        }

        .listslider li {
            border-radius: 50%;
            width: 10px;
            height: 10px;
            cursor: pointer;
            margin: 0 5px;
        }

        .listslider li a {
            background: #CCC;
            border-radius: 50%;
            width: 100%;
            height: 100%;
            display: block;
        }

        .item-select-slid {
            background: #FFF !important;
        }

        @media screen and (max-width: 460px) {
            .content_slider h2 {
                font-size: 15pt !important;
            }

            .content_slider p {
                font-size: 12pt !important;
            }

            #container-slider .arrowPrev,
            #container-slider .arrowNext {
                font-size: 20pt;
            }

            #container-slider .arrowPrev {
                left: 15px;
            }

            #container-slider .arrowNext {
                right: 15px !important;
            }

            #slider {
                height: 400px;
                min-height: 400px;
            }

            #slider li .content_slider {
                padding: 10px 35px;
            }

            .btnSlider {
                padding: 10px 30px;
                font-size: 10pt;
            }
        }

        /*Fin carrusel*/

        /*Inicio Video*/
        .contenedorvideos {
            margin: 50px;
        }

        /*Inicio video1*/
        .video {
            display: flex;
            background-color: rgb(255, 255, 255);
            padding: 0 100px 0 100px;
            margin: 5px;
        }

        .video iframe {
            border-radius: 10%;
            border: 20px solid #D9D9D9;
            margin: auto;
        }

        .video div {
            text-align: center;
            margin: auto;
        }

        /*Fin video1*/

        /*Inicio video2*/
        .video2 {
            display: flex;
            background-color: rgb(255, 255, 255);
            padding: 0 100px 0 100px;
            margin: 5px;
        }

        .video2 iframe {
            border-radius: 10%;
            border: 20px solid #D9D9D9;
            margin: auto;
        }

        .video2 div {
            text-align: center;
            margin: auto;
        }

        /*Fin video2*/

        /*Inicio video3*/
        .video3 {
            display: flex;
            background-color: rgb(255, 255, 255);
            padding: 0 100px 0 100px;
            margin: 5px;
        }

        .video3 iframe {
            border-radius: 10%;
            border: 20px solid #D9D9D9;
            margin: auto;
        }

        .video3 div {
            text-align: center;
            margin: auto;
        }

        /*Fin video3/
/*Fin videos*/

        /*Inicio mision, vision metas*/
        .contenedor {
            display: flex;
            margin: 20px 350px 20px 350px;
            text-align: center;
        }



        .segundo {
            margin-right: 30px;
            margin-left: 30px;
            padding-right: 30px;
            padding-left: 30px;
            border-right: 1px solid #D9D9D9;
            border-left: 1px solid #D9D9D9;
        }

        .primer {
            background-color: #3498db;
            transition: transform 0.3s;
        }

        .primero:hover {
            transform: scale(1.1);
        }

        .segundo:hover {
            transform: scale(1.1);
        }

        .tercero:hover {
            transform: scale(1.1);
        }

        /*Fin mision, vision, metas*/

        /*Inicio quienes somos*/
        .quinessomos {
            margin-left: 60px;
            display: flex;
        }

        .texto {
            text-align: center;
            margin: auto;
        }

        .imagen {
            text-align: center;
            margin: auto;
        }

        /*Fin quienes somos*/

        /*Inicio pie de pagina*/
        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: #10494F;
            padding: 70px 0;
            margin-top: 30px;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        /*Fin pie de pagina*/
    </style>
</head>

<body>

    <div class="responsibe"> <!--Lo hace responsivo-->

        <!--Inicio menu-->
        <header class="header">
            <a href="{{ route('index') }}" class="logo"><img src="imagenes/logo.png" alt="" width="150px"></a>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('about') }}">Learn about</a></li>
                    <li><a style="color: #1F818B;" href="{{ route('get_premium') }}">Get Premium</a></li>
                    <li><a href="{{ route('login') }}">Acceso +</a></li>
                </ul>
            </nav>
        </header>
        <!--Final menu-->

        <!--Inicio carrusel-->
        <div class="espacio">
            <section id="container-slider">
                <!--Parte de las flechas-->
                <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i
                        class="fas fa-chevron-circle-left"></i></a>
                <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i
                        class="fas fa-chevron-circle-right"></i></a>
                <!--Parte de flechas-->
                <ul class="listslider">
                    <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
                    <li><a itlist="itList_1" href="#"></a></li>
                    <li><a itlist="itList_2" href="#"></a></li>
                    <li><a itlist="itList_3" href="#"></a></li>
                </ul>

                <!--Imagenes del carrusel-->
                <ul id="slider">
                    <li style="background-image: url('imagenes/01.jpg'); z-index:0; opacity: 1;">
                        <div class="content_slider">
                            <div>
                                <h3>Recuerda:</h3>
                                <h2>!Jugar es divertido! pero tu salud mental no es un juego</h2>
                                <a href="#" target="_blank" class="btnSlider">Login</a>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url('imagenes/02.jpg'); ">
                        <div class="content_slider">
                            <div>
                                <h3>Estudiantes</h3>
                                <h2>La salud mental es una asignatura obligatoria</h2>
                                <a href="#" target="_blank" class="btnSlider">Learn about</a>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url('imagenes/03.jpg'); ">
                        <div class="content_slider">
                            <div>
                                <h3>Psicólogo</h3>
                                <h2>Psicologo, con "Other-Self, puedes olvidarte de las tareas administrativas y
                                    centrarte en el alumno"
                                </h2>
                                <a href="#" target="_blank" class="btnSlider">Login</a>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url('imagenes/02.jpg'); ">
                        <div class="content_slider">
                            <div>
                                <h3>Director</h3>
                                <h2>Escribe el texto que aparecerá sobre la imagen número 4.</h2>
                                <a href="#" target="_blank" class="btnSlider">Get premium</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
        <!--fin carrusel-->

        <!--Inicio Video-->
        <!--Inicio ideo 1-->
        <div class="contenedorvideos">
            <div class="video">
                <iframe width="300" height="250" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                <div>
                    <h2 style="margin: 10px;">Aprende a cuidarte tanto como estudias</h2>
                    <p>Other Self es una plataforma que <br> promueve la salud mental <br> estudiantil, facilitando la
                        <br>comunicación y recursos entre <br>estudiantes y psicólogos institucionales.
                    </p>
                </div>
            </div>
            <!--Fin video uno-->

            <!--Inicio video 2-->
            <div class="video2">
                <div>
                    <h2 style="margin: 10px;">Lo que un estudiante necesita para cuidarse</h2>
                    <p>Con Other-Self, los alumnos tienen <br> acceso a mucha información sobre la <br> importancia y
                        cuidado de
                        la salud <br> mental. También pueden saber ciertos <br> tips psicológicos para tener 10 en sus
                        <br>
                        materias.
                    </p>
                </div>
                <iframe width="300" height="250" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            <!--Fin video 2-->

            <!--Inicio video 3-->
            <div class="video3">
                <iframe width="300" height="250" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                <div>
                    <h2 style="margin: 10px;">Lo que un psicológo necesita para cuidarlo</h2>
                    <p>Detrás de Other-Self se encuentra un <br>equipo multidiscliplinar compuesto por <br> estudiantes,
                        maestros
                        de inglés, <br> informática y psicológos del Centro <br>¡Supérate! Fundación Poma.</p>
                </div>
            </div>
        </div>
        <!--Fin video 3-->
        <!--Fin videos-->

        <!--Inicio mision vision valores-->
        <div class="contenedor">

            <div class="primero">
                <h3>Misión</h3>
                <p>Brindar a los estudiantes la oportunidad de tener una sesión psicológica dentro de su institución
                    para que puedan tener un mejor desarrollo en su vida.</p>
                <img style="margin: 15px;" src="imagenes/mision.png" alt="">
            </div>

            <div class="segundo">
                <h3>Visión</h3>
                <p>Desarrollar una herramienta para las instituciones en la cual los estudiantes puedan informarse sobre
                    la salud mental y agendar una sesión psicológica.
                </p>
                <img style="margin: 15px;" src="imagenes/vision.png" alt="">
            </div>

            <div class="tercero">
                <h3>Valor</h3>
                <p>La mentalidad de Other-Self está basada en valores cómo solidaridad, respeto, integridad,
                    responsabilidad, y compromiso para brindar un mejor producto</p>
                <img style="margin: 15px;" src="imagenes/valor.png" alt="">
            </div>

        </div>
        <!--Fin mision vision valores-->

        <!--Inicio quienes somos-->
        <div class="quinessomos">
            <div class="texto">
                <h2 style="margin: 10px;">¿Quienés somos?</h3>
                    <p>Detrás de Other-Self se encuentra un equipo <br>multidiscliplinar compuesto por<br> estudiantes,
                        maestros de inglés,<br> informática y psicológos del Centro<br> ¡Supérate! Fundación Poma.
                        <pre></pre>
                        Nuestro objetivo es abastecer a los <br> psicológos escolares y los estudiantes <br>con
                        herramientas que
                        promuevan el <br>cuido de la salud mental.
                    </p>
            </div>
            <div class="imagen">
                <img style="margin: 0" src="imagenes/grupo.png" alt="Other-Self" width="350px" height="200px">
                <h2>Conoce nuestro <br> equipo</h2>
            </div>
        </div>
        <!--Fin quienes somo-->

        <!--Aqui empieza el pie de pagina-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Menu</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Learn About</a></li>
                            <li><a href="#">Get Premium</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Legal</h4>
                        <ul>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Privacidad</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">Aviso legal y condiciones de uso</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>About us</h4>
                        <ul>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Equipo</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Other-Self</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Aqui finaliza el pie de pagina-->
    </div>

</body>

</html>
