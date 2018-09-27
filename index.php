<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css'; ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
    <header>
        <section class="container logo-contact">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo>">
                        <img src="<?php bloginfo('template_directory');?>/logo-Asys.png" alt="Asys">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact">
                        <h1><i class="fas fa-phone-volume"></i> 3128284788 <i class="fab fa-whatsapp"></i></h1>
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
                        <p>No mas incertidumbre en tus finanzas ni en tu gestion contable</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image">
                        <img src="<?php bloginfo('template_directory');?>/imagen-cabezera.png" class="w-100" alt="">
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
                        <img src="<?php bloginfo('template_directory');?>/servicio1.png" alt="Asesoria Financiera">
                        <h6>Asesoria Financiera</h6>
                        <p>Incrementa y rentabiliza cada vez más los recursos financieros de la compañía.</p>
                    </div>
                    <div class="col-sm-3">
                        <img src="<?php bloginfo('template_directory');?>/servicio2.png" alt="Auditoria NIIF">
                        <h6>Auditoria <br> NIIF</h6>
                        <p>Auditamos los marcos normativos vigentes de contabilidad evitando costosas sanciones.</p>
                    </div>
                    <div class="col-sm-3">
                        <img src="<?php bloginfo('template_directory');?>/servicio3.png" alt="Asesoria Tributaria">
                        <h6>Asesoria Tributaria</h6>
                        <p>Planeación tributaria que optimiza tu tiempo y tus recursos al máximo para que no pagues de más.</p>
                    </div>
                    <div class="col-sm-3">
                        <img src="<?php bloginfo('template_directory');?>/servicio4.png" alt="Asesoria Regimen Cambiario">
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
                <img src="<?php bloginfo('template_directory');?>/flecha.png" alt="Diagnostico Gratis">
                <hr>
            </div>
            <div class="line-vertical">
            </div>
            <div class="form-request">
                <h2>Solicita hoy tu diagnóstico <strong>gratis</strong></h2>
                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="number" placeholder="Numero">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary">SOLICITAR AHORA</button>
                </form>
            </div>
            <canvas>
                <h3>Su navegador no soporta canvas</h3>
            </canvas>
        </section>
    </main>
</body>

</html>