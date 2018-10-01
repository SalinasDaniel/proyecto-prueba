<!DOCTYPE HTML>
<html lang="es">

<head>
    <title>Asys</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hacemos sencillo el pago de impuestos y las gestion financiera de tu empresa. No mas incertidumbre en tus finanzas ni en tu gestion contable">
    <link href="index.html" rel="canonical">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
    <header>
        <section class="logo-contact">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo>">
                        <img src="assets/images/logoAsys.png" alt="Asys">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact">
                        <h1><i class="fas fa-phone-volume"></i> 3173658826 <i class="fab fa-whatsapp"></i></h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="headboard">
            <div class="row">
                <div class="col-sm-6">
                    <div class="description-headboard">
                        <p class="text1">Hacemos sencillo el pago de impuestos y las gestion financiera de tu empresa</p>
                        <hr>
                        <p><strong>No mas incertidumbre en tus finanzas ni en tu gestion contable</strong></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image">
                        <img src="assets/images/imagencabezera.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
        <hr>
        <section class="services">
            <div class="title">
                <h3>Nuestro productos le permiten alcanzar el maximo beneficio financiero a tu empresa</h3>
            </div>
            <div class="list-services">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="assets/images/servicio1.png" alt="Asesoria Financiera">
                        <h6>Asesoria Financiera</h6>
                        <p>Incrementa y rentabiliza cada vez más los recursos financieros de la compañía.</p>
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/servicio2.png" alt="Auditoria NIIF">
                        <h6>Auditoria <br> NIIF</h6>
                        <p>Auditamos los marcos normativos vigentes de contabilidad evitando costosas sanciones.</p>
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/servicio3.png" alt="Asesoria Tributaria">
                        <h6>Asesoria Tributaria</h6>
                        <p>Planeación tributaria que optimiza tu tiempo y tus recursos al máximo para que no pagues de más.</p>
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/servicio4.png" alt="Asesoria Regimen Cambiario">
                        <h6>Asesoria Regimen Cambiario</h6>
                        <p>Realizamos la legalización obligatoria de las transacciones de divisas internacionales.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="request">
            <div class="description">
                <p class="text1">Paga el menor monto posible de impuestos.</p>
                <p class="text2">Evita multas y sanciones multimillonarias.</p>
                <img src="assets/images/flecha.png" alt="Diagnostico Gratis">
                <hr>
            </div>
            <div class="line-vertical">
            </div>
            <div class="form-request">
                <?php include 'validar.php'; ?>
                <h2>Solicita hoy tu diagnóstico <strong>gratis</strong></h2>
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="number" placeholder="Numero">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <input type="hidden" name="action" value="process_form">
                    <button type="submit" class="btn btn-primary">SOLICITAR AHORA</button>
                </form>
            </div>
            <canvas>
                <h3>Su navegador no soporta canvas</h3>
            </canvas>
        </section>
        <section class="diagnosis">
            <div class="image">
                <div class="text">
                    <p>Precios bajos que se adaptan a todos los tamaños de empresa y presupuestos. Tomar buenas decisiones no cuesta más.</p>
                </div>
                <a href="#">
                    <button type="button" class="btn btn-default">SOLICITAR DIAGNÓSTICO GRATUITO AHORA</button>
                </a>
            </div>
        </section>
        <section class="comprehensive-advice">
            <div class="row row-1">
                <div class="col-sm-4">
                    <h6>Asesoría Integral</h6>
                    <hr>
                    <p>Descubre cómo mejoran tus finanzas, <strong>el acompañamiento de nuestros expertos.</strong></p>
                    <a href="#">
                        <button type="button" class="btn btn-default">Conoce a fondo cómo te ayudamos</button>
                    </a>
                </div>
                <div class="col-sm-8">
                    <img src="assets/images/advice.png" alt="Asesoria Integral">
                </div>
            </div>
            <div class="row row-2">
                <div class="col-sm-4">
                    <img src="assets/images/asesoria1.png" alt="Asesoria">
                    <p>Levantamiento y generación de informe.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="assets/images/asesoria2.png" alt="Asesoria">
                    <p>Formulación del plan de mejora continua.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="assets/images/asesoria3.png" alt="Asesoria">
                    <p>Ejecución y evaluación del plan de mejora.</p>
                </div>
            </div>
        </section>
        <section class="button">
            <a href="#">
                <button type="button" class="btn btn-default">SOLICITAR DIAGNÓSTICO GRATUITO AHORA</button>
            </a>
        </section>
        <section class="strategy">
            <p class="title"><strong>Vamos a complementar tu equipo interno, <br>en conjunto diseñaremos y desarrollaremos</strong> una estrategia que potencie el beneficio financiero de tu empresa.</p>
            <div class="row">
                <div class="col-sm-3">
                    <div class="circle">
                        <img src="assets/images/estrateguia1.png" alt="Estrateguias">
                        <p>Evaluaciones claras de riesgos fiscales y modelos de planeación tributaria.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="circle">
                        <img src="assets/images/estrateguia2.png" alt="Estrateguias">
                        <p class="text2">Capacitaciones personalizadas y detalladas en actualidad financiera, contable y tributaria.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="circle">
                        <img src="assets/images/estrateguia2.png" alt="Estrateguias">
                        <p>Acompañamiento constante para la toma de decisiones financieras y gerenciales.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="circle">
                        <img src="assets/images/estrateguia2.png" alt="Estrateguias">
                        <p>Transacciones internacionales seguras. </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contac-whats">
            <div class="background-whastapp">
                <p>¿Tienes preguntas acerca del tema financiero? <br> Contacta GRATIS ahora con un asesor experto </p>
                <a href="#"><img src="assets/images/contactowhatsapp.png" alt="Whatsapp"></a>
                <p><label>O llama al</label> 847 0737</p>
            </div>
        </section>
        <section class="team-company">
            <h1>Conoce a tu equipo Asys Consulting</h1>
            <div class="row row-1">
                <div class="col-sm-4">
                    <div class="content">
                        <div class="company-member-1">
                            <img src="assets/images/companymenber1.png" alt="Miembro Asys">
                        </div>
                        <div class="description">
                            <h6>ANYELA PARRA</h6>
                            <p>Contador Público / Universidad de la Salle. Experiencia de más de dos año en procesos de NIIF, elaboración de políticas contables. Implementación y asesoría de Normas Internacionales de Información Financiera.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content">
                        <div class="company-member-2">
                            <img src="assets/images/companymenber1.png" alt="Miembro Asys">
                        </div>
                        <div class="description">
                            <h6>SORAYA SANCHEZ</h6>
                            <p>Especialista en Contabilidad Financiera Internacional / Pontificia Universidad Javeriana. Estudios sobre Normas Internacionales de Contabilidad / Southerastern Lousiana University Contador Público / Universidad Libre de Colombia.
                                Consultor SAP Business One / SAP Global.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content">
                        <div class="company-member-3">
                            <img src="assets/images/companymenber1.png" alt="Miembro Asys">
                        </div>
                        <div class="description">
                            <h6>ANDRA SANCHEZ</h6>
                            <p>Ingeniero de Sistemas / Universidad Libre de Colombia. Master en Diseño y Gestión de Proyectos Tecnológicos / Universidad Internacional de la Rioja (UNIR)- España. Consultor SAP Business One / SAP Global. Técnica profesional
                                en Gestión Contable y Financiera / Servicio Nacional de Aprendizaje SENA.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-2">
                <div class="col-sm-4">
                    <div class="content">
                        <div class="company-member-4">
                            <img src="assets/images/companymenber1.png" alt="Miembro Asys">
                        </div>
                        <div class="description">
                            <h6>FERNANDO BAENA</h6>
                            <p>Especialista en Contabilidad Financiera Internacional / Pontificia Universidad Javeriana Especialista en Impuestos y Planeación Tributaria/ Universidad Libre de Colombia Contador Público / Universidad Católica de Oriente Contador
                                público con experiencia de más de 12 años.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content">
                        <div class="company-member-5">
                            <img src="assets/images/companymenber1.png" alt="Miembro Asys">
                        </div>
                        <div class="description">
                            <h6>ANDRÉS BERNAL</h6>
                            <p>Ingeniero Industrial / Universidad Distrital de Colombia Master en Diseño y Gestión de Proyectos Tecnológicos / Universidad Internacional de la Rioja (UNIR)-España Director de Proyectos TIC PMP 1910368 Consultor SAP Business
                                One / SAP Globa</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content">
                        <div class="description-alianze">
                            <p>SOMOS EL ALIADO <br> QUE APOYA TU <br> ENTENDIMIENTO FINANCIERO</p>
                        </div>
                        <div class="alliance">
                            <img src="assets/images/logoalinazaasys.png" alt="Alianza">
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        <section class="request2">
            <div class="desp"></div>
            <div class="description">
                <p class="text1">Evita sanciones por el incumplimiento de la ley.</p>
                <p class="text2">Tu tranquilidad empieza con una tributación sana.</p>
                <img src="assets/images/flechablanca.png" alt="Diagnostico Gratis">
                <hr>
            </div>
            <div class="line-vertical">
            </div>
            <div class="form-request">
                <h2 class="diagnosis-free">Solicita hoy tu diagnóstico <strong>gratis</strong></h2>
                <form class="form2" action="/action_page.php">
                    <div class="form-group">
                        <input type="text" class="form-control form-reques2" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control form-reques2" id="number" placeholder="Numero">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-reques2" id="email" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary">SOLICITAR AHORA</button>
                </form>
            </div>
            <canvas>
                    <h3>Su navegador no soporta canvas</h3>
                </canvas>
        </section>
    </main>
    <footer>
        <div class="row">
            <div class="col-sm-6">
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>Calle 70a bis No. 117 -15 T.O1 Ofic. 1101
                    </li>
                    <li>
                        <i class="fas fa-phone-volume"></i>317 365 8826 / 315 847 0737
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>Info@asysconsultingcol.com
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="logo">
                    <img src="assets/images/logoAsysFooter.png" alt="Asys">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>