@extends('base')

@section('title','Accueil')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/im1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/MamadouTraoré.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/maintenance.png" class="d-block w-100" alt="...">
          </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section id="learn" class="p-5">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <h2><a id="mots" href="{{route('about')}}" target=" _blank">Bloom events en quelques mots</a></h2>
        <div class="col-md">

            <div id='carrousel'>
                <div id='container'>


                    <div class="diapo" data-speed="2000" data-transition="700">
                        <div class="elements">

                            <div class="element">
                                <img src="image/im1.jpg" alt="Dame">

                            </div>
                            <div class="element">
                                <img src="image/im1.jpg" alt="Paysage">

                            </div>
                        </div>
                        <!-- Flèches -->
            <i id="nav-gauche" class="las la-chevron-left"></i>
            <i id="nav-droite" class="las la-chevron-right"></i>
                    </div>

                </div>
                   </div>
         </div>

         <div class="col-md p-5">

          <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing
             elit. Deserunt optio ducimus, temporibus molestias
              numquam nesciunt maxime adipisci dolorem neque aperiam.
          </p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing
             elit. Rerum iusto ratione laudantium officiis
             alias vero consequatur sunt doloribus perspiciatis nulla?
          </p>
          <a href="{{route('about')}}" class="btn btn-light mt-3 bg-warning">
            <i class="bi-chevron-right"></i>Lire plus
          </a>
         </div>
      </div>
    </div>
  </section>

  <section class="section-contact" id="contact">



    <div class="container-form  bg-light text-dark pt-5 ph-4">
        <h2><strong>NOS RECENTES RÉALISATIONS</strong> </h2>
        <p class="realisation">Lorem ipsum dolor sit amet adipisicing elit. Distinctio, non perspiciatis? accusantium ,quibusdam magni. </p>
        <section class="p-5">
            <div class="container">
              <div class="row text-center g-4">
                <div class="col-md">
                  <div class="card bg-warning text-light">
                    <div class="card-body text-center">
                      <div class="h1 mb-3">
                        <i class="bi bi-laptop"></i>
                      </div>
                      <img src="image/im1.jpg" class="card-img-top" alt="...">
                      <p class="card-text">
                        Lorem ipsum dolor sit amet  adipisicing
                         elit. Distinctio, non perspiciatis?
                        accusantium ,quibusdam magni.
                      </p>
                      <a href="#" class="btn btn-primary">Lire plus</a>
                    </div>
                  </div>
                </div>
                <div class="col-md"><div class="card bg-warning text-light">
                  <div class="card-body text-center">
                    <div class="h1 mb-3">
                      <i class="bi bi-person-square"></i>
                    </div>
                    <img src="image/im1.jpg" class="card-img-top" alt="...">
                    <p class="card-text">
                      Lorem ipsum dolor sit amet  adipisicing
                       elit. Distinctio, non perspiciatis?
                      accusantium ,quibusdam magni.
                    </p>
                    <a href="#" class="btn btn-primary">Lire plus</a>
                  </div>
                </div></div>
                <div class="col-md">
                  <div class="card bg-warning text-light">
                  <div class="card-body text-center">
                    <div class="h1 mb-3">
                      <i class="bi bi-people"></i>
                    </div>
                    <img src="image/im1.jpg" class="card-img-top" alt="...">
                    <p class="card-text">
                      Lorem ipsum dolor sit amet  adipisicing
                       elit. Distinctio, non perspiciatis?
                      accusantium ,quibusdam magni.
                    </p>
                    <a href="#" class="btn btn-primary">Lire plus</a>
                  </div>
                </div></div>
              </div>
            </div>
          </section>

    </div>

</section>
@endsection
