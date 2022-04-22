<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage - cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/app.css">

</head>
<body>
<!-- Contenido -->
    <section class="container-fluid content">

        <!-- Cards -->


        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active d-flex justify-content-center align-item-center">
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto " style="width: 18rem; height: 40rem;">
                        <img class="card-img-top " src="{{asset('images/metodo kanban.png')}}" alt="Eventos">
                        <div class="card-body">
                            <small class="card-txt-category">Categoría: Talleres</small>
                            <h5 class="card-title my-2">Aprende el metodo kanban  en un dos tres</h5>
                            <div class="d-card-text">
                                El método fue desarrollado por Toyota y, en resumen, es una forma de registrar tareas y acciones a través de simbologías visuales.
                                La idea central del método es muy simple y el material de fácil acceso utilizado ya forma parte del día a día de las empresas y oficinas.
                            </div>
                            <a href="#" class="post-link"><b>Leer más</b></a>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <span class="card-txt-author">Chiwi Acádemy
                                    </span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="card-txt-date"> 26 DE ABRIL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              
              <div class="carousel-item">
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem; height: 40rem;">
                        <img class="card-img-top" src="{{asset('images/masterclasdanielatobarportada.jpg')}}" alt="Eventos">
                        <div class="card-body">
                            <small class="card-txt-category">Categoría: Masterclass</small>
                            <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                            <div class="d-card-text">
                                Lorema ipsum dolor sit amet consectetur adipisicing elit.
                                Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                eius corrupti nulla veniam, molestias nemo repudiandae?
                            </div>
                            <a href="#" class="post-link"><b>Leer más</b></a>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <span class="card-txt-author">Chiwi Acádemy
                                    </span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="card-txt-date">28 DE ABRIL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem; height: 40rem;">
                        <img class="card-img-top" src="{{asset('images/Senseida-y-cloudappi.jpg')}}" alt="Eventos">
                        <div class="card-body">
                            <small class="card-txt-category">Categoría: Webinar</small>
                            <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                            <div class="d-card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                eius corrupti nulla veniam, molestias nemo repudiandae?
                            </div>
                            <a href="#" class="post-link"><b>Leer más</b></a>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <span class="card-txt-author">Chiwi Acádemy
                                    </span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="card-txt-date">30 DE ABRIL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon btn-dark" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon btn-dark" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>