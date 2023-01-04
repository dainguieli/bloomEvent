@extends('base')

@section('title','À propos')

@section('content')

<section style="padding: 90px"  >
    <div class="container" >
        <div class="row align-items-center justify-content-between">

            <div class="col-md">

                <div id='carrousel'>
                    <div >


                        <div class="diapo">
                            <div class="elements">

                                <div class="element">
                                    <img src="image/im1.jpg" alt="Dame">

                                </div>
                                <div class="element">
                                    <img src="image/im1.jpg" alt="Paysage">

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md p-5">
                <h4 class="creation">CREATION DE BLOOM EVENTS</h4>
                <p class="lead ">
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Deserunt optio ducimus, temporibus molestias
                    numquam nesciunt maxime adipisci dolorem neque aperiam.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Rerum iusto ratione laudantium officiis
                    alias vero consequatur sunt doloribus perspiciatis nulla?
                </p>
                <a href="{{ route('about') }}" class="btn btn-light mt-3 bg-warning">
                    <i class="bi-chevron-right"></i>Lire plus
                </a>
            </div>
        </div>
    </div>
</section>
 <section class="section-objecti_valeur_impact" id="objecti_valeur_impact">
    <div class="wpb_wrapper">    <div class="grop-missions_area">
        <div class="grop-missions_block container  grop-service-63ace8f1646e1">
         <div class="con-class  grop-service-63ace8f1646e1">
           <div class="row">
                         <div class="col-md-4 col-sm-4">
                 <div class="grop-missions_single">
                                     <div class="grop-float_left  grop-missions_icon">
                       <img src="https://www.woman-leader.org/wp-content/uploads/2020/05/icons8-objectif-48.png" alt="">
                     </div>
                                   <div class="grop-fix grop-missions_txt">
                     <h4><a href="#0">Objectifs</a></h4><p class="d-flex justify-content-around">L'objectif général de woman leader est la promotion du genre  qui s'opère à travers trois objectifs majeurs : une éducation meilleure pour la jeune fille, un leadership exceptionnel et une autonomisation réelle et inclusive de la société.</p>                </div><!--/end-->
                 </div>
               </div>
                         <div class="col-md-4 col-sm-4">
                 <div class="grop-missions_single">
                                     <div class="grop-float_left  grop-missions_icon">
                       <img src="https://www.woman-leader.org/wp-content/uploads/2017/01/logo-two.png"  alt="">
                     </div>
                                   <div class="grop-fix grop-missions_txt">
                     <h4><a href="#0">Nos valeurs</a></h4><p>Les valeurs que nous prônons à Woman Leader reflètent notre vision commune, nos objectifs et nos missions:
      La Solidarité
      L'Engagement Mutuel
      La Responsabilisation
   Ces trois grandes valeurs reflètent nos principes fondamentaux en ce qui concnernent la manière dont nous fonctionnons au sein de notre propre équipe. Chacune de ses valeurs ci-dessus est tout aussi importante que l'autre pour décrire la manière dont nous travaillons en équipe. </p>                </div><!--/end-->
                 </div>
               </div>
                         <div class="col-md-4 col-sm-4 col-sm-offset-0  col-md-offset-0">
                 <div class="grop-missions_single">
                                     <div class="grop-float_left  grop-missions_icon">
                       <img src="https://www.woman-leader.org/wp-content/uploads/2020/05/icons8-développez-influence-48.png" alt="">
                     </div>
                                   <div class="grop-fix grop-missions_txt">
                     <h4><a href="#0">Notre impact </a></h4><p>Notre association permet aux jeunes filles d’explorer et de développer leur potentiel en leadership afin d’avoir un impact positif sur la société à travers des formations et des programmes de bénévolat. A ce jour, Woman a formé plus de 2000 filles sur l'éducation sexuelle et reproductive, et a formé plus de 100 jeunes filles sur les thématiques liées à l'entrepreunariat à travers notre programme de bénévolat.</p>                </div><!--/end-->
                 </div>
               </div>

           </div>
         </div>
       </div>
     </div>



           </div>
       </div>
   </div>
</section>
@endsection
