<!DOCTYPE html>
<html lang="en">

<head>
    <script defer src="funciones.js"></script>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Learn about</title>
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
            background-color: #ffffff;
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

        /*Inicio preparece*/
        .wrap {
            margin: 40px;
            width: 99%;
            height: 10%;
            margin-left: 5px;
            padding: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to bottom, rgb(0 0 0/ .1), rgb(0 0 0/ .1)), url(imagenes/preparence.png);
            background-size: cover;
            background-position: center;
        }

        .wrap-texto {
            color: #ffffff;
        }

        /*Fin preparece*/

        /*Inicio "APRENDE SOBRE"*/
        /*Inicio contenido de los modales, de adentro y fuera*/
        .contenedor {
            display: flex;
            margin: auto;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
            text-align: center;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px 100px 20px 20px;
            border-radius: 15px;
            width: 70%;
            height: 70%;
            overflow: auto;
        }

        .close-button {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            cursor: pointer;
            font-size: 24px;
        }

        .modal-close-button {
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            margin-left: 90px;
            cursor: pointer;
            font-size: 16px;
        }

        .modal-button {
            display: block;
            margin: 30px auto;
            padding: 30px 40px;
            background-color: #1F818B;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .modal-button:hover {
            background-color: #10494F;
        }

        /*Fin contenido de los modales, de adentro y fuera*/

        /*Inicio codigo, estilos de lo que esta dentro del modal*/
        .contenedor1 {
            display: flex;
            margin: auto auto auto 80px;
            background-color: rgb(255, 255, 255);
            text-align: center;
        }

        .texto {
            background-color: #1F818B;
            padding: 20px;
            border-radius: 30px;
            margin: 40px;
        }

        .container {
            width: 200px;
            margin: auto;
            padding: 10px;
        }

        /*Inicio botones*/
        /* Estilo para los botones */
        .custom-button {
            text-align: center;
            display: block;
            margin: 4px;
            background-color: #1F818B;
            color: white;
            cursor: pointer;
            padding: 0 100px 0 0;
            width: 10%;
            text-align: center;
            border: none;
            transition: 0.4s;
        }

        /* Estilo para los botones activos */
        .custom-button.active,
        .custom-button:hover {
            background-color: #2980b9;
        }

        /* Estilo inicial para ocultar la información adicional */
        .custom-panel {
            display: none;
            padding: 10px;
        }

        /* Estilo para el contenido dentro del panel */
        .custom-panel .content {
            padding: 50px;
            /* Espacio de padding de 50px */
        }

        /*Fin botones*/

        /*Fin codigo, estilos de lo que esta dentro del modal*/
        /*Fin "APRENDE SOBRE"*/

        /*Inicio contenido de los segundos modales, de adentro y fuera*/
        .contenedor {
            display: flex;
            margin: auto;
        }

        .custom-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
            text-align: center;
        }

        .custom-modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ff0000;
            padding: 20px 100px 20px 20px;
            border-radius: 15px;
            width: 70%;
            height: 70%;
            overflow: auto;
        }

        .custom-close-button {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            cursor: pointer;
            font-size: 24px;
        }

        .custom-modal-close-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .custom-modal-button {
            display: block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .custom-modal-button:hover {
            background-color: #0056b3;
        }

        /*Fin contenido de los segundos modales, de adentro y fuera*/

        /*Inicio pie de pagina*/
        .container1 {
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

    <!--Inicio menu-->
    <header class="header">
        <a href="{{ route('index') }}" class="logo"><img src="imagenes/logo.png" alt="" width="150px"></a>
        <nav class="nav">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a style="color: #1F818B;" href="{{ route('get_premium') }}">Get Premium</a></li>
                <li><a href="{{ route('login') }}">Acceso +</a></li>
            </ul>
        </nav>
    </header>
    <!--Final menu-->

    <!--inicio reparate-->
    <h1 style="margin: 110px 0 0 0 ; text-align: center;">¡PREPÁRATE!</h1>

    <div class="wrap">

        <div class="wrap-texto">
            <h1>Todo ser humano, si se lo propone, puede ser escultor de su propio cerebro.</h1>
            <p style="text-align: right; margin: 15px;">~Santiago Ramon y Cajal</p>
        </div>
    </div>
    <!--Fin preparate-->

    <!--Inicio "APRENDE SOBRE"-->
    <h1 style="margin: 50px 0 10px 0 ; text-align: center;">APRENDE SOBRE</h1>

    <!--Inicio botones que lleva al modal, los que estan afuera, para que se entienda-->
    <div class="contenedor">
        <button class="modal-button" id="modal1-button">¿Qué son los <br>Psicológos?</button>
        <button class="modal-button" id="modal2-button">¿Tengo un <br> problema <br> mental?</button>
        <button class="modal-button" id="modal3-button">¿Qué se hace en <br> una sesión <br> psicológica?</button>
    </div>
    <!--Fin botones que llevan al modal-->

    <!--Inicio contenido primer modal-->
    <div class="modal" id="modal1">
        <div class="modal-content">
            <span class="close-button" id="modal1-close">&times;</span>
            <!--Inicio Contendio-->
            <div style="margin-top: 50px" class="contenedor1">
                <div class="texto">
                    <h2>What are psychologists?</h2>
                    <p>A psychologist is a professional in the area of mental <br> health, which has a training and
                        clinical skills by which, <br> through the application of different skills help us to deal <br>
                        efficiently with the problems of life and mental health.
                </div>

                <!--Inicio botones deplegables-->
                <div>
                    <button style="margin-top: 100px" class="custom-button" id="button1">Function</button>
                    <div class="custom-panel" id="panel1">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>The psychologist represents the figure of a trainer and educator by which, for the coping
                                skills of people, not only to solve possible problems or disorders, but also to enable
                                patients to cope with relapses or new problems, so that learning can last for a long
                                time.</p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button2">When to go?</button>
                    <div class="custom-panel" id="panel2">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>If you present symptoms of anxiety, depression, constant relationship problems, stress,
                                control of emotions such as anger, constant mood swings, lack of appetite, insomnia,
                                constant sadness, suicidal thoughts or behavior, you may need psychological help.
                                However, it should be clarified that each person is the one who decides personally when
                                to go.</p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button3">Types of psychologists</button>
                    <div class="custom-panel" id="panel3">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>- Educational psychologists
                                - Organizational/work psychologists
                                - Sports psychologists
                                - Criminal/forensic psychologists
                                - Neuropsychologists
                                - Social psychologists
                                - Health psychologists
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>
                </div>
                <!--Fin botones deplegables-->
            </div>
            <!--Fin contenido-->
            <button style="margin: 25px 0 0 125px ;" class="modal-close-button" id="modal1-close-button">Cerrar</button>
        </div>
    </div>
    <!--Fin contenido primer modal-->

    <!--Inicio contenido segundo modal-->
    <div class="modal" id="modal2">
        <div class="modal-content">
            <span class="close-button" id="modal2-close">&times;</span>
            <!--Inicio Contendio-->
            <div style="margin-top: 50px" class="contenedor1">
                <div class="texto">
                    <h2>Do I have a mental health problem?</h2>
                    <p>A mental illness or mental problem refers to a number of mental health conditions, i.e.,
                        disorders that can affect behavior, mood, and thinking.</p>
                </div>

                <!--Inicio botones deplegables-->
                <div style="margin-top: 100px">
                    <button style="text-align: center" class="custom-button" id="button3">Symptoms</button>
                    <div class="custom-panel" id="panel4">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>- Mental illness may present some of the following symptoms:
                                - Feelings of sadness or discouragement
                                - Poor ability to concentrate or fuzzy thinking
                                - Excessive fears or strong feelings of guilt
                                - Radical mood swings
                                - Extreme tiredness
                                - Isolation from activities or social groups
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button4">Causes</button>
                    <div class="custom-panel" id="panel5">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>There are times when mental health problems stem from inherited attributes. This is
                                inherited from a parent or relative, which increases the risk of mental illness.
                                Another cause is exposure to certain elements from a very young age, exposure to an
                                environment of violence, drugs or different diseases that can affect mental health from
                                a young age.
                                And finally, the neural networks of the brain, if they are affected, cause the nervous
                                system or other parts to be modified, which can lead to some mental health symptoms.
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button5">Risk factors</button>
                    <div class="custom-panel" id="panel6">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>Apart from the causes mentioned above, there are also other factors which may pose a risk
                                to mental health.
                                - Stressful life situations (financial, emotional, etc.)
                                - Permanent illness
                                - Brain damage due to severe injury
                                - Traumatic experiences
                                - Use of illicit substances
                                - Abuse since childhood
                                - Poor social interaction
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>
                </div>
                <!--Fin botones deplegables-->
            </div>
            <!--Fin contenido-->
            <button class="modal-close-button" id="modal2-close-button">Cerrar</button>
        </div>
    </div>
    <!--Fin contenido segundo modal-->

    <!--Inicio contenido tercer modal-->
    <div class="modal" id="modal3">
        <div class="modal-content">
            <span class="close-button" id="modal3-close">&times;</span>

            <!--Inicio Contendio-->
            <div style="margin-top: 50px" class="contenedor1">
                <div class="texto">
                    <h2>What is done in a psychological session?</h2>
                    <p>The psychological sessions is a process that can be very useful for people who suffer from a
                        mental problem or symptom, with this in mind. It is important to have a successful first
                        appointment, in which the ice is broken between the psychologist and the patient, it is the
                        space where they can get to know each other and build a bond of trust.</p>
                </div>

                <!--Inicio botones deplegables-->
                <div style="margin-top: 100px">
                    <button style="text-align: center" class="custom-button" id="button7">Frequently asked
                        questions</button>
                    <div class="custom-panel" id="panel7">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>During the first psychological session, the psychologist or therapist may ask a series of
                                questions in order to get to know you better and plan how to follow up on subsequent
                                sessions, some of them are:
                                - What are your symptoms?
                                - What brought you to therapy?
                                - What do you feel is wrong in your life?
                                - Some questions about your history, including your childhood, education, relationships
                                (family, romantic, friends), your current living situation and your career.
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button8">The role of psychologists in psychological
                        sessions</button>
                    <div class="custom-panel" id="panel8">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>Psychologists offer a wide range of assessments and treatment options such as online
                                psychological therapies for those struggling with emotional problems. They are there to
                                improve the quality of people's lives in times of crisis, but also to prevent relapses
                                and maintain consistent care.
                                Most psychologists choose to do comprehensive psychological evaluations, which help
                                identify and diagnose various mental health problems and illnesses. This helps guide
                                appropriate treatment and reduces problems that can cause relapse, the cost of
                                psychological therapy is well worth the cost.
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button9">Considerations</button>
                    <div class="custom-panel" id="panel9">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>When starting a psychological process, it is important to have a series of considerations
                                to keep in mind:
                                1. First of all, do not expect your problems to be solved in the first session, it is a
                                whole process of not only overcoming a problem or trauma, but it is a learning and
                                training in case of later problems or situations.
                                2. It is also important that you establish a relationship of trust with your
                                psychologist, which is key for the process to be more effective and have a better
                                outcome.
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>
                </div>
                <!--Fin botones deplegables-->
            </div>
            <!--Fin contenido-->
            <button class="modal-close-button" id="modal3-close-button">Cerrar</button>
        </div>
    </div>
    <!--Fin contenido tercer modal-->
    <!--Fin "APRENDE SOBRE"-->

    <!--Inicio "RECOMENDACIONES"-->
    <h1 style="margin: 10px 0 50px 0 ; text-align: center;">RECOMENDACIONES</h1>
    <!--Inicio segundos botones que lleva al modal, los que estan afuera, para que se entienda-->
    <div class="contenedor">
        <button class="modal-button" id="modal4-button">Tips <br> emocionales</button>
        <button class="modal-button" id="modal5-button"> Artículos </button>
        <button class="modal-button" id="modal6-button"> Páginas / <br>Organizaciones</button>
    </div>
    <!--Fin botones que llevan al modal-->

    <!--Inicio contenido primer modal-->
    <div class="modal" id="modal4">
        <div class="modal-content">
            <span class="close-button" id="modal4-close">&times;</span>

            <!--Inicio Contendio-->
            <div style="margin-top: 50px" class="contenedor1">
                <div class="texto">
                    <h2>What is done in a psychological session?</h2>
                    <p>The psychological sessions is a process that can be very useful for people who suffer from a
                        mental problem or symptom, with this in mind. It is important to have a successful first
                        appointment, in which the ice is broken between the psychologist and the patient, it is the
                        space where they can get to know each other and build a bond of trust.</p>
                </div>

                <!--Inicio botones deplegables-->
                <div>
                    <button style="margin-top: 100px" class="custom-button" id="button10">How can I feel better?</button>
                    <div class="custom-panel" id="panel10">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>Plan activities and prioritize them. Decide between different study techniques. Eat healthy meals on a regular schedule. Play sports or recreational activities. Spend time on hobbies and pastimes. Maintain stable sleep cycles.</p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button11">Recognize your worth</button>
                    <div class="custom-panel" id="panel11">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>Mental health is a changing process, and no matter where you are, your value as a person does not change. In order to learn to take care of yourself, it is very important that you accept who you are and how you feel, whether you are sad, feeling great or somewhere in between.</p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button12">Question your inner critic</button>
                    <div class="custom-panel" id="panel12">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>We are often our own worst critics and don't hesitate for a second to blame or criticize ourselves. The next time you realize what you are doing, ask yourself the following questions, "Would I talk to a friend like that?", "What would I say to them if they were having a hard time or had made a mistake?". Treat yourself with the same consideration you would treat anyone else.
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>
                </div>
                <!--Fin botones deplegables-->
            </div>
            <!--Fin contenido-->
            <button class="custom-modal-close-button" id="modal4-close-button">Cerrar</button>
        </div>
    </div>
    <!--Fin contenido primer modal-->

    <!--Inicio contenido segundo modal-->
    <div class="modal" id="modal5">
        <div class="modal-content">
            <span class="close-button" id="modal5-close">&times;</span>

            <!--Inicio Contendio-->
            <div style="margin-top: 50px" class="contenedor1">
                <div class="texto">
                    <h2>Articles</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum veritatis praesentium, numquam laborum hic modi aut harum repudiandae tenetur eveniet dolore explicabo placeat? Doloremque debitis ea commodi dolore labore quae.</p>
                </div>

                <!--Inicio botones deplegables-->
                <div>
                    <button style="margin-top: 100px" class="custom-button" id="button13">PAHO Mental Health</button>
                    <div class="custom-panel" id="panel13">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>The Mental Health Project promotes, coordinates and implements technical cooperation activities aimed at strengthening national capacities to develop policies, plans, programs and services, contributing to promote mental health, reduce the burden of mental illness, prevent disabilities and develop rehabilitation.</p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button14">Mental health in adolescents WHO</button>
                    <div class="custom-panel" id="panel14">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>Adolescents with mental disorders are particularly vulnerable to social exclusion, discrimination, stigmatization problems (affecting willingness to seek help), educational difficulties, risk behaviors, poor physical health and human rights violations.</p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>

                    <button class="custom-button" id="button15">Mental health APA</button>
                    <div class="custom-panel" id="panel15">
                        <!-- Contenido largo con padding de 50px -->
                        <div class="content">
                            <p>Mental health is a state of mind characterized by emotional well-being, good behavioral adjustment, a relative absence of anxiety and disabling symptoms, and the ability to establish constructive relationships and cope with the ordinary demands and stresses of life.</p>
                            </p>
                            <!-- Más contenido aquí... -->
                        </div>
                    </div>
                </div>
                <!--Fin botones deplegables-->
            </div>
            <!--Fin contenido-->
            <button class="custom-modal-close-button" id="modal5-close-button">Cerrar</button>
        </div>
    </div>
    <!--Fin contenido segundo modal-->

    <!--Inicio contenido tercer modal-->
    <div class="custom-modal" id="modal6">
        <div class="custom-modal-content">
            <span class="custom-close-button" id="modal6-close">&times;</span>
            <!--Inicio Contendio-->
            <div style="margin-top: 50px" class="contenedor1">
                <div class="texto">
                    <h2>Bienvenido a la tienda de ropa online!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> A enim, officiis iusto nemo
                        molestias minima
                        et cupiditate <br> numquam rerum, magnam odio dolore mollitia facere <br> aperiam quam. Ratione
                        nostrum
                        dolor quis?</p>
                </div>

                <div class="container">
                    <div class="box" id="box1">
                        <div class="content">Cuadro 1</div>
                        <div class="additional-info">Información adicional del Cuadro 1.</div>
                    </div>
                    <div class="box" id="box2">
                        <div class="content">Cuadro 2</div>
                        <div class="additional-info">Información adicional del Cuadro 2.</div>
                    </div>
                    <div class="box" id="box3">
                        <div class="content">Cuadro 3</div>
                        <div class="additional-info">Información adicional del Cuadro 3.</div>
                    </div>
                </div>
            </div>
            <!--Fin contenido-->
            <button class="custom-modal-close-button" id="modal6-close-button">Cerrar</button>
        </div>
    </div>
    <!--Fin contenido tercer modal-->
    <!--Fin "RECOMENDACIONES"-->

    <!--Aqui empieza el pie de pagina-->
    <footer class="footer">
        <div class="container1">
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
</body>

</html>
